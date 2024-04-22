<?php

namespace App\Http\Controllers;
use App\Models\Form; 
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function viewselectedstudents(){
        
        $selectedstudents = Form::all();// Fetch the form data by ID
        $student = Form::find($id); // Assuming $id is the student's ID
        $photoPath = $student->profile_image;
        // dd($selectedstudents);
        return view('users.viewselectedstudent', compact('selectedstudents','photoPath')); // Pass the form data to the view
    }


    public function viewsingleselectedstudent()  {
        $selectedstudents = Form::all();
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