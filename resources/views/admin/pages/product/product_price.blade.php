@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span> Product Price List
        </h4>

        <!-- Product List Widget -->

        <!-- Product List Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Filter</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-4 product_status"></div>
                    <div class="col-md-4 product_category"></div>

                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-table table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Image</th>
                            <th>product</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Sale Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>1</td>
                            <td>
                                <img src="" alt="" srcset="">
                            </td>
                            <td>
                                <a href="">Salwar</a>
                                <p>SKU: HS-131-A0</p>
                            </td>
                            <td>
                                ₹ 1000
                            </td>
                            <td>₹ 10</td>
                            <td>₹ 990</td>
                            <td class="text-end">
                                <div class="dropdown pe-3">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu" style="">
                                        {{-- <a class="dropdown-item" href="http://localhost/orat_backend/admin/order/details"><i class="bx bx-edit-alt me-1"></i> View</a> --}}
                                        <a class="dropdown-item" href="javascript:void(0);" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasEcommerceCategoryList"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
                aria-labelledby="offcanvasEcommerceCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                    <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Prodct Price edit</h5>
                    <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-category-title">Product</label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter Product name" value="salwar" name="categoryTitle"
                                aria-label="category title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-category-title">Product Price</label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter Product name" value="1000" name="categoryTitle"
                                aria-label="category title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-category-title">Product Discunt Price</label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter Product name" value="10" name="categoryTitle"
                                aria-label="category title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-category-title">Product sale Price</label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter Product name" value="990" name="categoryTitle"
                                aria-label="category title">
                        </div>




                        <!-- Status -->

                        <!-- Submit and reset -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
