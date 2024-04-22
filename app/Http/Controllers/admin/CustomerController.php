<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerList(){
        $data['title']='customer Lists';
        return view('admin.pages.customer.customer_list',$data);
    }
    public function overview(){
        $data['title']='customer Add';
        return view('admin.pages.customer.overview',$data);
    }
    public function security(){
        $data['title']='security Add';
        return view('admin.pages.customer.security',$data);
    }
    public function address_and_billing(){
        $data['title']='customer Add';
        return view('admin.pages.customer.address_and_billing',$data);
    }
    public function notification(){
        $data['title']='customer Add';
        return view('admin.pages.customer.notification',$data);
    }
}
