<?php

namespace App\Http\Controllers\web_api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use DB;
use App\Models\admin\Banner;
use App\Models\admin\Category;
use App\Models\admin\SubCategory;

class GeneralController extends Controller
{
    public function banner_list(){
  
        $Banner = Banner::get();

        return response()->json([
            'success' => true,
            'data' => $Banner,
            'message' => 'Banner List'
        ]);

    }

    public function category_list(){
  
        $Category = Category::where('status','publish')->get();

        return response()->json([
            'success' => true,
            'data' => $Category,
            'message' => 'Category List'
        ]);

    }
}
