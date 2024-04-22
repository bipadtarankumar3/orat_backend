@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce / </span>Manage reviews
  </h4>
  
  <div class="row mb-4 g-4">
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-body row widget-separator">
          <div class="col-sm-5 border-shift border-end">
            <h2 class="text-primary">4.89<i class='bx bxs-star mb-2 ms-1'></i></h2>
            <p class="fw-medium mb-1">Total 187 reviews</p>
            <p class="text-muted">All reviews are from genuine customers</p>
            <span class="badge bg-label-primary p-2 mb-3 mb-sm-0">+5 This week</span>
            <hr class="d-sm-none">
          </div>
  
          <div class="col-sm-7 gy-1 text-nowrap d-flex flex-column justify-content-between ps-4 gap-2 pe-3">
            <div class="d-flex align-items-center gap-3">
              <small>5 Star</small>
              <div class="progress w-100" style="height:10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="61.50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="w-px-20 text-end">124</small>
            </div>
            <div class="d-flex align-items-center gap-3">
              <small>4 Star</small>
              <div class="progress w-100" style="height:10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="w-px-20 text-end">40</small>
            </div>
            <div class="d-flex align-items-center gap-3">
              <small>3 Star</small>
              <div class="progress w-100" style="height:10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="w-px-20 text-end">12</small>
            </div>
            <div class="d-flex align-items-center gap-3">
              <small>2 Star</small>
              <div class="progress w-100" style="height:10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="w-px-20 text-end">7</small>
            </div>
            <div class="d-flex align-items-center gap-3">
              <small>1 Star</small>
              <div class="progress w-100" style="height:10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="w-px-20 text-end">2</small>
            </div>
  
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-body row">
          <div class="col-sm-5">
            <div class="mb-5">
              <h4 class="mb-2 text-nowrap">Reviews statistics</h4>
              <p class="mb-0"> <span class="me-2">12 New reviews</span> <span class="badge bg-label-success">+8.4%</span></p>
            </div>
  
            <div>
              <h5 class="mb-2 fw-normal">
                <span class="text-success me-1">87%</span>Positive reviews
              </h5>
              <small class="text-muted">Weekly Report</small>
            </div>
          </div>
          <div class="col-sm-7 d-flex justify-content-sm-end align-items-end">
            <div id="reviewsChart"></div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
  <!-- review List Table -->
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="datatables-review table">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Product</th>
            <th class="text-nowrap">Reviewer</th>
            <th>Review</th>
            <th>Date</th>
            <th class="text-nowrap">Status</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  
  
            </div>
@endsection