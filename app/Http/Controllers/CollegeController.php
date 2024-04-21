<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CollegeController extends Controller
{
    public function index(){
        return view('college');
    }

    public function applycollege(){
         // Retrieve users with the role of "college"
        $colleges = User::where('role', 'college')->paginate(4);
        // dd($colleges);
        return view('users.colleges',compact('colleges'));
    }
    
}