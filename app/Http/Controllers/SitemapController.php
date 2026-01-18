<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $content = '<?xml version="1.0" encoding="UTF-8"?>';
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Define routes to include
        $routes = [
            'home',
            'about',
            'transformations',
            'contact',
            'protocol',
            'david'
        ];

        foreach ($routes as $route) {
            $content .= '<url>';
            $content .= '<loc>' . route($route) . '</loc>';
            $content .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
            $content .= '<changefreq>weekly</changefreq>';
            $content .= '<priority>' . ($route === 'home' ? '1.0' : '0.8') . '</priority>';
            $content .= '</url>';
        }

        $content .= '</urlset>';

        return response($content, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
