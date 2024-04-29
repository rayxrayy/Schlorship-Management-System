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

    if ($courses->isEmpty()){
        $message = 'No course found matching the search criteria.'; 
        $images = ['cousrse1.png', 'course2.png', 'course3.png', '1.jpg']; 
        return view('users.studentcourses', compact('courses','images','message'));
    }
    
    $images = ['cousrse1.png', 'course2.png', 'course3.png', '1.jpg']; 
    return view('users.studentcourses', compact('courses','images'));
    }

    public function searchstudent(Request $request)
    {
    $query = $request->input('query');
    $selectedstudents = Form::where('fullname', 'LIKE', "%{$query}%")->paginate(4);
    
    if ($selectedstudents->isEmpty()){
        $message = 'No students found matching the search criteria.'; 
        $selectedStudentsCount = $selectedstudents->count();
        return view('users.viewselectedstudent', compact('selectedstudents','selectedStudentsCount','message'));
    }
    $selectedStudentsCount = $selectedstudents->count();
    return view('users.viewselectedstudent', compact('selectedstudents','selectedStudentsCount'));
    }
    
    public function searchfinalstudent(Request $request)
    {
    $query = $request->input('query');
    $finalstudents = ApprovedStudents::where('fullname', 'LIKE', "%{$query}%")->get();

    if ($finalstudents->isEmpty()) {
        $message = 'No students found matching the search criteria.';
        return view('public.scholorstudent', compact('message','finalstudents'));
    }
    $user = auth()->user()->name;
    return view('public.scholorstudent', compact('finalstudents','user'));
    }

}