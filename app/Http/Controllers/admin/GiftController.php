<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function giftList(){
        $data['title']='Gift Lists';
        return view('admin.pages.gift.giftList',$data);
    }

}
