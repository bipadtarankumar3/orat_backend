<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Coupon;
use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use DB;

class DiscountController extends Controller
{
    public function discountList(){
        $data['title']='discount Lists';
        $data['list'] = Coupon::get();
        return view('admin.pages.discount.discount',$data);
    }

    public function add_discount_form_html(){

        return view('admin.pages.discount.discount_form_html');
    }

    public function add_discount(Request $request){

        if ($request->edit_id !='') {

            $discount = Coupon::findOrFail($request->edit_id);
            $discount->coupon_name = $request->coupon_name;
            $discount->coupon_code = $request->coupon_code;
            $discount->coupon_limit	 = $request->coupon_limit	;
            $discount->coupon_type= $request->coupon_type;
            $discount->discount= $request->discount;
            $discount->start_date= $request->start_date;
            $discount->end_date= $request->end_date;
            $discount->status = $request->status;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/discount/',$uploadName);
                    $url = asset('public/upload/discount/'.$uploadName);
                    $c_image = $uploadName;
                    $discount->file = $url;
                }
            }
            $discount->updated_by = Auth::user()->id;
            $discount->save();
        } else {
            $url ='';
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/discount/',$uploadName);
                    $url = asset('public/upload/discount/'.$uploadName);
                    $c_image = $uploadName;
                }
            }
            $discount = new Coupon();
            $discount->coupon_name = $request->coupon_name;
            $discount->coupon_code = $request->coupon_code;
            $discount->coupon_limit	 = $request->coupon_limit	;
            $discount->coupon_type= $request->coupon_type;
            $discount->discount= $request->discount;
            $discount->start_date= $request->start_date;
            $discount->end_date= $request->end_date;
            $discount->status = $request->status;
            $discount->created_by = Auth::user()->id;
            
            $discount->save();
        }
        
        if ($discount) {
            return $this->sendResponse($discount, 'discount Added Successfully');
        } 
        else{ 
            return $this->sendError('Insert Error.', ['error'=>'discount is not inserted']);
        } 
    }

    public function edit_discount(Request $request){

        $data['form_id'] = $form_id = $request->form_id;
     
        $data['editData'] = Coupon::where('id', $form_id)->first();
        
        return view('admin.pages.discount.discount_form_html',$data);
    }

    public function delete_discount($id){
     
        $data['discount'] = Coupon::where('id',$id)->delete();
        return redirect()->back();
    }

}
