<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{

    public function list(){
        $data['title']='Exhibition Create';
        return view('admin.pages.exhibition.list',$data);
    }
    public function ExhibitionUserlist(){
        $data['title']='Exhibition  User';
        return view('admin.pages.exhibition.exhibitionuser_list',$data);
    }

    public function sales_create(){
        $data['title']='Exhibition Sales';
        return view('admin.pages.exhibition.exhibitionsales',$data);
    }
    public function sales_list(){
        $data['title']='Exhibition Sales';
        return view('admin.pages.exhibition.exhibitionsales_list',$data);
    }
    public function expense(){
        $data['title']='Exhibition expense';
        return view('admin.pages.exhibition.exhibitionexpense',$data);
    }
}
