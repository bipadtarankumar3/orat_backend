<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use Illuminate\Support\Facades\Auth;
use Validator;
use Config;
use Mail;
use File;
use App\Mail\ClientMail;
use App\Models\ProductType;
use DB;


class CategoryController extends Controller
{
        //------------------- Category --------
        public function category()
        {
            $data['title'] = 'product Add';
            $data['category'] = Category::get();
            return view('admin.pages.product.category.category', $data);
        }
        public function add_category_form_html()
        {
    
            return view('admin.pages.product.category.category_form_html');
        }
    
        public function add_category(Request $request)
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
                        $url = url('public/upload/category/'.$uploadName);
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
                        $url = url('public/upload/category/'.$uploadName);
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
                        $url = url('public/upload/category/'.$uploadName);
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
                        $url = url('public/upload/category/'.$uploadName);
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
                        $url = url('public/upload/category/'.$uploadName);
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
                        $url = url('public/upload/category/'.$uploadName);
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
    
        public function edit_category(Request $request)
        {
    
            $data['form_id'] = $form_id = $request->form_id;
    
            $data['editData'] = Category::where('id', $form_id)->first();
    
            return view('admin.pages.product.category.category_form_html', $data);
        }
    
        public function delete_category($id)
        {
    
            $data['category'] = Category::where('id', $id)->delete();
            return redirect()->back();
        }
        //-------------------End Category --------
    
        //------------------- Sub Category --------
        public function sub_category()
        {
            $data['title'] = 'product Add';
            $data['category'] = SubCategory::select('sub_categories.*', 'categories.title')->leftjoin('categories', 'categories.id', 'sub_categories.category_id')->get();
            return view('admin.pages.product.sub_category.sub_category', $data);
        }
        public function add_sub_category_form_html()
        {
    
            $data['category'] = Category::get();
            return view('admin.pages.product.sub_category.sub_category_form_html', $data);
        }
    
        public function add_sub_category(Request $request)
        {
    
            if ($request->edit_id != '') {
    
                $category = SubCategory::findOrFail($request->edit_id);
                $category->category_id = $request->category_id;
                $category->sub_title = $request->title;
                if (isset($request->document) && !empty($request->document)) {
                    if ($request->hasFile('document')) {
                        $c_image = $request->file('document');
                        $milisecond = round(microtime(true) * 1000);
                        $name = $c_image->getClientOriginalName();
                        $actual_name = str_replace(" ", "_", $name);
                        $uploadName = $milisecond . "_" . $actual_name;
                        $c_image->move(public_path() . '/upload/category/', $uploadName);
                        $url = url('public/upload/category/' . $uploadName);
                        $c_image = $uploadName;
                        $category->sub_image = $url;
                    }
                }
                $category->updated_by = Auth::user()->id;
                $category->status = $request->status;
                $category->save();
            } else {
                $url = '';
                if (isset($request->document) && !empty($request->document)) {
                    if ($request->hasFile('document')) {
                        $c_image = $request->file('document');
                        $milisecond = round(microtime(true) * 1000);
                        $name = $c_image->getClientOriginalName();
                        $actual_name = str_replace(" ", "_", $name);
                        $uploadName = $milisecond . "_" . $actual_name;
                        $c_image->move(public_path() . '/upload/category/', $uploadName);
                        $url = url('public/upload/category/' . $uploadName);
                        $c_image = $uploadName;
                    }
                }
                $category = new SubCategory();
                $category->category_id = $request->category_id;
                $category->sub_title = $request->title;
                $category->created_by = Auth::user()->id;
                $category->sub_image = $url;
                $category->status = $request->status;
                $category->save();
            }
    
            if ($category) {
                return $this->sendResponse($category, 'category Added Successfully');
            } else {
                return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
            }
        }
    
        public function edit_sub_category(Request $request)
        {
    
            $data['form_id'] = $form_id = $request->form_id;
    
            $data['editData'] = SubCategory::where('id', $form_id)->first();
            $data['category'] = Category::get();
    
            return view('admin.pages.product.sub_category.sub_category_form_html', $data);
        }
    
        public function delete_sub_category($id)
        {
    
            $data['category'] = SubCategory::where('id', $id)->delete();
            return redirect()->back();
        }
        //-------------------End Sub Category --------
    
}
