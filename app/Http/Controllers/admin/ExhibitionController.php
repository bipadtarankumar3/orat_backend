<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function create(){
        $data['title']='Exhibition Create';
        return view('admin.pages.exhibition.create',$data);
    }
    public function createUser(){
        $data['title']='Exhibition Create User';
        return view('admin.pages.exhibition.create_user',$data);
    }

    public function sales(){
        $data['title']='Exhibition Sales';
        return view('admin.pages.exhibition.exhibitionsales',$data);
    }
    public function expense(){
        $data['title']='Exhibition expense';
        return view('admin.pages.exhibition.exhibitionexpense',$data);
    }
}
