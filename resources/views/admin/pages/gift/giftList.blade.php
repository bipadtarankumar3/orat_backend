@extends('admin.layouts.main')

@section('content')




<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Gift List
    </h4>
    
    <div class="app-ecommerce-category">
      <!-- Category List Table -->
      <div class="card">
        <div class="row my-4">
          <div class="col-md-12 float-right text-right" style="text-align: right">
             <button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList">
              <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Gift</span>
            </button>
          </div>
        </div>
       
        <div class="card-datatable table-responsive">
          <table class="datatables-table table border-top">
            <thead>
              <tr>
                <th></th>
                <th>Title</th>
                <th>Image</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Price</th>
                <th>Gift card Code</th>
                <th class="text-lg-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Pujo Special</td>
                <td>
                  <img src="" alt="" srcset="">
                </td>
                <td>Short Description</td>
                <td>Long Description</td>
                <td>₹1000</td>
                <td>CARD0111</td>
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
          <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Gift Card</h5>
          <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Offcanvas Body -->
        <div class="offcanvas-body border-top">
          <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
            <!-- Title -->
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-title">Title</label>
              <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Gift title" name="categoryTitle" aria-label="category title">
            </div>
            <!-- Slug -->

            <!-- Image -->
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-image">Attachment</label>
              <input class="form-control" type="file" id="ecommerce-category-image">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-image">Short Description</label>
              <input class="form-control" type="text" id="ecommerce-category-image" placeholder="">
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-category-image">Long Description</label>
              <textarea name="" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="ecommerce-category-slug">Price</label>
                <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter Price" aria-label="slug" name="slug">
            </div>

            <div class="mb-3">
                <label class="form-label" for="ecommerce-category-slug">Gift card Code (Auto Generate)</label>
                <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Gift card Code" aria-label="slug" name="slug">
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
              <label class="form-label">Select gift status</label>
              <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select gift status">
                <option value="">Select gift status</option>
                <option value="Scheduled">Scheduled</option>
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