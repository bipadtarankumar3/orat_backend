@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce / Customer Details /</span> Notifications
    </h4>
    
    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
      <div class="mb-2 mb-sm-0">
        <h4 class="mb-1">
          Customer ID #634759
        </h4>
        <p class="mb-0">
          Aug 17, 2020, 5:48 (ET)
        </p>
      </div>
      <button type="button" class="btn btn-label-danger delete-customer">Delete Customer</button>
    </div>
    
    
    <div class="row">
      <!-- Customer-detail Sidebar -->
      <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
        <!-- Customer-detail Card -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="customer-avatar-section">
              <div class="d-flex align-items-center flex-column">
                <img class="img-fluid rounded my-3" src="../../assets/img/avatars/12.png" height="110" width="110" alt="User avatar" />
                <div class="customer-info text-center">
                  <h4 class="mb-1">Lorine Hischke</h4>
                  <small>Customer ID #634759</small>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-around flex-wrap mt-4 py-3">
              <div class="d-flex align-items-center gap-2">
                <div class="avatar">
                  <div class="avatar-initial rounded bg-label-primary"><i class='bx bx-cart-alt bx-sm'></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-0">184</h5>
                  <span>Orders</span>
                </div>
              </div>
              <div class="d-flex align-items-center gap-2">
                <div class="avatar">
                  <div class="avatar-initial rounded bg-label-primary"><i class='bx bx-dollar bx-sm'></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-0">$12,378</h5>
                  <span>Spent</span>
                </div>
              </div>
            </div>
    
            <div class="info-container">
              <small class="d-block pt-4 border-top fw-normal text-uppercase text-muted my-3">DETAILS</small>
              <ul class="list-unstyled">
                <li class="mb-3">
                  <span class="fw-medium me-2">Username:</span>
                  <span>lorine.hischke</span>
                </li>
                <li class="mb-3">
                  <span class="fw-medium me-2">Email:</span>
                  <span>vafgot@vultukir.org</span>
                </li>
                <li class="mb-3">
                  <span class="fw-medium me-2">Status:</span>
                  <span class="badge bg-label-success">Active</span>
                </li>
                <li class="mb-3">
                  <span class="fw-medium me-2">Contact:</span>
                  <span>(123) 456-7890</span>
                </li>
    
                <li class="mb-3">
                  <span class="fw-medium me-2">Country:</span>
                  <span>USA</span>
                </li>
              </ul>
              <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit Details</a>
    
              </div>
            </div>
          </div>
        </div>
        <!-- /Customer-detail Card -->
        <!-- Plan Card -->
    
        <div class="card mb-4 bg-gradient-primary">
          <div class="card-body">
            <div class="row justify-content-between mb-3">
              <div class="col-md-12 col-lg-7 col-xl-12 col-xxl-7 text-center text-lg-start text-xl-center text-xxl-start order-1  order-lg-0 order-xl-1 order-xxl-0">
                <h4 class="card-title text-white text-nowrap">Upgrade to premium</h4>
                <p class="card-text text-white">Upgrade customer to premium membership to access pro features.</p>
              </div>
              <span class="col-md-12 col-lg-5 col-xl-12 col-xxl-5 text-center mx-auto mx-md-0 mb-2"><img src="../../assets/img/illustrations/rocket.png" class="w-px-75 m-2" alt="3dRocket"></span>
            </div>
            <button class="btn btn-white text-primary w-100 fw-medium shadow-sm" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade to premium</button>
          </div>
        </div>
    
        <!-- /Plan Card -->
      </div>
      <!--/ Customer Sidebar -->
    
    
      <!-- Customer Content -->
      <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
        <!-- Customer Pills -->
        <ul class="nav nav-pills flex-column flex-md-row mb-4">
          <li class="nav-item"><a class="nav-link" href="app-ecommerce-customer-details-overview.html"><i class="bx bx-user me-1"></i>Overview</a></li>
          <li class="nav-item"><a class="nav-link" href="app-ecommerce-customer-details-security.html"><i class="bx bx-lock-alt me-1"></i>Security</a></li>
          <li class="nav-item"><a class="nav-link" href="app-ecommerce-customer-details-billing.html"><i class="bx bx-detail me-1"></i>Address & Billing</a></li>
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i>Notifications</a></li>
        </ul>
        <!--/ Customer Pills -->
        <!-- Project table -->
        <div class="card mb-4">
          <!-- Notifications -->
          <div class="card-header">
            <h5 class="card-title mb-1">Recent Devices</h5>
            <span>Change to notification settings, the user will get the update</span>
          </div>
          <div class="card-body">
            <div class="table-responsive border rounded">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-nowrap">Type</th>
                    <th class="text-nowrap text-center">✉️ Email</th>
                    <th class="text-nowrap text-center">🖥 Browser</th>
                    <th class="text-nowrap text-center">👩🏻‍💻 App</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-nowrap">Order status</td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap">Upcoming sale</td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap">Special offers</td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                      </div>
                    </td>
                  </tr>
                  <tr class="border-transparent">
                    <td class="text-nowrap">New item arrival</td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                      </div>
                    </td>
                    <td>
                      <div class="form-check mb-0 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-body pt-0">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Discard</button>
          </div>
          <!-- /Notifications -->
        </div>
        <!-- /Project table -->
    
    
      </div>
      <!--/ Customer Content -->
    </div>
    
    <!-- Modal -->
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
              <h3>Edit User Information</h3>
              <p>Updating user details will receive a privacy audit.</p>
            </div>
            <form id="editUserForm" class="row g-3" onsubmit="return false">
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserFirstName">First Name</label>
                <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserLastName">Last Name</label>
                <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalEditUserName">Username</label>
                <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserEmail">Email</label>
                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserStatus">Status</label>
                <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                  <option selected>Status</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                  <option value="3">Suspended</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditTaxID">Tax ID</label>
                <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text">+1</span>
                  <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserLanguage">Language</label>
                <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                  <option value="">Select</option>
                  <option value="english" selected>English</option>
                  <option value="spanish">Spanish</option>
                  <option value="french">French</option>
                  <option value="german">German</option>
                  <option value="dutch">Dutch</option>
                  <option value="hebrew">Hebrew</option>
                  <option value="sanskrit">Sanskrit</option>
                  <option value="hindi">Hindi</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserCountry">Country</label>
                <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
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
              <div class="col-12">
                <label class="switch">
                  <input type="checkbox" class="switch-input">
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">Use as a billing address?</span>
                </label>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Edit User Modal -->
    
    <!-- Add New Credit Card Modal -->
    <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content p-3 p-md-5">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
              <h3>Upgrade Plan</h3>
              <p>Choose the best plan for user.</p>
            </div>
            <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
              <div class="col-sm-9">
                <label class="form-label" for="choosePlan">Choose Plan</label>
                <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                  <option selected>Choose Plan</option>
                  <option value="standard">Standard - $99/month</option>
                  <option value="exclusive">Exclusive - $249/month</option>
                  <option value="Enterprise">Enterprise - $499/month</option>
                </select>
              </div>
              <div class="col-sm-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Upgrade</button>
              </div>
            </form>
          </div>
          <hr class="mx-md-n5 mx-n3">
          <div class="modal-body">
            <h6 class="mb-0">User current plan is standard plan</h6>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex justify-content-center me-2 mt-3">
                <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                <h1 class="display-3 mb-0 text-primary">99</h1>
                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
              </div>
              <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Add New Credit Card Modal -->
    
    <!-- /Modal -->
              </div>
          

@endsection