@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce /</span> Payment Histories
  </h4>
  
  <!-- Order List Widget -->
  
  <div class="card mb-4">
    <div class="card-widget-separator-wrapper">
      <div class="card-body card-widget-separator">
        <div class="row gy-4 gy-sm-1">
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
              <div>
                <h3 class="mb-2">56</h3>
                <p class="mb-0">No Of User Payment</p>
              </div>
              <div class="avatar me-sm-4">
                <span class="avatar-initial rounded bg-label-secondary">
                  <i class="bx bx-calendar bx-sm"></i>
                </span>
              </div>
            </div>
            <hr class="d-none d-sm-block d-lg-none me-4">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
              <div>
                <h3 class="mb-2">₹ 12,689</h3>
                <p class="mb-0">Completed</p>
              </div>
              <div class="avatar me-lg-4">
                <span class="avatar-initial rounded bg-label-secondary">
                  <i class="bx bx-check-double bx-sm"></i>
                </span>
              </div>
            </div>
            <hr class="d-none d-sm-block d-lg-none">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
              <div>
                <h3 class="mb-2">₹ 124</h3>
                <p class="mb-0">Cancled</p>
              </div>
              <div class="avatar me-sm-4">
                <span class="avatar-initial rounded bg-label-secondary">
                  <i class="bx bx-wallet bx-sm"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <h3 class="mb-2">₹ 32</h3>
                <p class="mb-0">Failed</p>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-secondary">
                  <i class="bx bx-error-alt bx-sm"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Order List Table -->
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="datatables-table table border-top">
        <thead>
          <tr>
            <th></th>
            <th>Date</th>
            <th>customers</th>
            <th>Price</th>
            <th>status</th>
            <th>method</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>001</td>
            <td>Deepak</td>
            <td>212</td>
            <td><button class="btn btn-warning">Pending</button></td>
            <td>Razorpay</td>
            <td class="text-end">
              <div class="dropdown pe-3">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu" style="">
                  <a class="dropdown-item" href="{{URL::to('admin/order/details')}}"><i class="bx bx-edit-alt me-1"></i> View</a>
                  {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
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