<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discountList(){
        $data['title']='discount Lists';
        return view('admin.pages.discount.discount',$data);
    }
}
