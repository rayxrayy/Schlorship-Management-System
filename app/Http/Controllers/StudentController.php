<?php

namespace App\Http\Controllers;
use App\Models\Form; 
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function viewselectedstudents(){
        
        // $selectedstudents = Form::paginate(4);// Fetch the form data by ID
        // dd($selectedstudents); 
        $user = auth()->user()->name; 
        // dd($user);
        $selectedstudents = Form::where('college', $user)->paginate(4);
        $selectedStudentsCount = $selectedstudents->count();
        // $student = Form::find($id); // Assuming $id is the student's ID
        // $photoPath = $selectedstudents->profile_image;
        // $profileImage = $selectedstudents->isEmpty() ? null : $selectedstudents->first()->profile_image;

        // dd($profileImage);
        return view('users.viewselectedstudent', compact('selectedstudents','selectedStudentsCount')); // Pass the form data to the view
    }

    public function finalstudent($id){
        $finalstudent = Form::find($id)->paginate(4);
        $finalstudentcount = $finalstudent->count();
        $user = auth()->user()->name;
        // Send an email to the selected student
        // Mail::to($finalstudent->email)->send(new StudentApproved($finalstudent));
        // return redirect()->route('finalstudent')->with('success', 'Student approved successfully.');
        return view('singlepages.finalapprovedstudent',compact('finalstudent','user','finalstudentcount'));
    }
    public function viewsingleselectedstudent($id)  {
        $selectedstudents = Form::find($id);
        return view('singlepages.selectedstudent', compact('selectedstudents'));
    }

    public function viewscholorstudent(){
        return view('public.scholorstudent');
    }

    
    public function verify(Request $request){ //payload
        $args = http_build_query(array(
            'token' => $request->token,
            'amount'  => 1000
        ));
        
        $url = "https://khalti.com/api/v2/payment/verify/";
 
        #  Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_d953a542b1f3400384bc831078a2509c'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch); 

        if($status_code == 2000){
            return response()->json(['sucess'=>1, 'redirecto' => route('donate')]);
        }
        else{
            return response()->json(['error' => 1, 'message' => 'payment failed']);

        }
    }
}