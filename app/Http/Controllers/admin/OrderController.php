<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        $data['title']='order Lists';
        return view('admin.pages.order.order_list',$data);
    }
    public function details(){
        $data['title']='order Add';
        return view('admin.pages.order.details',$data);
    }
}
