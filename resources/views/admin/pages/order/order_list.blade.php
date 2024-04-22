@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce /</span> Order List
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
                <p class="mb-0">Pending Payment</p>
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
                <h3 class="mb-2">12,689</h3>
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
                <h3 class="mb-2">124</h3>
                <p class="mb-0">Refunded</p>
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
                <h3 class="mb-2">32</h3>
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
      <table class="datatables-order table border-top">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>order</th>
            <th>date</th>
            <th>customers</th>
            <th>payment</th>
            <th>status</th>
            <th>method</th>
            <th>actions</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  
  
            </div>
@endsection