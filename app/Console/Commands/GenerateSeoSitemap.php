<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSeoSitemap extends Command
{
    protected $signature = 'seo:sitemap';
    protected $description = 'Generate the sitemap from the curated public marketing pages';

    public function handle()
    {
        $xml = new \DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;
        $root = $xml->createElementNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'urlset');
        $xml->appendChild($root);
        foreach (array_unique(config('seo.sitemap_paths')) as $path) {
            $url = $xml->createElement('url');
            $url->appendChild($xml->createElement('loc', 'https://mistysdance.com'.$path));
            $root->appendChild($url);
        }
        // No synthetic lastmod dates: a generation time is not a content update time.
        if ($xml->save(public_path('sitemap.xml')) === false) {
            $this->error('Could not write public/sitemap.xml.');
            return 1;
        }
        $this->info('Updated public/sitemap.xml.');
        return 0;
    }
}
