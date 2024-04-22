<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviewList(){
        $data['title']='review Lists';
        return view('admin.pages.review.review_list',$data);
    }
    public function addreview(){
        $data['title']='review Add';
        return view('admin.pages.review.add_review',$data);
    }
}
