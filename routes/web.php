<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransformationController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome', [
        // Home uses defaults from app.blade.php, but we can be explicit if needed.
        // Defaults: 'Online Coaching & Fitness' and generic description.
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'Povestea Mea & Filozofia TNT',
        'description' => 'Descoperă povestea lui Tiberiu Tomoroga. De la primele antrenamente în podul casei la scena competitivă. Află ce înseamnă mentalitatea TNT.'
    ]);
})->name('about');

// Transformation Route
Route::get('/real-results', [TransformationController::class, 'index'])->name('transformations');

// New Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/protocol', function () {
    return view('protocol', [
        'title' => 'Protocolul TNT - Pachete Coaching Online',
        'description' => 'Alege pachetul potrivit pentru tine. Planuri de antrenament personalizate, nutriție calculată și suport 24/7. Transformarea ta începe aici.'
    ]);
})->name('protocol');

Route::get('/david', function () {
    return view('david', [
        'title' => 'Studiu de Caz: Transformarea lui David',
        'description' => 'Vezi cum David și-a transformat complet fizicul și stilul de viață sub îndrumarea lui Tiberiu Tomoroga. Rezultate reale, fără scurtături.'
    ]);
})->name('david');
Route::get('/sitemap.xml', function () {
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
});
