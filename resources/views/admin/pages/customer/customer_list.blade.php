@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
            

  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">eCommerce /</span> All Customers
  </h4>
  
  
  <!-- customers List Table -->
  <div class="card">
  
    <div class="card-datatable table-responsive">
      <table class="datatables-table table border-top">
        <thead>
          <tr>
            <th>Sl.</th>
            <th>Customer</th>
            <th class="text-nowrap">Customer Id</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Total Order</th>
            <th class="text-nowrap">Total Spent</th>
            <th class="text-nowrap">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorine Hischke</td>
            <td>634759</td>
            <td>deepak@gmail.com</td>
            <td>1234567890</td>
            <td>184</td>
            <td>₹12,378</td>
            <td class="text-end">
              <div class="dropdown pe-3">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu" style="">
                  <a class="dropdown-item" href="http://localhost/orat_backend/admin/customer/overview"><i class="bx bx-edit-alt me-1"></i> View</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Offcanvas to add new customer -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="ecommerce-customer-add pt-0" id="eCommerceCustomerAddForm" onsubmit="return false">
          <div class="ecommerce-customer-add-basic mb-3">
            <h6 class="mb-3">Basic Information</h6>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-customer-add-name">Name*</label>
              <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-customer-add-email">Email*</label>
              <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail" />
            </div>
            <div>
              <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>
              <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact" />
            </div>
          </div>
  
          <div class="ecommerce-customer-add-shiping mb-3 pt-3">
            <h6 class="mb-3">Shipping Information</h6>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-customer-add-address">Address Line 1</label>
              <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-customer-add-address-2">Address Line 2</label>
              <input type="text" id="ecommerce-customer-add-address-2" class="form-control" aria-label="address2" name="customerAddress2" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="ecommerce-customer-add-town">Town</label>
              <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown" />
            </div>
            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label class="form-label" for="ecommerce-customer-add-state">State / Province</label>
                <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState" />
              </div>
              <div class="col-12 col-sm-6">
                <label class="form-label" for="ecommerce-customer-add-post-code">Post Code</label>
                <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8" />
              </div>
            </div>
            <div>
              <label class="form-label" for="ecommerce-customer-add-country">Country</label>
              <select id="ecommerce-customer-add-country" class="select2 form-select">
                <option value="">Select</option>
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
  
          </div>
  
          <div class="d-sm-flex mb-3 pt-3">
            <div class="me-auto mb-2 mb-md-0">
              <h6 class="mb-0">Use as a billing address?</h6>
              <small class="text-muted">If you need more info, please check budget.</small>
            </div>
            <label class="switch m-auto pe-2">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
            </label>
          </div>
          <div class="pt-3">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
            <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
            </div>

@endsection