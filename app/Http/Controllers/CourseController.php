<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
         $courses = Course::all(); // Retrieve all courses from the database
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
     public function update(Request $request)
    {
        if(!$request->has('id')){
            return redirect('/course')->with(['message' => 'Oops.. Something went wrong']);
        }
        $courses = courses::find($request->input('id'));
        $courses->name = $request->input('coursename') ?? $courses->coursename;
        $courses->status = $request->input('code') ?? $courses->code;
        $courses->name = $request->input('module') ?? $courses->module;
        $courses->status = $request->input('department') ?? $courses->department;
        $courses->name = $request->input('fee') ?? $courses->fee;
        $courses->status = $request->input('description') ?? $courses->description;
        $courses->save();

        return redirect('/course')->with(['message' => 'course updated successfully']);
    }

    public function destroy($id)
    {
        $courses = Courses::find($id);
        $courses->delete();
        return redirect('/courses')->with(['message'   => 'Courses deleted successfully']);
    }
}