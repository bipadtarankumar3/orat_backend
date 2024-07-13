@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span><span> Add Product</span>
        </h4>

        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Add a new Product</h4>
                    <p class="text-muted">Orders placed across your store</p>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    {{-- <button class="btn btn-label-secondary">Discard</button>
          <button class="btn btn-label-primary">Save draft</button> --}}
                    <button type="submit" class="btn btn-primary">Publish product</button>
                </div>

            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Product information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Name</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Product title" name="productTitle" aria-label="Product title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-thumb-image">Thumbail Image</label>
                                <input type="file" class="form-control" id="ecommerce-thumb-image"
                                    placeholder="Product title" name="productTitle" aria-label="Product title">
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label" for="ecommerce-product-sku">SKU</label>
                                    <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU"
                                        name="productSku" aria-label="Product SKU">
                                </div>
                                <div class="col"><label class="form-label"
                                        for="ecommerce-product-barcode">Barcode</label>
                                    <input type="text" class="form-control" id="ecommerce-product-barcode"
                                        placeholder="0123-4567" name="productBarcode" aria-label="Product barcode">
                                </div>
                            </div>
                            <!-- Description -->
                            <div>
                                <label class="form-label">Description <span class="text-muted">(Optional)</span></label>
                                <div class="form-control p-0 pt-1">
                                    <div class="comment-toolbar border-0 border-bottom">
                                        <div class="d-flex justify-content-start">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-editor border-0 pb-4" id="ecommerce-category-description">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Media</h5>
                            <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                        </div>
                        <div class="card-body">
                            <form action="https://demos.themeselection.com/upload" class="dropzone needsclick"
                                id="dropzone-basic">
                                <div class="dz-message needsclick my-5">
                                    <p class="fs-4 note needsclick my-2">Drag and drop your image here</p>
                                    <small class="text-muted d-block fs-6 my-2">or</small>
                                    <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">Browse
                                        image</span>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Media -->

                    <!-- Inventory -->

                    <!-- /Inventory -->
                </div>
                <!-- /Second column -->

                <!-- Second column -->
                <div class="col-12 col-lg-4">
                    <!-- Pricing Card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Status</h5>
                        </div>
                        <div class="card-body">

                            <!-- Charge tax check box -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax"
                                    checked>
                                <label class="form-label" for="price-charge-tax">
                                    Add In Default Product
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax">
                                <label class="form-label" for="price-charge-tax">
                                    Add In Exhibition Product
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax"
                                    checked>
                                <label class="form-label" for="price-charge-tax">
                                    Charge tax on this product
                                </label>
                            </div>
                            <!-- Instock switch -->
                            <div class="d-flex justify-content-between align-items-center border-top pt-3">
                                <span class="mb-0 h6">In stock</span>
                                <div class="w-25 d-flex justify-content-end">
                                    <label class="switch switch-primary switch-sm me-4 pe-2">
                                        <input type="checkbox" class="switch-input" checked="">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <span class="switch-off"></span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Pricing Card -->
                    <!-- Organize Card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Organize</h5>
                        </div>
                        <div class="card-body">

                            <!-- Category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                    for="category-org">
                                    <span>Category</span>
                                    {{-- <a href="javascript:void(0);" class="fw-medium">Add new category</a> --}}
                                </label>
                                <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                                    <option value="">Select Category</option>
                                    <option value="NEW">NEW</option>
                                    <option value="Management">WOMEN</option>
                                    <option value="Electronics">LEHENGAS</option>
                                </select>
                            </div>
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                    for="category-org">
                                    <span>Sub Category</span>
                                    {{-- <a href="javascript:void(0);" class="fw-medium">Add new Sub category</a> --}}
                                </label>
                                <select id="category-org" class="select2 form-select"
                                    data-placeholder="Select Sub Category">
                                    <option value="">Select Category</option>
                                    <option value="Management">SUB WOMEN</option>
                                    <option value="Electronics">SUB LEHENGAS</option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="status-org">Status
                                </label>
                                <select id="status-org" class="select2 form-select" data-placeholder="Published">
                                    <option value="">Published</option>
                                    <option value="Published">Published</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="status-org">Select Designer
                                </label>
                                <select id="desiner" name="designer_id" class="select2 form-select" data-placeholder="Please Select">
                                    <option value="">Please Select</option>
                                    <option value="Published">Published</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <!-- Tags -->
                            <div class="mb-3">
                                <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                                <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                    value="NEW Wears" aria-label="Product Tags" />
                            </div>
                            <div class="card mt-4">
                                <h5 class="card-header">Product Type</h5>
                                <div class="card-body">

                                    <div class="row">
                                        @foreach ($product_types as $product_type)
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="product_type[]"
                                                            class="form-check-input" id="basic-default-checkbox"
                                                            value="{{ $product_type->id }}">
                                                        <label class="form-check-label"
                                                            for="basic-default-checkbox">{{ $product_type->name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Organize Card -->
                </div>
                <!-- /Second column -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Variants -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Variants</h5>
                        </div>
                        <div class="card-body">

                            <div data-repeater-list="group-a">
                                <div class="dynamic_product_varient">
                                    <div class="row">

                                        <div class="mb-3 col-2">
                                            <label class="form-label" for="form-repeater-1-1">Choose Size</label>
                                            <select id="form-repeater-1-1" class="select2 form-select"
                                                data-placeholder="Size">
                                                <option value="Plese Select">Plese Select</option>
                                                <option value="XS">XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="X">X</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="XXXL">XXXL</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-2">
                                            <label class="form-label " for="form-repeater-1-2">Choose Color</label>
                                            <select id="form-repeater-1-2" class="select2 form-select"
                                                data-placeholder="Size">
                                                <option value="Plese Select">Plese Select</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Red">Red</option>
                                                <option value="Green">Green</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-3">
                                            <label class="form-label " for="form-repeater-1-2">Price</label>
                                            <input type="number" id="form-repeater-1-2" class="form-control"
                                                placeholder="Enter Price" />
                                        </div>
                                        <div class="mb-3 col-3">
                                            <label class="form-label " for="form-repeater-1-2"> To Fit Info</label>
                                            <textarea name="" id="" class="form-control" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-2">
                                          <a class="extra-fields" href="javascript:void(0);" onclick="add_more_product_varient()">Add 
                                              <i class="fa-solid fa fa-plus" style="color: rgb(0, 245, 53)"></i>
                                          </a>
                                      </div>

                                    </div>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                    <!-- /Variants -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function add_more_product_varient() {
            var html = `
                 <div class="row">

                                        <div class="mb-3 col-2">
                                            <label class="form-label" for="form-repeater-1-1">Choose Size</label>
                                            <select id="form-repeater-1-1" class="select2 form-select"
                                                data-placeholder="Size">
                                                <option value="Plese Select">Plese Select</option>
                                                <option value="XS">XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="X">X</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="XXXL">XXXL</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-2">
                                            <label class="form-label " for="form-repeater-1-2">Choose Color</label>
                                            <select id="form-repeater-1-2" class="select2 form-select"
                                                data-placeholder="Size">
                                                <option value="Plese Select">Plese Select</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Red">Red</option>
                                                <option value="Green">Green</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-3">
                                            <label class="form-label " for="form-repeater-1-2">Price</label>
                                            <input type="number" id="form-repeater-1-2" class="form-control"
                                                placeholder="Enter Price" />
                                        </div>
                                        <div class="mb-3 col-3">
                                            <label class="form-label " for="form-repeater-1-2"> To Fit Info</label>
                                            <textarea name="" id="" class="form-control" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-2">
                        
                            Remove <i class="fa fa-trash" style="color:red;" onclick="remove_product_varient(this)" aria-hidden="true"></i>
                        
                    </div>

                                    </div>
                    
                </div>
            `;
            $('.dynamic_product_varient').append(html);
        }

        function remove_product_varient(element) {
            // Find the closest parent row and remove it
            $(element).closest('.row').remove();
        }
    </script>
@endsection
