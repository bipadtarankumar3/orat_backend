@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Invoice /</span> List
    </h4>
    
    <!-- Invoice List Widget -->
    
    <div class="card mb-4">
      <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
          <div class="row gy-4 gy-sm-1">
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1">24</h3>
                  <p class="mb-0">Clients</p>
                </div>
                <div class="avatar me-sm-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-user bx-sm"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-4">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1">165</h3>
                  <p class="mb-0">Invoices</p>
                </div>
                <div class="avatar me-lg-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-file bx-sm"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none">
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                <div>
                  <h3 class="mb-1">₹2.46k</h3>
                  <p class="mb-0">Paid</p>
                </div>
                <div class="avatar me-sm-4">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-check-double bx-sm"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h3 class="mb-1">₹876</h3>
                  <p class="mb-0">Unpaid</p>
                </div>
                <div class="avatar">
                  <span class="avatar-initial rounded bg-label-secondary">
                    <i class="bx bx-error-circle bx-sm"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Invoice List Table -->
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-table table border-top">
          <thead>
            <tr>
              <th></th>
              <th>#ID</th>
              <th class="text-truncate">Issued Date</th>
              <th>Client</th>
              <th>Order</th>
              <th>Code</th>
              <th>Amount</th>
              <th>Invoice</th>
              <th>Invoice Status</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>1</td>
              <td>12/01/2024</td>
              <td>Deepak</td>
              <td>ORD001</td>
              <td>#ORAT001</td>
              <td>₹200</td>
              <td>
                <a href="">
                  <button class="btn btn-sm btn-primary">PDF</button>
                </a>
              </td>
              <td>
                <button class="btn btn-success">PAID</button>
              </td>
              <td class="text-end">
                <div class="dropdown pe-3">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu" style="">
                    <a class="dropdown-item" href="{{URL::to('admin/invoice/details')}}"><i class="bx bx-edit-alt me-1"></i> View</a>
                    {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a> --}}
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
@endsection