<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Form;
use App\Models\User;
use App\Models\ApprovedStudents;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    public function career(){
        return view('careers');
    }
    
    public function search(Request $request)
    {
    $query = $request->input('query');

    // Search for courses
    $courses = Course::where('coursename', 'LIKE', "%{$query}%")->get();
    // dd($courses);
    // Search for colleges
    $colleges = User::where('name', 'LIKE', "%{$query}%")->get();

    // Search for students
    $students = Form::where('fullname', 'LIKE', "%{$query}%")->get();

    $selectedstudents = ApprovedStudents::where('fullname', 'LIKE', "%{$query}%")->get();

    return view('users.postblog', compact('courses', 'colleges', 'students','selectedstudents'));
    }
}