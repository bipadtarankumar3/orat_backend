@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span> Exhibition Inventory List
        </h4>

        <!-- Product List Widget -->

        <!-- Product List Table -->
        <div class="card">
            <div class="row my-4">
                <div class="col-md-12 float-right text-right" style="text-align: right">
                    <button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasEcommerceCategoryList">
                        <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Inventory</span>
                    </button>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="datatables-table table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>product</th>
                            <th>SKU</th>
                            <th>Quantity</th>
                            <th>Sold Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>1</td>
                            <td>Salwar</td>
                            <td>123123</td>
                            <td>12</td>
                            <td>1</td>
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

                                <div class="mb-4 ecommerce-select2-dropdown">
                                  <label class="form-label">Select Product </label>
                                  <select id="ecommerce-category-status" class="select2 form-select"
                                      data-placeholder="Select Product ">
                                      <option value="">Select Product </option>
                                      <option value="Publish">Salwar</option>
                                      <option value="Inactive">Pajama</option>
                                  </select>
                              </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ecommerce-category-title"> Product Quantity</label>
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
