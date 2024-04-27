<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceList(){
        $data['title']='invoice Lists';
        return view('admin.pages.invoice.invoice_list',$data);
    }
}
