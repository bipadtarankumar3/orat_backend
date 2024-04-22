<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function store(){
        $data['title']='setting Lists';
        return view('admin.pages.setting.store',$data);
    }
    public function pyments(){
        $data['title']='setting Add';
        return view('admin.pages.setting.pyments',$data);
    }
    public function checkout(){
        $data['title']='setting Add';
        return view('admin.pages.setting.checkout',$data);
    }
    public function shipping_and_delivery(){
        $data['title']='setting Add';
        return view('admin.pages.setting.shipping_and_delivery',$data);
    }
    public function location(){
        $data['title']='setting Add';
        return view('admin.pages.setting.location',$data);
    }
    public function notification(){
        $data['title']='setting Add';
        return view('admin.pages.setting.notification',$data);
    }
}
