<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepagePerformanceTest extends TestCase
{
    public function test_homepage_prioritizes_hero_and_defers_secondary_media()
    {
        \Illuminate\Support\Facades\DB::enableQueryLog();
        $response = $this->get('/');
        $response->assertOk();
        $this->assertSame([], \Illuminate\Support\Facades\DB::getQueryLog(), 'The public homepage should not query content tables.');
        $dom = new \DOMDocument();
        @$dom->loadHTML($response->getContent());
        $xpath = new \DOMXPath($dom);
        $hero = $xpath->query('//img[@src="/images-mist/header.jpg"]')->item(0);
        $this->assertSame('high', $hero->getAttribute('fetchpriority'));
        $this->assertSame('eager', $hero->getAttribute('loading'));
        foreach ($xpath->query('//img[starts-with(@src, "/images-mist/")]') as $image) {
            $this->assertGreaterThan(0, (int) $image->getAttribute('width'));
            $this->assertGreaterThan(0, (int) $image->getAttribute('height'));
            if (!in_array($image->getAttribute('src'), ['/images-mist/header.jpg', '/images-mist/logo-mdu.png'])) {
                $this->assertSame('lazy', $image->getAttribute('loading'));
            }
        }
        foreach ($xpath->query('//video') as $video) {
            $this->assertSame('none', $video->getAttribute('preload'));
            $this->assertFalse($video->hasAttribute('poster'));
            $this->assertFileExists(public_path($video->getAttribute('data-poster')));
            $this->assertTrue($video->hasAttribute('controls'));
        }
        foreach ($xpath->query('//script[@src]') as $script) {
            $this->assertDoesNotMatchRegularExpression('/tinymce|gsap|Draggable|InertiaPlugin|script-welcome/', $script->getAttribute('src'));
        }
        $this->assertSame(0, $xpath->query('//link[contains(@href, "bootstrap/4")]')->length);
    }

    public function test_other_pages_keep_their_animation_dependencies()
    {
        $this->get('/aboutus')->assertOk()->assertSee('script-welcome-mist.js', false)->assertSee('gsap.min.js', false);
    }

    public function test_homepage_webp_sources_exist_and_describe_real_image_widths()
    {
        $response = $this->get('/');
        $response->assertOk();
        $dom = new \DOMDocument();
        @$dom->loadHTML($response->getContent());
        $xpath = new \DOMXPath($dom);
        $sources = $xpath->query('//picture/source[@type="image/webp"]');
        $this->assertGreaterThan(20, $sources->length);
        $responsiveImages = 0;
        foreach ($sources as $source) {
            $candidates = explode(',', $source->getAttribute('srcset'));
            if (count($candidates) > 1) {
                $responsiveImages++;
            }
            foreach ($candidates as $candidate) {
                $parts = preg_split('/\s+/', trim($candidate));
                $path = public_path(ltrim($parts[0], '/'));
                $this->assertFileExists($path);
                $metadata = getimagesize($path);
                $this->assertSame('image/webp', $metadata['mime']);
                if (isset($parts[1])) {
                    $this->assertSame((int) $parts[1], $metadata[0]);
                }
            }
        }
        $this->assertGreaterThanOrEqual(8, $responsiveImages);
    }
}
