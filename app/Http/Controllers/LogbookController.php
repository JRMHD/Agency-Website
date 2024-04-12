<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\LogbookUploaded;
use Illuminate\Support\Facades\Mail;

class LogbookController extends Controller
{
    public function showUploadForm()
    {
        return view('logbook.upload');
    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'logbook_file' => 'required|file|mimes:pdf|max:2048', // PDF file, max size 2MB
        ]);

        // Store the file in the storage/app/logbooks directory
        $filePath = $request->file('logbook_file')->store('logbooks');

        // Get the currently authenticated user
        $user = auth()->user();

        // Send email notification with download link and user details
        $fileName = $request->file('logbook_file')->getClientOriginalName();
        Mail::to('laurencemariita@gmail.com')->send(new LogbookUploaded($fileName, $user->name, $user->email));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Logbook uploaded successfully!');
    }


    public function download($fileName)
    {
        $filePath = 'logbooks/' . $fileName;

        if (Storage::exists($filePath)) {
            return response()->download(storage_path('app/' . $filePath));
        } else {
            abort(404, 'File not found');
        }
    }
}
