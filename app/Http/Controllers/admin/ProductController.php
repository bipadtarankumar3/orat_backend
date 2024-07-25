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
use App\Models\AddedProductType;
use App\Models\admin\Designer;
use App\Models\admin\ProductColor;
use App\Models\admin\ProductOccution;
use App\Models\admin\ProductSize;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTags;
use App\Models\ProductType;
use App\Models\ProductVariant;
use DB;


class ProductController extends Controller
{
    public function getSubCategories($category_id)
    {
        $subCategories = SubCategory::where('category_id', $category_id)->get();
        return response()->json($subCategories);
    }
    public function getSuboccution($occution_id)
    {
        $suboccution = ProductOccution::where('parent_id', $occution_id)->get();
        return response()->json($suboccution);
    }

    public function productList()
    {
        $data['title'] = 'product Lists';
        return view('admin.pages.product.product_list', $data);
    }

    public function addProduct()
    {
        $data['title'] = 'product Add';
        $data['product_types'] = ProductType::where('created_by', Auth::user()->id)->get();
        $data['categories'] = Category::where('created_by', Auth::user()->id)->get();
        $data['designers'] = Designer::where('created_by', Auth::user()->id)->get();
        $data['colors'] = ProductColor::where('created_by', Auth::user()->id)->get();
        $data['sizes'] = ProductSize::where('created_by', Auth::user()->id)->get();
        $data['occutions'] = ProductOccution::where('created_by', Auth::user()->id)->where('type','occution')->get();
        return view('admin.pages.product.add_product', $data);
    }


    public function add_product_action(Request $request)
    {
        // Begin transaction
        DB::beginTransaction();

        try {
            // Handle thumbnail image upload
            if ($request->hasFile('thumbail_image')) {
                $thumbnailImage = $request->file('thumbail_image');
                $thumbnailName = time() . '_' . $thumbnailImage->getClientOriginalName();
                $thumbnailImage->move(public_path('uploads'), $thumbnailName);
                $thumbnailPath = url('public/uploads/' . $thumbnailName);
            }

            // Handle cover image upload
            if ($request->hasFile('cover_image')) {
                $coverImage = $request->file('cover_image');
                $coverName = time() . '_' . $coverImage->getClientOriginalName();
                $coverImage->move(public_path('uploads'), $coverName);
                $coverPath = url('public/uploads/' . $coverName);
            }

            // Create the product
            $product = Product::create([
                'product_title' => $request->input('product_title'),
                'product_short_description' => $request->input('product_short_description'),
                'sku' => $request->input('productSku'),
                'video_url' => $request->input('video_url'),
                'discount' => $request->input('discount'),
                'discount_type' => $request->input('discount_type'),
                'description' => $request->input('product_description'),
                'default_product_enable' => $request->input('default_product_enable'),
                'exhibition_enable' => $request->input('exhibition_enable'),
                'tax_enable' => $request->input('tax_enable'),
                'feature_product_enable' => $request->input('feature_product_enable'),
                'todays_deal_enable' => $request->input('todays_deal_enable'),
                'in_stock' => $request->input('in_stock'),
                'category_id' => $request->input('category_id'),
                'sub_category_id' => $request->input('sub_category_id'),
                'occution_id' => $request->input('occution_id'),
                'sub_occution_id' => $request->input('sub_occution_id'),
                'designer_id' => $request->input('designer_id'),
                'product_thumbail' => $thumbnailPath ?? null,
                'cover_image' => $coverPath ?? null,
                'product_slug' => strtolower(str_replace(' ', '-',$request->input('product_title'))),
                'created_by' =>Auth::user()->id,
            ]);

            // Insert tags
            foreach ($request->input('ecommerce-product-tags', []) as $tag) {
                ProductTags::create([
                    'product_id' => $product->id,
                    'product_tags' => $tag,
                ]);
            }

            // Insert product types
            foreach ($request->input('product_type_id', []) as $typeId) {
                AddedProductType::create([
                    'product_id' => $product->id,
                    'product_type_id' => $typeId,
                ]);
            }

            // Insert variants
            $sizes = $request->input('product_size_id', []);
            $colors = $request->input('product_color_id', []);
            $prices = $request->input('product_varient_price', []);
            $fitInfos = $request->input('product_fit_info', []);

            for ($i = 0; $i < count($sizes); $i++) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'product_size_id' => $sizes[$i] ?? null,
                    'product_color_id' => $colors[$i] ?? null,
                    'product_varient_price' => $prices[$i] ?? null,
                    'product_fit_info' => $fitInfos[$i] ?? null,
                ]);
            }

            // Handle multiple product images
            if ($request->hasFile('prouct_multiple_image')) {
                foreach ($request->file('prouct_multiple_image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
                     $imagePath = asset('uploads/' . $imageName);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $imagePath,
                    ]);
                }
            }

            // Commit transaction
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Product added successfully']);
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollBack();

            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }


    //----------------product type---------------
    public function productTypeList()
    {
        $data['title'] = 'product Type Lists';
        $data['producttype'] = ProductType::get();
        return view('admin.pages.product.product_type.product_Type_list', $data);
    }
    public function add_product_type_form_html()
    {
        $data['title'] = 'product Type Lists';
        $data['producttype'] = ProductType::get();
        return view('admin.pages.product.product_type.product_type_form_html', $data);
    }

    public function add_product_type(Request $request)
    {

        if ($request->edit_id != '') {

            $product_type = ProductType::findOrFail($request->edit_id);
            $product_type->name = $request->name;

            $product_type->updated_by = Auth::user()->id;

            $product_type->save();
        } else {
            $url = '';

            $product_type = new ProductType();
            $product_type->name = $request->name;
            $product_type->created_by = Auth::user()->id;

            $product_type->save();
        }

        if ($product_type) {
            return $this->sendResponse($product_type, 'product_type Added Successfully');
        } else {
            return $this->sendError('Insert Error.', ['error' => 'product_type is not inserted']);
        }
    }
    public function edit_product_type(Request $request)
    {

        $data['form_id'] = $form_id = $request->form_id;

        $data['editData'] = ProductType::where('id', $form_id)->first();

        return view('admin.pages.product.product_type.product_type_form_html', $data);
    }
    public function delete_product_type($id)
    {

        $data['category'] = ProductType::where('id', $id)->delete();
        return redirect()->back();
    }
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
                    $c_image = $request->file('document');
                    $milisecond = round(microtime(true) * 1000);
                    $name = $c_image->getClientOriginalName();
                    $actual_name = str_replace(" ", "_", $name);
                    $uploadName = $milisecond . "_" . $actual_name;
                    $c_image->move(public_path() . '/upload/category/', $uploadName);
                    $url = asset('public/upload/category/' . $uploadName);
                    $c_image = $uploadName;
                    $category->image = $url;
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
                    $url = asset('public/upload/category/' . $uploadName);
                    $c_image = $uploadName;
                }
            }
            $category = new Category();
            $category->title = $request->title;
            $category->created_by = Auth::user()->id;
            $category->image = $url;
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
                    $url = 'public/upload/category/' . $uploadName;
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
                    $url = 'public/upload/category/' . $uploadName;
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


    // public function sub_category(){
    //     $data['title']='product Add';
    //     return view('admin.pages.product.sub_category',$data);
    // }
    public function inventory()
    {
        $data['title'] = 'inventory Lists';
        return view('admin.pages.product.inventory', $data);
    }
    public function product_price()
    {
        $data['title'] = 'product_price Lists';
        return view('admin.pages.product.product_price', $data);
    }
}
