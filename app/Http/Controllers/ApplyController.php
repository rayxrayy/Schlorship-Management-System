<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
class ApplyController extends Controller
{
    public function index(Request $request){
        $colleges = Course::distinct()->pluck('user_name'); //Retrieve unique user_names from the courses table

        $coursesByCollege = []; //to store each user
 
        
        // dd($colleges);
   

        foreach ($colleges as $college) {
        // Retrieve course names for the current user name
        $courses = Course::where('user_name', $college)->pluck('coursename');
        // Store the course names in the array indexed by the user name
        $coursesByCollege[$college] = $courses;
        //  var_dump($coursesByCollege);
        // var_dum($colleges);
        // var_dump($coursesByCollege);
    }
    
    
         return view('users.applyform', [
        'colleges' => $colleges,
        'coursesByCollege' => $coursesByCollege,
        
    ]);
    }
     public function getCoursesByCollege(Request $request)
    {
        $college = $request->input('college');
        $courses = Course::where('user_name', $college)->pluck('coursename');
        return response()->json(['courses' => $courses]);
    }

}