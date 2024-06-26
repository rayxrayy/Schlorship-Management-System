<?php

namespace App\Http\Controllers;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Form;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewFormNotification;
use App\Notifications\CollegeFormNotification;

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
        try {
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
            $uploadedPhotoPath = $request->file('document_citizenship')->storeAs('student-citizenship', $request->file('document_citizenship')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_citizenship'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_sop')) {
            $uploadedPhotoPath = $request->file('document_sop')->storeAs('student-sop', $request->file('document_sop')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_sop'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_transcript')) {
            $uploadedPhotoPath = $request->file('document_transcript')->storeAs('student-transcript', $request->file('document_transcript')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_transcript'] = $uploadedPhotoPath;
        }
        if ($request->hasFile('document')) {
            $uploadedPhotoPath = $request->file('document')->storeAs('student-document', $request->file('document')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document'] = $uploadedPhotoPath;
        }
        // Check if a profile image is uploaded
       if ($request->hasFile('profile_image')) {  
            $uploadedPhotoPath = $request->file('profile_image')->storeAs('student-images', $request->file('profile_image')->getClientOriginalName());
            // Save the photo path to the user's profile_photo_path attribute
            $validatedData['profile_image'] = $uploadedPhotoPath;
        }

        $validatedData['student_id'] = Auth::id();
        
        $form = Form::create($validatedData);
        // dd($form);

        Auth::user()->notify(new NewFormNotification($form)); // Pass $form to the notification constructor
        // Notify the applied college
        $appliedCollege = User::where('name', $college)->where('role', 'college')->first();
        if ($appliedCollege) {
            $appliedCollege->notify(new CollegeFormNotification($form));
        }
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
        }catch (\Exception $e) {
            // Log::error('Form submission failed: ' . $e->getMessage());
            // Log::error($e->getTraceAsString());
        // If an exception occurs during form submission, redirect back with an error message
        return redirect()->back()->with('error', 'Form submission failed. Please try again later.');
        }
    }

    public function storecourseform(Request $request)
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

        // Check if a profile image is uploaded
        if ($request->hasFile('document_citizenship')) {
            $uploadedPhotoPath = $request->file('document_citizenship')->storeAs('student-citizenship', $request->file('document_citizenship')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_citizenship'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_sop')) {
            $uploadedPhotoPath = $request->file('document_sop')->storeAs('student-sop', $request->file('document_sop')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_sop'] = $uploadedPhotoPath;
        }

        if ($request->hasFile('document_transcript')) {
            $uploadedPhotoPath = $request->file('document_transcript')->storeAs('student-transcript', $request->file('document_transcript')->getClientOriginalName(), 'public');

        // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document_transcript'] = $uploadedPhotoPath;
        }
        if ($request->hasFile('document')) {
    // Store the uploaded file directly in the 'public' directory
            $uploadedPhotoPath = $request->file('document')->storeAs('student-document', $request->file('document')->getClientOriginalName(), 'public');
    // Save the photo path to the user's profile_photo_path attribute
            $validatedData['document'] = $uploadedPhotoPath;
        }

        // Check if a profile image is uploaded
        if ($request->hasFile('profile_image')) {
            $uploadedPhotoPath = $request->file('profile_image')->storeAs('student-images', $request->file('profile_image')->getClientOriginalName());
            // Save the photo path to the user's profile_photo_path attribute
            $validatedData['profile_image'] = $uploadedPhotoPath;
        }
        
        $college = $request->input('college');
        $course = $request->input('course');
        $validatedData['college'] = $college;
        $validatedData['course'] = $course;
        
        $validatedData['student_id'] = Auth::id();
        
        $form = Form::create($validatedData);
        // dd($form);
        Auth::user()->notify(new NewFormNotification($form)); 
        $appliedCollege = User::where('name', $college)->where('role', 'college')->first();
        if ($appliedCollege) {
            $appliedCollege->notify(new CollegeFormNotification($form));
        }
        // dd($form);
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
    
    
}