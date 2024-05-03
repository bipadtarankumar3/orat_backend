<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerList(){
        $data['title']='banner list';
        return view('admin.pages.banner.banner_list',$data);
    }
}
