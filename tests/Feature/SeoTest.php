<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeoTest extends TestCase
{
    public function test_marketing_pages_render_with_expected_headings_and_canonical()
    {
        $paths = ['/', '/dance-la-crosse', '/dance-onalaska', '/dance-holmen',
            '/dance-west-salem', '/dance-la-crescent', '/dance-team', '/guys',
            '/hip-hop-classes', '/tap-jazz-classes', '/preschool-dance',
            '/ballet-la-crosse', '/tumble-classes-la-crosse', '/parties', '/summer', '/adult-dance-classes'];
        foreach ($paths as $path) {
            $response = $this->get($path);
            $response->assertOk();
            $dom = new \DOMDocument();
            @$dom->loadHTML($response->getContent());
            $xpath = new \DOMXPath($dom);
            // The homepage's added H1 was removed at the owner's request.
            $this->assertSame($path === '/' ? 0 : 1, $xpath->query('//h1')->length, $path);
            $canonicals = $xpath->query('//link[@rel="canonical"]');
            $this->assertSame(1, $canonicals->length, $path);
            $this->assertSame('https://mistysdance.com'.$path, $canonicals->item(0)->getAttribute('href'));
            $this->assertSame(0, $xpath->query('//meta[@name="robots" and contains(@content,"noindex")]')->length);
        }
    }

    public function test_sitemap_contains_only_reachable_crawlable_public_pages()
    {
        // Legacy contact/prepro layouts include the database-backed updates banner.
        \Illuminate\Support\Facades\Schema::create('updates', function ($table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
        \Illuminate\Support\Facades\Schema::create('communities', function ($table) {
            $table->id();
            $table->string('month');
            $table->integer('day');
            $table->string('program');
            $table->string('time');
            $table->string('teacher')->nullable();
            $table->string('url')->nullable();
            $table->string('button')->nullable();
            $table->timestamps();
        });
        $xml = simplexml_load_file(public_path('sitemap.xml'));
        $urls = [];
        preg_match_all('/^Disallow:\s*(\S+)/m', file_get_contents(public_path('robots.txt')), $rules);
        foreach ($xml->url as $url) {
            $urls[] = (string) $url->loc;
            $path = parse_url((string) $url->loc, PHP_URL_PATH);
            $this->get($path)->assertOk();
            foreach ($rules[1] as $rule) {
                $pattern = str_replace(['\*', '\$'], ['.*', '$'], preg_quote($rule, '~'));
                $this->assertSame(0, preg_match('~^'.$pattern.'~', $path), $path.' blocked by '.$rule);
            }
        }
        $this->assertSame(array_map(fn ($path) => 'https://mistysdance.com'.$path, config('seo.sitemap_paths')), $urls);
        $this->assertCount(count(array_unique($urls)), $urls);
    }

    public function test_homepage_business_data_is_valid_and_trial_links_exist()
    {
        $html = $this->get('/')->getContent();
        preg_match('~<script type="application/ld\+json">(.*?)</script>~s', $html, $matches);
        $schema = json_decode($matches[1], true, 512, JSON_THROW_ON_ERROR);
        $this->assertContains('LocalBusiness', $schema['@type']);
        $this->assertSame('+1-608-779-4642', $schema['telephone']);
        $this->assertCount(2, $schema['location']);
        $this->assertSame('600 Holmen Dr N', $schema['location'][1]['address']['streetAddress']);
        $this->assertCount(7, $schema['openingHoursSpecification']);
        $this->assertSame('12:00', $schema['openingHoursSpecification'][0]['opens']);
        $this->assertStringContainsString('Onalaska office &amp; phone hours', $html);
        foreach (['dance-la-crosse', 'dance-onalaska', 'dance-holmen', 'dance-west-salem', 'dance-la-crescent', 'dance-team'] as $slug) {
            $this->get('/'.$slug)->assertSee('href="/trialclass"', false)->assertSee('href="/fall"', false)->assertSee('href="/summer"', false);
        }
    }
}
