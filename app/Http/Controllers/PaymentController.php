<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{

    public function store(Request $request){
        
        return response()->json(['success' => true, 'message' => 'Payment successful']);
    }

    public function verify(Request $request){ //payload
        $args = http_build_query(array(
            'token' => $request->token,
            'amount'  => 1000
        ));
        
        $url = "https://khalti.com/api/v2/payment/verify/";
        
        $studentName = $request->input('student_name');
        $username = $request->input('username');
        $payment = new Payment();
        $payment->amount = 10;
        $payment->user_name = $username;
        $payment->student_name = $studentName;  
        $payment->save();
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
// Route::post('khalti/verify/store', [PaymentController::class, 'store'])->name('store.donate_amount');