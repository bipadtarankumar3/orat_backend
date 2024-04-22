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
          <!-- Locations Tab -->
          <div class="tab-pane fade show active" id="locations" role="tabpanel">
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title m-0">Location Name</h5>
              </div>
              <div class="card-body">
                <div class="col-12 mb-3">
                  <label for="locationName" class="form-label mb-0">Location Name</label>
                  <input class="form-control" type="text" name="locationName" id="locationName" placeholder="Shop location">
    
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="def_location" checked disabled>
                  <label class="form-check-label" for="def_location">
                    Fulfill online orders from this location
                  </label>
                </div>
                <div class="alert d-flex align-items-center bg-label-info mb-0" role="alert">
                  <span class="badge badge-center rounded-pill bg-info border-label-info p-3 me-2"><i class="bx bx-info-circle bx-xs"></i></span>
                  <div class="ps-1">
                    <span>This is your default location. To change whether you fulfill online orders from this location, select another default location first.</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title m-0">Address</h5>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label mb-0" for="country_region">Country/region</label>
                    <select id="country_region" class="select2 form-select" data-placeholder="United States">
                      <option value="">United States</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
    
                  </div>
                  <div class="col-12 col-md-4">
                    <label class="form-label mb-0" for="loc_address">Address</label>
                    <input type="text" id="loc_address" class="form-control" placeholder="Address" />
                  </div>
                  <div class="col-12 col-md-4">
                    <label class="form-label mb-0" for="loc_apa_suite">Apartment, suite, etc.</label>
                    <input type="text" id="loc_apa_suite" class="form-control" placeholder="Apartment, suite, etc." />
                  </div>
                  <div class="col-12 col-md-4"><label class="form-label mb-0" for="loc_phone">Phone</label>
                    <input type="tel" class="form-control phone-mask" id="loc_phone" placeholder="Phone" name="loc_phone" aria-label="loc_phone"></div>
                  <div class="col-12 col-md-4">
                    <label class="form-label mb-0" for="loc_city">City</label>
                    <input type="text" id="loc_city" class="form-control" placeholder="City" />
                  </div>
                  <div class="col-12 col-md-4">
                    <label class="form-label mb-0" for="loc_state">State</label>
                    <input type="text" id="loc_state" class="form-control" placeholder="State" />
                  </div>
                  <div class="col-12 col-md-4">
                    <label class="form-label mb-0" for="loc_pincode">PIN Code</label>
                    <input type="number" id="loc_pincode" class="form-control" placeholder="PIN Code" min="0" max="999999" />
                  </div>
    
                </div>
    
              </div>
            </div>
            <div class="d-flex justify-content-end gap-3">
              <button type="reset" class="btn btn-label-secondary">Discard</button>
              <a class="btn btn-primary" href="app-ecommerce-settings-notifications.html">Save</a>
            </div>
          </div>
        </div>
        <!-- /Options-->
      </div>
    </div>
    
              </div>

@endsection