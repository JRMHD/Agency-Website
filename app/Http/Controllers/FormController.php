<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new instance of the FormData model
        $formData = new FormData();

        // Set the model attributes with validated form data
        $formData->full_name = $validatedData['full_name'];
        $formData->email = $validatedData['email'];
        $formData->message = $validatedData['message'];

        // Save the form data to the database
        $formData->save();

        // Send email with form data
        Mail::to('laurencemariita@gmail.com')->send(new ContactFormMail($validatedData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message Sent successfully!');
    }
}
