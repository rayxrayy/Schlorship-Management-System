<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request){
        $payment = new Payment();
        $payment->amount = 10; // Assuming the amount is passed directly
        $payment->user_name = $request->username;
        $payment->student_name = $request->student_name;
        $payment->student_id = $request->student_id;
        $payment->save();
        return with(['message'   => 'Donated successfully!']);
    }
}