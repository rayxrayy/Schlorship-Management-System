<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CancelReview;
use App\Models\Form; 

class CancelReviewController extends Controller
{
    public function store(Request $request, $id) {
        $validatedData = $request->validate([
        'username' => 'required',
        'collegename' => 'required',
        'coursename' => 'required',
        'conmment' => 'required',
    ]);
    $student = Form::findOrFail($id);
    $student->is_approved = true;
    $student->save();
    CancelReview::create($validatedData);
    return redirect('/approvelstudent')->with('success', 'Successfully cancelled!');
    }
}