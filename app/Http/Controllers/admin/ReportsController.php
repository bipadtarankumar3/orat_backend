<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function salesReport(){
        $data['title']='Sales Report';
        return view('admin.pages.reports.sales',$data);
    }
    public function productReport(){
        $data['title']='Product Report';
        return view('admin.pages.reports.product',$data);
    }
    public function paymentReport(){
        $data['title']='Payment Report';
        return view('admin.pages.reports.payment',$data);
    }
}
