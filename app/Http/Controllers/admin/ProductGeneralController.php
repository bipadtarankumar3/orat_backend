<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProductColor;
use App\Models\admin\ProductOccution;
use App\Models\admin\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('admin.pages.product.size.size_form');
    }

    

    public function add_size(Request $request)
    {

        if ($request->edit_id != '') {

            $size = ProductSize::findOrFail($request->edit_id);
            $size->size = $request->size;
            $size->size_slug = strtolower(str_replace(' ', '-', $request->size));
            $size->updated_by = Auth::user()->id;
            $size->status = $request->status;
            $size->save();
        } else {
            $url = '';
            
            $size = new ProductSize();
            $size->size = $request->size;
            $size->created_by = Auth::user()->id;
            $size->size_slug = strtolower(str_replace(' ', '-', $request->size));
            
            $size->status = $request->status;
            $size->save();
        }

        if ($size) {
            return $this->sendResponse($size, 'Size Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
        }
    }

    public function edit_size(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = ProductSize::where('id', $form_id)->first();

        return view('admin.pages.product.size.size_form', $data);
    }

    public function delete_size($id)
    {

        $data['category'] = ProductSize::where('id', $id)->delete();
        return redirect()->back();
    }
    //----------------------------size end------------------------------//
    //--------------------------------color start ----------------------------------//
    public function color()
    {
        $data['title'] = 'product Add';
        $data['color'] = ProductColor::get();
        return view('admin.pages.product.color.color', $data);
    }
    public function add_color_form_html()
    {

        return view('admin.pages.product.color.color_form');
    }

    public function add_color(Request $request)
    {

        if ($request->edit_id != '') {

            $color = ProductColor::findOrFail($request->edit_id);
            $color->color = $request->color;
            $color->color_slug = strtolower(str_replace(' ', '-', $request->title));
            $color->title = $request->title;
            $color->updated_by = Auth::user()->id;
            $color->status = $request->status;
            $color->save();
        } else {
            $url = '';
            
            $color = new ProductColor();
            $color->color = $request->color;
            $color->created_by = Auth::user()->id;
            $color->title = $request->title;
            $color->color_slug = strtolower(str_replace(' ', '-', $request->color));
            $color->status = $request->status;
            $color->save();
        }

        if ($color) {
            return $this->sendResponse($color, 'color Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
        }
    }

    public function edit_color(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = ProductColor::where('id', $form_id)->first();

        return view('admin.pages.product.color.color_form', $data);
    }

    public function delete_color($id)
    {

        $data['category'] = ProductColor::where('id', $id)->delete();
        return redirect()->back();
    }
    //------------------end color-------------------------//
    //--------------------------------color start ----------------------------------//
    public function occution()
    {
        $data['title'] = 'product Add';
        $data['occution'] = ProductOccution::get();
        return view('admin.pages.product.occution.occution', $data);
    }
    public function add_occution_form_html()
    {

        return view('admin.pages.product.occution.occution_form');
    }

    public function add_occution(Request $request)
    {

        if ($request->edit_id != '') {

            $occution = ProductOccution::findOrFail($request->edit_id);
           
            $occution->occution_slug = strtolower(str_replace(' ', '-', $request->title));
            $occution->title = $request->title;
            $occution->updated_by = Auth::user()->id;
            $occution->status = $request->status;
            $occution->type = "occution";
            $occution->save();
        } else {
            $url = '';
            
            $occution = new ProductOccution();
          
            $occution->created_by = Auth::user()->id;
            $occution->title = $request->title;
            $occution->occution_slug = strtolower(str_replace(' ', '-', $request->occution));
            $occution->status = $request->status;
            $occution->type = "occution";
            $occution->save();
        }

        if ($occution) {
            return $this->sendResponse($occution, 'occution Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
        }
    }

    public function edit_occution(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = ProductOccution::where('id', $form_id)->first();

        return view('admin.pages.product.occution.occution_form', $data);
    }

    public function delete_occution($id)
    {

        $data['category'] = ProductOccution::where('id', $id)->delete();
        return redirect()->back();
    }
    //------------------end occution-------------------------//
    //--------------------------------suboccution start ----------------------------------//
    public function suboccution()
    {
        $data['title'] = 'product Add';

        $data['suboccution'] = ProductOccution::where('type','suboccution')->get();
        return view('admin.pages.product.occution.suboccution', $data);
    }
    public function add_suboccution_form_html()
    {

        $data['occution'] = ProductOccution::where('type','occution')->get();
        return view('admin.pages.product.occution.suboccution_form',$data);
    }

    public function add_suboccution(Request $request)
    {

        if ($request->edit_id != '') {

            $suboccution = ProductOccution::findOrFail($request->edit_id);
           
            $suboccution->occution_slug = strtolower(str_replace(' ', '-', $request->title));
            $suboccution->title = $request->title;
            $suboccution->parent_id = $request->occution_id;
            $suboccution->updated_by = Auth::user()->id;
            $suboccution->status = $request->status;
            $suboccution->type = "suboccution";
            $suboccution->save();
        } else {
            $url = '';
            
            $suboccution = new ProductOccution();
          
            $suboccution->created_by = Auth::user()->id;
            $suboccution->title = $request->title;
            $suboccution->occution_slug = strtolower(str_replace(' ', '-', $request->suboccution));
            $suboccution->status = $request->status;
            $suboccution->parent_id = $request->occution_id;
            $suboccution->type = "suboccution";
            $suboccution->save();
        }

        if ($suboccution) {
            return $this->sendResponse($suboccution, 'suboccution Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'category is not inserted']);
        }
    }

    public function edit_suboccution(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;
        $data['occution'] = ProductOccution::where('type','occution')->get();

        $data['editData'] = ProductOccution::where('id', $form_id)->first();

        return view('admin.pages.product.occution.suboccution_form', $data);
    }

    public function delete_suboccution($id)
    {

        $data['category'] = ProductOccution::where('id', $id)->delete();
        return redirect()->back();
    }
    //------------------end suboccution-------------------------//
}
