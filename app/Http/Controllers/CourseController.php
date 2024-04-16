<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
         $courses = Course::paginate(4); // Retrieve all courses from the database
        return view('users.courses', compact('courses'));
        // return view('users.courses');
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'coursename' => 'required|string',
            'code' => 'required|string',
            'module' => 'required|string',
            'department' => 'required|string',
            'fee' => 'required|numeric',
            'description' => 'required|string',
        ]);

        Course::create($validatedData);
        return redirect()->back()->with('success', 'Course created successfully!');
    }
    
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
    if(!$course){
        return redirect('/course')->with(['message' => 'Course not found']);
    }

    $course->coursename = $request->input('coursename') ?? $course->coursename;
    $course->code = $request->input('code') ?? $course->code;
    $course->module = $request->input('module') ?? $course->module;
    $course->department = $request->input('department') ?? $course->department;
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
}