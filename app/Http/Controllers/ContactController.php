<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'title' => 'Contactează TNT Team | Începe Transformarea',
            'description' => 'Ești gata să faci o schimbare? Completează formularul și hai să discutăm despre obiectivele tale. Tiberiu Tomoroga - Antrenor Personal.'
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'goal' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'goal', 'message']);

        // Send email to the specific addresses
        Mail::to(['dariuscatinas1@gmail.com', 'tiberiu.tomoroga@yahoo.com'])->send(new ContactFormMail($data));

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you for your message! We will get back to you soon.']);
        }

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
