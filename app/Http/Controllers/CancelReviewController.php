<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CancelStudent;
use App\Models\Form; 
use App\Models\User;
use App\Notifications\FormCancelNotification; 

class CancelReviewController extends Controller
{
    public function store(Request $request, $id) {
        $student = Form::findOrFail($id);
        $student->is_approved = true;
        $student->save();
        
        $validatedData = $request->validate([
            'username' => 'required',
            'collegename' => 'required',
            'coursename' => 'required',
            'conmment' => 'required',
        ]);
        $validatedData['student_id'] = $student->id;

        $cancelstudent = CancelStudent::create($validatedData);
        // Retrieve the user associated with the form (student)
        $user = User::findOrFail($student->student_id); // Assuming Form model has a user_id field
        // Notify the user
        $user->notify(new FormCancelNotification($cancelstudent));
        return redirect('/approvelstudent')->with('success', 'Successfully cancelled!');
    }
}