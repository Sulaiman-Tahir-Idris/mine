<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Display the contact form
    public function show()
    {
        return view('contact'); // Update with your actual contact form view name
    }

    // Handle the form submission
    public function submit(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Optionally, send an email or store the data in the database
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('sulaymanti01@gmail.com') // Replace with your email
                 ->from($validated['email'], $validated['name'])
                 ->subject('Contact Form Message');
        });

        // Store the data in the database (optional, if you have a Contact model)

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent!');
    }
}
