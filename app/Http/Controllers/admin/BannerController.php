<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\admin\Banner;
use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use DB;

class BannerController extends Controller
{
    public function bannerList(){
        $data['title']='banner list';
        $data['Banner'] = Banner::get();
        return view('admin.pages.banner.banner_list',$data);
    }

    public function add_banner_form_html(){

        return view('admin.pages.banner.banner_form_html');
    }

    public function add_banner(Request $request){

        if ($request->banner_id !='') {

            $Banner = Banner::findOrFail($request->banner_id);
            $Banner->title = '';
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/banner/',$uploadName);
                    $url = asset('public/upload/banner/'.$uploadName);
                    $c_image = $uploadName;
                    $Banner->banner_image = $url;
                }
            }
            $Banner->updated_by = Auth::user()->id;
            $Banner->save();
        } else {
            $c_image ='';
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/banner/',$uploadName);
                    $url = asset('public/upload/banner/'.$uploadName);
                    $c_image = $uploadName;
                }
            }
            $Banner = new Banner();
            $Banner->title = '';
            $Banner->created_by = Auth::user()->id;
            $Banner->banner_image = $url;
            $Banner->save();
        }
        
        if ($Banner) {
            return $this->sendResponse($Banner, 'Banner Added Successfully');
        } 
        else{ 
            return $this->sendError('Insert Error.', ['error'=>'Banner is not inserted']);
        } 
    }

    public function edit_banner(Request $request){

        $data['form_id'] = $form_id = $request->form_id;
     
        $data['Banner'] = Banner::where('id', $form_id)->first();
        
        return view('admin.pages.banner.banner_form_html',$data);
    }

    public function delete($id){
     
        $data['Banner'] = Banner::where('id',$id)->delete();
        return redirect()->back();
    }

}
