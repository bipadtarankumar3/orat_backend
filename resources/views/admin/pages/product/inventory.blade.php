@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Product List
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
    </div>
    
    
              </div>

@endsection