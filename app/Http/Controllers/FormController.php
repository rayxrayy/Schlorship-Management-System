<?php

namespace App\Http\Controllers;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\DB;
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
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
  // Retrieve college and course from the request
        $college = $request->input('college');
        $course = $request->input('course');

        // Check if the college and course are valid
        $validCollege = DB::table('courses')->where('user_name', $college)->exists();
        $validCourse = DB::table('courses')->where('coursename', $course)->exists();

        if (!$validCollege || !$validCourse) {
            // If college or course is invalid, return with an error message
            return redirect()->back()->with('error', 'Invalid college or course selected.');
        }

        // Add college and course data to the validated data
        $validatedData['college'] = $college;
        $validatedData['course'] = $course;

        // Check if a profile image is uploaded
        if ($request->hasFile('document_citizenship')) {
            $uploadedPhotoPath = $request->file('document_citizenship')->store('citizenship-images'); // Store the uploaded photo

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_citizenship'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_sop')) {
            $uploadedPhotoPath = $request->file('document_sop')->store('sop-images'); // Store the uploaded photo

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_sop'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_transcript')) {
            $uploadedPhotoPath = $request->file('document_transcript')->store('transcript-images'); // Store the uploaded photo

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_transcript'] = $uploadedPhotoPath;
        }
        if ($request->hasFile('document')) {
            $uploadedPhotoPath = $request->file('document')->store('document-images'); // Store the uploaded photo

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document'] = $uploadedPhotoPath;
        }
        // Check if a profile image is uploaded
        if ($request->hasFile('profile_image')) {
            $uploadedPhotoPath = $request->file('profile_image')->store('student-images'); // Store the uploaded photo

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['profile_image'] = $uploadedPhotoPath;
        }
        Form::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}