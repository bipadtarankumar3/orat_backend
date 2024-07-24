<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProductSize;
use Illuminate\Http\Request;

class ProductGeneralController extends Controller
{
    public function size()
    {
        $data['title'] = 'product Add';
        $data['size'] = ProductSize::get();
        return view('admin.pages.product.size.size', $data);
    }
    public function add_size_form_html()
    {

        return view('admin.pages.product.category.category_form_html');
    }

    public function add_size(Request $request)
    {

        if ($request->edit_id != '') {

            $category = Category::findOrFail($request->edit_id);
            $category->title = $request->title;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->icon = $url;
                }
            }
            if (isset($request->thumbnail) && !empty($request->thumbnail)) {
                if ($request->hasFile('thumbnail')) {
                    $c_image=$request->file('thumbnail');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->thumbnail = $url;
                }
            }
            if (isset($request->cover) && !empty($request->cover)) {
                if ($request->hasFile('cover')) {
                    $c_image=$request->file('cover');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->cover = $url;
                }
            }
            $category->updated_by = Auth::user()->id;
            $category->status = $request->status;
            $category->save();
        } else {
            $url = '';
            
            $category = new Category();
            $category->title = $request->title;
            $category->created_by = Auth::user()->id;
            if (isset($request->document) && !empty($request->document)) {
                if ($request->hasFile('document')) {
                    $c_image=$request->file('document');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->icon = $url;
                }
            }
            if (isset($request->thumbnail) && !empty($request->thumbnail)) {
                if ($request->hasFile('thumbnail')) {
                    $c_image=$request->file('thumbnail');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->thumbnail = $url;
                }
            }
            if (isset($request->cover) && !empty($request->cover)) {
                if ($request->hasFile('cover')) {
                    $c_image=$request->file('cover');
                    $milisecond=round(microtime(true)*1000);
                    $name=$c_image->getClientOriginalName();
                    $actual_name=str_replace(" ","_",$name);
                    $uploadName=$milisecond."_".$actual_name;
                    $c_image->move(public_path().'/upload/category/',$uploadName);
                    $url = 'public/upload/category/'.$uploadName;
                    $c_image = $uploadName;
                    $category->cover = $url;
                }
            }
            
            $category->status = $request->status;
            $category->save();
        }

        if ($category) {
            return $this->sendResponse($category, 'category Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
        }
    }

    public function edit_size(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = Category::where('id', $form_id)->first();

        return view('admin.pages.product.category.category_form_html', $data);
    }

    public function delete_size($id)
    {

        $data['category'] = Category::where('id', $id)->delete();
        return redirect()->back();
    }
}