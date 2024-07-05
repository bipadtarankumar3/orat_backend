<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\GiftCard;
use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use DB;

class GiftController extends Controller
{
    public function giftList(){
        $data['title']='Gift Lists';
        $data['list'] = GiftCard::get();
        
        return view('admin.pages.gift.giftList',$data);
    }

    public function add_gift_form_html(){

        return view('admin.pages.gift.gift_form_html');
    }

    public function add_gift(Request $request){

        if ($request->edit_id !='') {

            $gift = GiftCard::findOrFail($request->edit_id);
            $gift->title = $request->title;
            $gift->short_desc = $request->short_desc;
            $gift->long_desc = $request->long_desc;
            $gift->price= $request->price;
            $gift->gift_card_code= $request->gift_card_code;
            $gift->status = $request->status;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/gift/',$uploadName);
                    $url = asset('public/upload/gift/'.$uploadName);
                    $c_image = $uploadName;
                    $gift->file = $url;
                }
            }
            $gift->updated_by = Auth::user()->id;
            $gift->save();
        } else {
            $url ='';
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/gift/',$uploadName);
                    $url = asset('public/upload/gift/'.$uploadName);
                    $c_image = $uploadName;
                }
            }
            $gift = new GiftCard();
            $gift->title = $request->title;
            $gift->file = $url;
            $gift->short_desc = $request->short_desc;
            $gift->long_desc = $request->long_desc;
            $gift->price= $request->price;
            $gift->gift_card_code= $request->gift_card_code;
            $gift->status = $request->status;
            $gift->created_by = Auth::user()->id;
            
            $gift->save();
        }
        
        if ($gift) {
            return $this->sendResponse($gift, 'gift Added Successfully');
        } 
        else{ 
            return $this->sendError('Insert Error.', ['error'=>'gift is not inserted']);
        } 
    }

    public function edit_gift(Request $request){

        $data['form_id'] = $form_id = $request->form_id;
     
        $data['editData'] = GiftCard::where('id', $form_id)->first();
        
        return view('admin.pages.gift.gift_form_html',$data);
    }

    public function delete_gift($id){
     
        $data['gift'] = GiftCard::where('id',$id)->delete();
        return redirect()->back();
    }

}
