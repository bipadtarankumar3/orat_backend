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
    public function sub_category(){
        $data['title']='product Add';
        return view('admin.pages.product.sub_category',$data);
    }
    public function inventory(){
        $data['title']='inventory Lists';
        return view('admin.pages.product.inventory',$data);
    }
    public function product_price(){
        $data['title']='product_price Lists';
        return view('admin.pages.product.product_price',$data);
    }

}
