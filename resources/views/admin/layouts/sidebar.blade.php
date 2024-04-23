<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
    <div class="app-brand demo ">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
  
            <img src="{{URL::to('public/assets/admin/img/logo_1.png')}}" width="100%" alt="">
  
        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    
    
    <ul class="menu-inner py-1">

 
        <li class="menu-item">
            <a href="{{URL::to('admin/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          
          <i class="menu-icon tf-icons bx bx-cart-alt"></i>
          <div class="text-truncate" data-i18n="Products">Products</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{URL::to('admin/product/list')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Product List">Product List</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('admin/product/add')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Add Product">Add Product</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('admin/product/category')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Category List">Category List</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-food-menu"></i>
          <div class="text-truncate" data-i18n="Order">Order</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{URL::to('admin/order/list')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Order List">Order List</div>
            </a>
          </li>
          {{-- <li class="menu-item">
            <a href="{{URL::to('admin/order/details')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Order Details">Order Details</div>
            </a>
          </li> --}}
          
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
          <div class="text-truncate" data-i18n="Customer">Customer</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{URL::to('admin/customer/list')}}" class="menu-link">
              <div class="text-truncate" data-i18n="All Customers">All Customers</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div class="text-truncate" data-i18n="Customer Details">Customer Details</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{URL::to('admin/customer/overview')}}" class="menu-link">
                  <div class="text-truncate" data-i18n="Overview">Overview</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{URL::to('admin/customer/security')}}" class="menu-link">
                  <div class="text-truncate" data-i18n="Security">Security</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{URL::to('admin/customer/address_and_billing')}}" class="menu-link">
                  <div class="text-truncate" data-i18n="Address & Billing">Address & Billing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{URL::to('admin/customer/notification')}}" class="menu-link">
                  <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                </a>
              </li>

            </ul>
          </li>
          
        </ul>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/review/list')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
          <div class="text-truncate" data-i18n="Manage Reviews">Manage Reviews</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/referral/list')}}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-book-open'></i>
          <div class="text-truncate" data-i18n="Referrals">Referrals</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/setting/store')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-cart-alt"></i>
          <div class="text-truncate" data-i18n="Store Details">Store Details</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/setting/pyments')}}" class="menu-link">
            <i class='menu-icon bx bxs-credit-card-alt'></i>
          <div class="text-truncate" data-i18n="Payments">Payments</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/setting/checkout')}}" class="menu-link">
            <i class='menu-icon bx bx-hotel'></i>
          <div class="text-truncate" data-i18n="Checkout">Checkout</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/setting/shipping_and_delivery')}}" class="menu-link">
            <i class='menu-icon bx bx-store'></i>
          <div class="text-truncate" data-i18n="Shipping & Delivery">Shipping & Delivery</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{URL::to('admin/setting/location')}}" class="menu-link">
            <i class='menu-icon  bx bx-current-location'></i>
          <div class="text-truncate" data-i18n="Locations">Locations</div>
        </a>
      </li>

      {{-- <li class="menu-item">
        <a href="app-email.html" class="menu-link">
            <i class='menu-icon bx bx-bell-plus'></i>
          <div class="text-truncate" data-i18n="Notifications">Notifications</div>
        </a>
      </li> --}}


    </ul>
    
    
  
  </aside>