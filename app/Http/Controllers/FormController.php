<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:Female,Male,notsay,others',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'pname' => 'required|string|max:255',
            'pnumber' => 'required|string|max:20',
            'qualification' => 'required|string|max:255',
            'currentedu' => 'string|max:255',
            'major' => 'required|string|max:255',
            'result' => 'required|string|max:255',
            'document_citizenship' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240', // Example validation for file upload
            'document_sop' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240', // Example validation for file upload
            'document_transcript' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240', // Example validation for file upload
            'document' => 'file|mimes:pdf,jpg,jpeg,png|max:10240', // Example validation for file upload
            'description' => 'nullable|string|max:100',
        ]);

        // Store the form data in the database
        Form::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}