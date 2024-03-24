<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewselectedstudents(){
        return view('users.viewselectedstudent');
    }

    public function viewsingleselectedstudent()  {
        return view('singlepages.selectedstudent');
    }
}