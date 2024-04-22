<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class CollegeController extends Controller
{
    public function index(){
        return view('college');
    }

    public function applycollege(){
         // Retrieve users with the role of "college"
        $colleges = User::where('role', 'college')->paginate(4);
        // dd($colleges);
        $collegeCourses = []; //Array to hold courses for each college
        $collegeNames = User::where('role', 'college')->pluck('name')->toArray();
        // $collegeNamesList = implode(", ", $collegeNames);

        // dd($collegeNamesList);
        $courses = Course::all();
        $courseNames = Course::pluck('user_name');
        // dd($courseNames);
        foreach ($collegeNames as $college) {
            $courses = Course::where('user_name', $college)->get();
            $collegeCourses[$college] = $courses;
            
        }
        // dd($collegeCourses);
        return view('users.colleges',compact('colleges','collegeCourses'));
    }
    public function getCoursesByCollegeId($collegeId) {
        // dd($collegeId); 
    $courses = Course::where('college_id', $collegeId)->get();
    return response()->json($courses);
    }
}