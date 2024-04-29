<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Form;
use App\Models\User;
use App\Models\ApprovedStudents;
use App\Http\Controllers\CourseController;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    public function career(){
        return view('careers');
    }
    
    public function searchcourse(Request $request)
    {
    $query = $request->input('query');
    $courses = Course::where('coursename', 'LIKE', "%{$query}%")->paginate(4);
    $images = ['cousrse1.png', 'course2.png', 'course3.png', '1.jpg']; 
    return view('users.studentcourses', compact('courses','images'));
    }

    public function searchstudent(Request $request)
    {
    $query = $request->input('query');
    $selectedstudents = Form::where('fullname', 'LIKE', "%{$query}%")->paginate(4);
    $selectedStudentsCount = $selectedstudents->count();
    return view('users.viewselectedstudent', compact('selectedstudents','selectedStudentsCount'));
    }
    
    public function searchfinalstudent(Request $request)
    {
    $query = $request->input('query');
    $finalstudents = ApprovedStudents::where('fullname', 'LIKE', "%{$query}%")->get();
    $user = auth()->user()->name;
    return view('public.scholorstudent', compact('finalstudents','user'));
    }

}