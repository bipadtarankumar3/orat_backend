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
    public function status(){
        $data['title']='order Status';
        return view('admin.pages.order.order_status',$data);
    }
    public function update_status(){
        $data['title']='order update status';
        return view('admin.pages.order.order_update_status',$data);
    }
}
