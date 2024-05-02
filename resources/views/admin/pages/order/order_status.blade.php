@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce /</span> Order Status
  </h4>
  
  
  <!-- Order List Table -->
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="datatables-table table border-top">
        <thead>
          <tr>
            <th></th>
            <th>order</th>
            <th>date</th>
            <th>customers</th>
            <th>Order status</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>001</td>
            <td>12/12/2023</td>
            <td>Ram</td>
            <td>
                <button class="btn btn-warning">Dispatched for delivery</button>
            </td>
            <td class="text-end">
              <div class="dropdown pe-3">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu" style="">
                  <a class="dropdown-item" href="{{URL::to('admin/order/update_status')}}"><i class="bx bx-edit-alt me-1"></i> Update Status</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  
            </div>
@endsection