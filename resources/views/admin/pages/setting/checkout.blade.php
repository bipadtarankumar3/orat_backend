@extends('admin.layouts.main')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Settings
    </h4>
    
    <div class="row g-4">
    
      <!-- Navigation -->
      @include('admin.pages.setting.left_menu')
      <!-- /Navigation -->
    
      <!-- Options -->
      <div class="col-12 col-lg-8 pt-4 pt-lg-0">
        <div class="tab-content p-0">
          <!-- Checkout Tab -->
          <div class="tab-pane fade show active" id="checkout" role="tabpanel">
            <div class="card mb-4">
              <div class="card-header">
                <div class="card-title m-0">
                  <h5 class="m-0">Customer contact method</h5>
                  <p class="text-muted mb-0">Select what contact method customers use to check out.</p>
                </div>
              </div>
    
              <div class="card-body">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="contactMethod" id="contactPhone" checked>
                  <label class="form-check-label" for="contactPhone">
                    Phone number
                  </label>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="radio" name="contactMethod" id="contactMail">
                  <label class="form-check-label" for="contactMail">
                    Email
                  </label>
                </div>
                <div class="alert d-flex align-items-center bg-label-info mb-0" role="alert">
                  <span class="badge badge-center rounded-pill bg-info border-label-info p-3 me-2"><i class="bx bx-info-circle bx-xs"></i></span>
                  <div class="ps-1">
                    <span>  To send SMS updates, you need to install an SMS App.</span>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title m-0">Customer information</h5>
              </div>
              <div class="card-body">
                <div class="mb-4">
                  <p class="mb-2">Full name</p>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="fullName" id="last_name" checked>
                    <label class="form-check-label" for="last_name">
                      Only require last name
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fullName" id="last_and_first_name">
                    <label class="form-check-label" for="last_and_first_name">
                      Require first and last name
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="mb-2">Company name</p>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="companyName" id="dont_include_name" checked>
                    <label class="form-check-label" for="dont_include_name">
                      Don't include name
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="companyName" id="optional_name">
                    <label class="form-check-label" for="optional_name">
                      Optional
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="companyName" id="required_name">
                    <label class="form-check-label" for="required_name">
                      Required
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="mb-2">Address line 2 (apartment, unit, etc.)</p>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="addressLine" id="dont_include_address" checked>
                    <label class="form-check-label" for="dont_include_address">
                      Don't include name
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="addressLine" id="optional_address">
                    <label class="form-check-label" for="optional_address">
                      Optional
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="addressLine" id="required_address">
                    <label class="form-check-label" for="required_address">
                      Required
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="mb-2">Shipping address phone number</p>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="shippingAddress" id="dont_include_ship_address" checked>
                    <label class="form-check-label" for="dont_include_ship_address">
                      Don't include name
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="shippingAddress" id="optional_ship_address">
                    <label class="form-check-label" for="optional_ship_address">
                      Optional
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="shippingAddress" id="required_ship_address">
                    <label class="form-check-label" for="required_ship_address">
                      Required
                    </label>
                  </div>
                </div>
    
              </div>
            </div>
    
            <div class="d-flex justify-content-end gap-3">
              <button type="reset" class="btn btn-label-secondary">Discard</button>
              <a class="btn btn-primary" href="app-ecommerce-settings-shipping.html">Save</a>
            </div>
    
          </div>
    
        </div>
      </div>
      <!-- /Options-->
    </div>
    
    
              </div>

@endsection