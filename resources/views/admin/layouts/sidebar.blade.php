<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="{{ URL::to('admin/dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">

                <img src="{{ URL::to('public/assets/admin/img/logo_1.png') }}" width="100%" height="20px" alt="">

            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">


        <li class="menu-item">
            <a href="{{ URL::to('admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-copy-alt'></i>
                <div class="text-truncate" data-i18n="Banner">Banner</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/banner/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Banner List">Banner List</div>
                    </a>
                </li>
              

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-copy-alt'></i>
                <div class="text-truncate" data-i18n="Category">Category</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/category') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Category List">Category List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/sub_category') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Sub Category Lists">Sub Category List</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">

                <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                <div class="text-truncate" data-i18n="Products">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/designer') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Product List">Designer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/type') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Product List">Product Type</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Product List">Product List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/add') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Add Product">Add Product</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/size') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Add Product">Size</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/product/color') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Add Product">Color</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="{{ URL::to('admin/product/product_price') }}" class="menu-link">
                <i class='menu-icon bx bx-rupee'></i>
                <div class="text-truncate" data-i18n="Price Management">Price Management</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="User Management">User Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/customer/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="All Customers">All Customers</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate" data-i18n="Orders">Orders</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/order/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Order List">Order List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/order/status') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Order Status">Order Status</div>
                    </a>
                </li>
            </ul>
        </li>



        <li class="menu-item">
            <a href="{{ URL::to('admin/payment/list') }}" class="menu-link">
                <i class='menu-icon bx bx-stopwatch'></i>
                <div class="text-truncate" data-i18n="Payment histories">Payment histories</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ URL::to('admin/gift/list') }}" class="menu-link">
                <i class='menu-icon bx bx-gift'></i>
                <div class="text-truncate" data-i18n="Gift Card">Gift Cards</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ URL::to('admin/product/inventory') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate" data-i18n="Inventory Management">Inventory Management</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ URL::to('admin/invoice/list') }}" class="menu-link">
                <i class='menu-icon bx bx-receipt'></i>
                <div class="text-truncate" data-i18n="Invoice">Invoice</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ URL::to('admin/discount/list') }}" class="menu-link">
                <i class='menu-icon bx bxs-shopping-bags'></i>
                <div class="text-truncate" data-i18n="Coupon">Coupon</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ URL::to('admin/query/list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate" data-i18n="Query Management">Query Management</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ URL::to('admin/review/list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate" data-i18n="Review Management">Review Management</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate" data-i18n="Reports">Reports</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/reports/sales') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Sales Report">Sales Report</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/reports/product') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Product reports">Product reports</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/reports/payment') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Payment report ">Payment report</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate" data-i18n="Exhibition">Exhibition</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/exhibition/inventory') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Inventory Management">Inventory Management</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/exhibition/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Exhibition">Exhibition</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/exhibition/query') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Exhibition Query">Exhibition Query </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ URL::to('admin/exhibition/user/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n=" Exhibition User List"> Exhibition User List</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ URL::to('admin/exhibition/sales/list') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Exhibition Sales"> Exhibition Sales</div>
                    </a>
                </li>

                <li class="menu-item" style="">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Exhibition Expense">Exhibition Expense</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ URL::to('admin/exhibition/model') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Model">Model</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ URL::to('admin/exhibition/staff') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Staff">Staff</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ URL::to('admin/exhibition/owner') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Owner">Owner</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ URL::to('admin/exhibition/others') }}" class="menu-link">
                                <div class="text-truncate" data-i18n="Others">Others</div>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate" data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ URL::to('admin/setting/profile') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Admin profile">Profile</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
            <a href="{{URL::to('admin/setting/roles')}}" class="menu-link">
              <div class="text-truncate" data-i18n="Roles management ">Roles management </div>
            </a>
          </li> --}}
                <li class="menu-item">
                    <a href="{{ URL::to('admin/setting/cms') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="CMS ">CMS</div>
                    </a>
                </li>

            </ul>
        </li>

        {{-- <li class="menu-item">
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
      </li> --}}

        {{-- <li class="menu-item">
        <a href="app-email.html" class="menu-link">
            <i class='menu-icon bx bx-bell-plus'></i>
          <div class="text-truncate" data-i18n="Notifications">Notifications</div>
        </a>
      </li> --}}


    </ul>



</aside>
