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

use App\Models\admin\Designer;

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

    public function category_list(Request $request){
        
        if (isset($request->limit)) {
            $limit = $request->limit;
        } else {
            $limit = 10;
        }

        $Category = Category::where('status','publish')->limit($limit)->get();

        return response()->json([
            'success' => true,
            'data' => $Category,
            'message' => 'Category List'
        ]);

    }

    public function designer_list(Request $request){
  
        if (isset($request->limit)) {
            $limit = $request->limit;
        } else {
            $limit = 10;
        }
        
        $Designer = Designer::where('designer_status','publish')->limit($limit)->get();

        return response()->json([
            'success' => true,
            'data' => $Designer,
            'message' => 'Designer List'
        ]);

    }
}
