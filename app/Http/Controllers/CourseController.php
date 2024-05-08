<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Notifications\NewCourseNotification;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all(); // Retrieve all courses from the database
        // dd($coursess);
      
        return view('users.courses', compact('courses'));
        
        // return view('users.courses');
    }

    public function store(Request $request){
        $request->validate([
        'description' => 'required|string|max:100' // Add a validation rule to ensure the description is not more than 100 characters
    ]);
    $course = new Course();
    $course->coursename = $request->coursename;
    $course->code = $request->code;
    $course->department = $request->department;
    $course->fee = $request->fee;
    $course->description = $request->description;
    // Set the username to the name of the currently authenticated user
    $course->user_name = auth()->user()->name;
    $modules = $request->input('module');
    $course->module = implode(', ', $modules);
    // Save the course to the database
    $course->save();
    $course->notify(new NewCourseNotification());
        return redirect()->back()->with('success', 'Course created successfully!');
    }
    
    public function update(Request $request)
    {
        if(!$request->has('id')){
            return redirect('/course')->with(['message' => 'Oops.. Something went wrong']);
        }

        $course = Course::find($request->input('id'));
        $course->coursename = $request->input('coursename') ?? $course->coursename;
        $course->code = $request->input('code') ?? $course->code;
        $course->department = $request->input('department') ?? $course->department;
        $modules = $request->input('module') ?? $course->module;
        $course->module = implode(', ', $modules);
        $course->fee = $request->input('fee') ?? $course->fee;
        $course->description = $request->input('description') ?? $course->description;
        $course->save();

        return redirect('/course')->with(['message' => 'Course updated successfully']);
    }

    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect('/course')->with(['message'   => 'Courses deleted successfully']);
    }

    public function studentcourse(){
        $courses = Course::paginate(4);
        // dd($courses);
        $images = ['cousrse1.png', 'course2.png', 'course3.png', '1.jpg'];
        return view('users.studentcourses', ['images' => $images, 'courses' => $courses]);
    }

    
}