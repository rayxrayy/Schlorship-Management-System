<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index(){
        return view('college');
    }

    public function addcollege(){
        return view('users.colleges');
    }
}