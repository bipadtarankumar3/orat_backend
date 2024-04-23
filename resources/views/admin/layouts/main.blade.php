<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 16:42:16 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ORAT | Admin</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/css/demo.css')}}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/typeahead-js/typeahead.css')}}" /> 
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/apex-charts/apex-charts.css')}}" />

    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/quill/typography.css')}}">
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/quill/katex.css')}}">
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/quill/editor.css')}}">
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/flatpickr/flatpickr.css')}}">
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/tagify/tagify.css')}}" />


    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/libs/select2/select2.css')}}">


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/admin/vendor/css/pages/card-analytics.css')}}" />

    <!-- Helpers -->
    <script src="{{ URL::to('public/assets/admin/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{ URL::to('public/assets/admin/vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ URL::to('public/assets/admin/js/config.js')}}"></script>
    
</head>

<body>


  <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->
            @include('admin.layouts.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
            
                <!-- Navbar -->

                    @include('admin.layouts.validation')
                    @include('admin.layouts.header')
                
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                        @yield('content')
                    
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->
                    
                    <div class="content-backdrop fade"></div>
                </div>
                    <!-- Content wrapper -->
            </div>
                <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        
        
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
        
    </div>
  <!-- / Layout wrapper -->
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="{{ URL::to('public/assets/admin/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/libs/i18n/i18n.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/libs/typeahead-js/typeahead.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/vendor/js/menu.js')}}"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ URL::to('public/assets/admin/vendor/libs/apex-charts/apexcharts.js')}}"></script>



    <script src="{{ URL::to('public/assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/select2/select2.js')}}"></script>

    <script src="{{ URL::to('public/assets/admin/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/quill/quill.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/dropzone/dropzone.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <script src="{{ URL::to('public/assets/admin/vendor/libs/tagify/tagify.js')}}"></script>



  <!-- Main JS -->
  <script src="{{ URL::to('public/assets/admin/js/main.js')}}"></script>
  

  <!-- Page JS -->
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-dashboard.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-product-list.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-product-add.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-customer-all.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-order-list.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-customer-all.js')}}"></script>

  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-order-details.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/modal-add-new-address.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/modal-edit-user.js')}}"></script>

  <script src="{{ URL::to('public/assets/admin/js/app-ecommerce-reviews.js')}}"></script>
  <script src="{{ URL::to('public/assets/admin/js/extended-ui-star-ratings.js')}}"></script>
  

  <script>
    var datatables = $(".datatables-table").DataTable();
  </script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 16:43:08 GMT -->
</html>

<!-- beautify ignore:end -->

