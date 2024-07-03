@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span> Banner List
        </h4>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="row my-4">
                    <div class="col-md-12 float-right text-right" style="text-align: right">
                        <button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#bannerAddModal">
                            <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Banner</span>
                        </button>
                    </div>
                </div>

                <div class="card-datatable table-responsive">
                    <table class="datatables-table table border-top">
                        <thead>
                            <tr>
                                <th>SL.No.</th>
                                {{-- <th>Status</th> --}}
                                <th >Banner</th>
                                {{-- <th >Added Date</th> --}}
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Banner as $key=> $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    {{-- <td>Active</td> --}}
                                    <td>
                                        <img src="{{URL::to('public/upload/'.$item->banner_image)}}" alt="banner" style="width: 100px;">
                                    </td>
                                    {{-- <td>02/02/2024</td> --}}
                                    <td class="text-end">
                                        <div class="dropdown pe-3">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu" style="">
                                                {{-- <a class="dropdown-item" href="http://localhost/orat_backend/admin/order/details"><i class="bx bx-edit-alt me-1"></i> View</a> --}}
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ URL::to('admin/banner/delete', $item->id) }}" onclick="deleteConfirmationGet(event)">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bannerAddModal"
                aria-labelledby="bannerAddModalLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                    <h5 id="bannerAddModalLabel" class="offcanvas-title">Add Banner</h5>
                    <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="bannerForm" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="banner_id" id="banner_id" value="">
                        <div class="mb-3">
                            <label class="form-label" for="document">Banner</label>
                            <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn bg-label-danger"
                                data-bs-dismiss="offcanvas">Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')
<script>
    $(document).ready(function() {
        $('#bannerForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            // Create a FormData object to hold the form data
            var formData = new FormData(this);
    
            // Get the CSRF token from the meta tag or hidden input field
            var csrfToken = $('input[name="_token"]').val();
    
            $.ajax({
                url: "{{URL::to('admin/banner/add_banner')}}", // Replace with your submit URL
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Set the CSRF token header
                },
                success: function(response) {

                    if (response.success == true) {
                            alert(response.message);
                            window.location.reload();
                    } else {
                        alert("There have some issue");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error('Error:', error);
                }
            });
        });
    
        function refreshListing() {
            $.ajax({
                url: '/your-listing-url', // Replace with your listing URL
                type: 'GET',
                success: function(response) {
                    // Update your listing element with the new data
                    $('#listingElement').html(response); // Assuming you have an element with ID listingElement
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    });
    </script>
    
@endsection
