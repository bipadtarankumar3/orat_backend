@extends('admin.layouts.main')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce /</span> Order Details
  </h4>
  
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
  
    <div class="d-flex flex-column justify-content-center">
      <h5 class="mb-1 mt-3">Order #32543 <span class="badge bg-label-success me-2 ms-2">Paid</span> <span class="badge bg-label-info">Ready to Pickup</span></h5>
      <p class="text-body">Aug 17, <span id="orderYear"></span>, 5:48 (ET)</p>
    </div>

  </div>
  
  <!-- Order Details Table -->
  
  <div class="row">
    <div class="col-12 col-lg-8">

      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title m-0">Shipping activity</h5>
        </div>
        <div class="card-body">
          <ul class="timeline pb-0 mb-0">
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Order was placed (Order ID: #32543)</h6>
                  <span class="text-muted">Tuesday 11:29 AM</span>
                </div>
                <p class="mt-2">Your order has been placed successfully</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Pick-up</h6>
                  <span class="text-muted">Wednesday 11:29 AM</span>
                </div>
                <p class="mt-2">Pick-up scheduled with courier</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Dispatched</h6>
                  <span class="text-muted">Thursday 11:29 AM</span>
                </div>
                <p class="mt-2">Item has been picked up by courier</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Package arrived</h6>
                  <span class="text-muted">Saturday 15:20 AM</span>
                </div>
                <p class="mt-2">Package arrived at an Amazon facility, NY</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-left-dashed">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Dispatched for delivery</h6>
                  <span class="text-muted">Today 14:12 PM</span>
                </div>
                <p class="mt-2">Package has left an Amazon facility, NY</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-transparent pb-0">
              <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-secondary"></span></span>
              <div class="timeline-event pb-0">
                <div class="timeline-header">
                  <h6 class="mb-0">Delivery</h6>
                </div>
                <p class="mt-2 mb-0">Package will be delivered by tomorrow</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card mb-4">
        <div class="card-header">
          <h6 class="card-title m-0">Change Status</h6>
        </div>
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <h6>Choose Status</h6>
           <select name="" id="" class="form-control">
            <option value="">Select Status</option>
            <option value="">Pick-up</option>
           </select>
          </div>
          <button class="btn btn-success mt-4">Update</button>
        </div>
      </div>
  

    </div>
  </div>
  
 
  
  
            </div>

@endsection