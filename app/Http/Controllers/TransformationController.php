<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TransformationController extends Controller
{
    public function index()
    {
        $directory = public_path('images/results');
        $images = [];

        if (File::exists($directory)) {
            $files = File::files($directory);
            foreach ($files as $file) {
                // Get relative path for the view
                $images[] = '/images/results/' . $file->getFilename();
            }
        }

        return view('transformations', compact('images'));
    }
}
