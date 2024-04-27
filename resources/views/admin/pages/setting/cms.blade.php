@extends('admin.layouts.main')

@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Account Settings /</span> CMS
    </h4>
    
    <div class="row">
      <div class="col-md-12">
        {{-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"><a class="nav-link" href="pages-account-settings-account.html"><i class="bx bx-user me-1"></i> Account</a></li>
          <li class="nav-item"><a class="nav-link" href="pages-account-settings-security.html"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
          <li class="nav-item"><a class="nav-link" href="pages-account-settings-billing.html"><i class="bx bx-detail me-1"></i> Billing & Plans</a></li>
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Notifications</a></li>
          <li class="nav-item"><a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
        </ul> --}}
        <div class="card">
          <!-- Notifications -->
          <h5 class="card-header">Home Page Access</h5>

          <div class="table-responsive">
            <table class="table table-striped table-borderless border-bottom">
              <thead>
                <tr>
                  <th class="text-nowrap">Type</th>
                  <th class="text-nowrap text-center">Show/Hide</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap">Header</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                    </div>
                  </td>
                  
                </tr>
                <tr>
                  <td class="text-nowrap">Banner</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck1"  />
                    </div>
                  </td>
                  
                </tr>
                
              </tbody>
            </table>
          </div>
          <div class="card-body">
            <form action="javascript:void(0);">
              <div class="row">
                
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                  <button type="reset" class="btn btn-label-secondary">Discard</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /Notifications -->
        </div>
      </div>
    </div>
    
    
              </div>

@endsection