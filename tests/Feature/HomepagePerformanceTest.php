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
}
