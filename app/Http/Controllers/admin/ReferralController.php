<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function referralList(){
        $data['title']='referral Lists';
        return view('admin.pages.referral.referral_list',$data);
    }
    public function addreferral(){
        $data['title']='referral Add';
        return view('admin.pages.referral.add_referral',$data);
    }
}
