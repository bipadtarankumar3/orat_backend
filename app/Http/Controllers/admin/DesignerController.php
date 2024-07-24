<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Designer;
use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use DB;

class DesignerController extends Controller
{
    //------------------- designer --------
    public function designer()
    {
        $data['title'] = 'Designer Add';
        $data['designer'] = Designer::get();
        return view('admin.pages.product.designer.designer', $data);
    }
    public function add_designer_form_html()
    {

        return view('admin.pages.product.designer.add_designer_form_html');
    }

    public function add_designer(Request $request)
    {

        if ($request->edit_id != '') {

            $designer = Designer::findOrFail($request->edit_id);
            $designer->designer_name = $request->designer_name;
            $designer->designer_description = $request->designer_description;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/designer/',$uploadName);
                    $url = url('public/upload/designer/'.$uploadName);
                    $c_image = $uploadName;
                    $designer->designer_thumbnail = $url;
                }
            }
            if (isset($request->designer_cover) && !empty($request->designer_cover)) {
                if ($request->hasFile('designer_cover')) {
                    $c_image=$request->file('designer_cover');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/designer/',$uploadName);
                    $url = url('public/upload/designer/'.$uploadName);
                    $c_image = $uploadName;
                    $designer->designer_cover = $url;
                }
            }
            $designer->updated_by = Auth::user()->id;
            $designer->designer_status = $request->designer_status;
            $designer->save();
        } else {

            $designer = new Designer();
            $designer->designer_name = $request->designer_name;
            $designer->designer_description = $request->designer_description;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/designer/',$uploadName);
                    $url = url('public/upload/designer/'.$uploadName);
                    $c_image = $uploadName;
                    $designer->designer_thumbnail = $url;
                }
            }
            if (isset($request->designer_cover) && !empty($request->designer_cover)) {
                if ($request->hasFile('designer_cover')) {
                    $c_image=$request->file('designer_cover');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/designer/',$uploadName);
                    $url = url('public/upload/designer/'.$uploadName);
                    $c_image = $uploadName;
                    $designer->designer_cover = $url;
                }
            }
            $designer->designer_status = $request->designer_status;
            $designer->created_by = Auth::user()->id;
            $designer->save();
        }

        if ($designer) {
            return $this->sendResponse($designer, 'designer Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'designer is not inserted']);
        }
    }

    public function edit_designer(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = Designer::where('id', $form_id)->first();

        return view('admin.pages.product.designer.add_designer_form_html', $data);
    }

    public function delete_designer($id)
    {

        $data['designer'] = Designer::where('id', $id)->delete();
        return redirect()->back();
    }
    //-------------------End designer --------
}
