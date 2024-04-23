@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Product List
    </h4>
    
    <!-- Product List Widget -->
    
    <div class="card mb-4">
      <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
          <div class="row gy-4 gy-sm-1">
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                <div>
                  <h6 class="mb-2">Total Product</h6>
                  <h4 class="mb-2">1000</h4>
                  {{-- <p class="mb-0"><span class="text-muted me-2">5k orders</span><span class="badge bg-label-success">+5.7%</span></p> --}}
                </div>
                <div class="avatar me-sm-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-store-alt bx-sm"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-4">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                <div>
                  <h6 class="mb-2">Deactive Products</h6>
                  <h4 class="mb-2">123</h4>
                  {{-- <p class="mb-0"><span class="text-muted me-2">21k orders</span><span class="badge bg-label-success">+12.4%</span></p> --}}
                </div>
                <div class="avatar me-lg-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-laptop bx-sm"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                <div>
                  <h6 class="mb-2">Deleted Products</h6>
                  <h4 class="mb-2">12</h4>
                  {{-- <p class="mb-0 text-muted">6k orders</p> --}}
                </div>
                <div class="avatar me-sm-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-gift bx-sm"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h6 class="mb-2">Total Orders</h6>
                  <h4 class="mb-2">2123</h4>
                  {{-- <p class="mb-0"><span class="text-muted me-2">150 orders</span><span class="badge bg-label-danger">-3.5%</span></p> --}}
                </div>
                <div class="avatar">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-wallet bx-sm"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Product List Table -->
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Filter</h5>
        <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
          <div class="col-md-4 product_status"></div>
          <div class="col-md-4 product_category"></div>
          <div class="col-md-4 product_stock text-end">
            <a href="{{URL::to('admin/product/add')}}"><button class="btn btn-info">Add Product</button></a>
            
          </div>
        </div>
      </div>
      <div class="card-datatable table-responsive">
        <table class="datatables-table table border-top">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>product</th>
              <th>category</th>
              <th>stock</th>
              <th>sku</th>
              <th>price</th>
              <th>qty</th>
              <th>status</th>
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" name="" id=""></td>
              <td>1</td>
              <td>Salwar</td>
              <td></td>
              <td>12</td>
              <td></td>
              <td>₹ 123</td>
              <td>100</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    
              </div>

@endsection