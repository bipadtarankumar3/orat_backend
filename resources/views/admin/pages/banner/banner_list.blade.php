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
                        <button  onclick="showModalForm()" class="btn btn-secondary add-new btn-primary ms-2" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"
                            >
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
                                        <img src="{{$item->banner_image}}" alt="banner" style="width: 100px;">
                                    </td>
                                    {{-- <td>02/02/2024</td> --}}
                                    <td class="text-end">
                                        <div class="dropdown pe-3">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu" style="">
                                                {{-- <a class="dropdown-item" href="http://localhost/orat_backend/admin/order/details"><i class="bx bx-edit-alt me-1"></i> View</a> --}}
                                                <a onclick="editForm('{{$item->id}}')" class="dropdown-item" href="javascript:void(0);"><i
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
                <div class="offcanvas-body border-top" id="modal_form_box">
                    
                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')

    <script>
        function showModalForm() {
            $.ajax({
                url: "{{URL::to('admin/banner/add_banner_form_html')}}", // Replace with your listing URL
                type: 'GET',
                data:{form_id:''},
                success: function(response) {
                    // Update your listing element with the new data
                    $('#modal_form_box').html(response); // Assuming you have an element with ID listingElement
                    $('#bannerAddModal').addClass('show'); // Assuming you have an element with ID listingElement
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        function submit_form() {
            var bannerForm = $('#bannerForm')[0];
            // Create a FormData object to hold the form data
            var formData = new FormData(bannerForm);

            // Get the CSRF token from the meta tag or hidden input field
            var csrfToken = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ URL::to('admin/banner/add_banner') }}", // Replace with your submit URL
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Set the CSRF token header
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        window.location.reload();
                    } else {
                        alert("There was an issue with the submission.");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error('Error:', error);
                }
            });
        }

    
        function editForm(form_id) {
            $.ajax({
                url: "{{URL::to('admin/banner/edit_banner')}}", // Replace with your listing URL
                type: 'GET',
                data:{form_id:form_id},
                success: function(response) {
                    // Update your listing element with the new data
                    $('#modal_form_box').html(response); // Assuming you have an element with ID listingElement
                    $('#bannerAddModal').addClass('show'); // Assuming you have an element with ID listingElement
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    
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
    </script>

<script>
    $(document).ready(function() {
        $('#modal_form_box #bannerForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            
        });
    
       
    });

    
    </script>
    
@endsection
