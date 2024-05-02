@extends('admin.layouts.main')

@section('content')




<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Coupon List
    </h4>
    
    <div class="app-ecommerce-category">
      <!-- Category List Table -->
      <div class="card">
        <div class="row my-4">
          <div class="col-md-12 float-right text-right" style="text-align: right">
             <button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList">
              <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Coupon</span>
            </button>
          </div>
        </div>
       
        <div class="card-datatable table-responsive">
          <table class="datatables-table table border-top">
            <thead>
              <tr>
                <th></th>
                <th>Coupon Name</th>
                <th>Create coupon code</th>
                <th class="text-nowrap text-sm-end">Coupon Limit</th>
                <th class="text-nowrap text-sm-end">Coupon type</th>
                <th class="text-lg-center">Discount</th>
                <th class="text-lg-center">Start Date</th>
                <th class="text-lg-center">End Date</th>
                <th class="text-lg-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>PUJO SPECIAL</td>
                <td>SPEL001</td>
                <td>100</td>
                <td>SPECIAL</td>
                <td>10%</td>
                <td>10/10/2024</td>
                <td>10/12/2024</td>
                
                <td class="text-end">
                  <div class="dropdown pe-3">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu" style="">
                      {{-- <a class="dropdown-item" href="http://localhost/orat_backend/admin/order/details"><i class="bx bx-edit-alt me-1"></i> View</a> --}}
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Offcanvas to add new customer -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-4">
          <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
          <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Offcanvas Body -->
        <div class="offcanvas-body border-top">
          <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
            <!-- Title -->
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Coupon Name</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon Name" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Create coupon code</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter coupon code" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Coupon Limit</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon Limit" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Coupon type</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon type" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Discount</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Discount" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Start Date</label>
              <input type="date" class="form-control" id="ecommerce-category-title" placeholder="Enter Start Date" name="categoryTitle" aria-label="category title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">End Date</label>
              <input type="date" class="form-control" id="ecommerce-category-title" placeholder="Enter End Date" name="categoryTitle" aria-label="category title">
            </div>

            <!-- Parent category -->
            {{-- <div class="mb-3 ecommerce-select2-dropdown">
              <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
              <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category">
                <option value="">Select parent Category</option>
                <option value="Household">Household</option>
                <option value="Management">Management</option>
                <option value="Electronics">Electronics</option>
                <option value="Office">Office</option>
                <option value="Automotive">Automotive</option>
              </select>
            </div> --}}
          
            <!-- Status -->
            <div class="mb-4 ecommerce-select2-dropdown">
              <label class="form-label">Select category status</label>
              <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
                <option value="">Select category status</option>
                <option value="Publish">Publish</option>
                <option value="Inactive">Inactive</option>
              </select>
            </div>
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