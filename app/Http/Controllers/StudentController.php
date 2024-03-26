<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;

class StudentController extends Controller
{
    public function viewselectedstudents(){
        
        $selectedstudents = Form::all();// Fetch the form data by ID
        return view('users.viewselectedstudent', compact('selectedstudents')); // Pass the form data to the view
    }

    public function viewsingleselectedstudent()  {
        $selectedstudents = Form::all();
        return view('singlepages.selectedstudent', compact('selectedstudents'));
    }

    public function viewscholorstudent(){
        return view('public.scholorstudent');
    }
}