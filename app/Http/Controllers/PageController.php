<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about', [
            'title' => 'Povestea Mea & Filozofia TNT',
            'description' => 'Descoperă povestea lui Tiberiu Tomoroga. De la primele antrenamente în podul casei la scena competitivă. Află ce înseamnă mentalitatea TNT.'
        ]);
    }

    public function protocol()
    {
        return view('protocol', [
            'title' => 'Protocolul TNT - Pachete Coaching Online',
            'description' => 'Alege pachetul potrivit pentru tine. Planuri de antrenament personalizate, nutriție calculată și suport 24/7. Transformarea ta începe aici.'
        ]);
    }

    public function david()
    {
        return view('david', [
            'title' => 'Studiu de Caz: Transformarea lui David',
            'description' => 'Vezi cum David și-a transformat complet fizicul și stilul de viață sub îndrumarea lui Tiberiu Tomoroga. Rezultate reale, fără scurtături.'
        ]);
    }
}
