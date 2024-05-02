@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
  <div class="row">

  <div class="col-md-12 col-lg-12">
      <div class="row">
      <div class="col-lg-3 col-md-3 col-6 mb-4">
          <div class="card">
          <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                  <img src="{{URL::to('public/assets/admin/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
              </div>
            
              </div>
              <span class="d-block">Sales</span>
              <h4 class="card-title mb-1">₹4,679</h4>
          </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                    <img src="{{URL::to('public/assets/admin/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
                </div>
                
                </div>
                <span class="d-block">Total Orders</span>
                <h4 class="card-title mb-1">120</h4>
            </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                    <img src="{{URL::to('public/assets/admin/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
                </div>
                
                </div>
                <span class="d-block">Total Product</span>
                <h4 class="card-title mb-1">1200</h4>
            </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="{{URL::to('public/assets/admin/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
                    </div>
                    
                    </div>
                    <span class="d-block">Total Users</span>
                    <h4 class="card-title mb-1">1200</h4>
                </div>
            </div>
      </div>
      </div>
  </div>

  <div class="col-md-12 col-lg-12 mb-4 mb-md-0">
      <div class="card">
      <div class="table-responsive text-nowrap">
          <table class="table text-nowrap">
          <thead>
              <tr>
              <th>Product</th>
              <th>Category</th>
              <th>Payment</th>
              <th>Order Status</th>
              <th>Actions</th>
              </tr>
          </thead>
          <tbody class="table-border-bottom-0">
              <tr>
              <td>
                  <div class="d-flex align-items-center">
                  {{-- <img src="{{URL::to('public/assets/admin/img/products/oneplus-lg.png')}}" alt="Oneplus" height="32" width="32" class="me-2"> --}}
                  <div class="d-flex flex-column">
                      <span class="fw-medium lh-1">Salwar</span>
                      {{-- <small class="text-muted">OnePlus</small> --}}
                  </div>
                  </div>
              </td>
              <td>Test</td>
              <td>
                  <div class="text-muted lh-1"><span class="text-primary fw-medium">₹120</span></div>
                  <small class="text-muted">Paid</small>
              </td>
              <td><span class="badge bg-label-primary">Confirmed</span></td>
              <td>
                  <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                  </div>
              </td>
              </tr>
              
          </tbody>
          </table>
      </div>
      </div>
  </div>

  <!--/ Total Balance -->
  </div>

</div>
@endsection
