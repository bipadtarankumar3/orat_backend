<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentList(){
        $data['title']='payment Lists';
        return view('admin.pages.payment.payment_list',$data);
    }
}
