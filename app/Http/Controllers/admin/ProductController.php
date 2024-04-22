<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        $data['title']='product Lists';
        return view('admin.pages.product.product_list',$data);
    }
    public function addProduct(){
        $data['title']='product Add';
        return view('admin.pages.product.add_product',$data);
    }
    public function category(){
        $data['title']='product Add';
        return view('admin.pages.product.category',$data);
    }
}
