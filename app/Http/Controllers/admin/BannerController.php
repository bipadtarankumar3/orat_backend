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

    public function add_banner(Request $request){
        // dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'cl_client_name' => 'required'
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }

        if ($request->banner_id !='') {
            $c_image ='';
            
            //$client =  client::find($id);
            //$client =  client::where('id',$request->id)->delete();
            $Banner = Banner::findOrFail($request->banner_id);
            $Banner->title = '';
            
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/',$uploadName);
                    $url = asset('public/upload/'.$uploadName);
                    $c_image = $uploadName;
                    $Banner->banner_image = $c_image;
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
                    $c_image->move(public_path().'/upload/',$uploadName);
                    $url = asset('public/upload/'.$uploadName);
                    $c_image = $uploadName;
                }
            }
            //$client =  client::find($id);
            //$client =  client::where('id',$request->id)->delete();
            $Banner = new Banner();
            $Banner->title = '';
            $Banner->created_by = Auth::user()->id;
            $Banner->banner_image = $c_image;
            $Banner->save();
        }
        
        if ($Banner) {
            return $this->sendResponse($Banner, 'Banner Added Successfully');
        } 
        else{ 
            return $this->sendError('Insert Error.', ['error'=>'Banner is not inserted']);
        } 
    }

    public function delete($id){
     
        $data['Banner'] = Banner::where('id',$id)->delete();
        return redirect()->back();
    }

}
