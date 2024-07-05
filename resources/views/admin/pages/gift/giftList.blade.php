@extends('admin.layouts.main')

@section('content')




<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">eCommerce /</span> Gift List
    </h4>
    
    <div class="app-ecommerce-category">
      <!-- Category List Table -->
      <div class="card">
        <div class="row my-4">
          <div class="col-md-12 float-right text-right" style="text-align: right">
             <button  onclick="showModalForm()"  class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas">
              <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Gift</span>
            </button>
          </div>
        </div>
       
        <div class="card-datatable table-responsive">
          <table class="datatables-table table border-top">
            <thead>
              <tr>
                <th></th>
                <th>Title</th>
                <th>Image</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Price</th>
                <th>Gift card Code</th>
                <th class="text-lg-center">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($list as $key=> $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        <img src="{{URL::to($item->file)}}" alt="category" style="width: 100px;">
                    </td>
                    <td>{{$item->short_desc}}</td>
                    <td>{{$item->long_desc}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->gift_card_code	}}</td>
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
                                <a class="dropdown-item" href="{{ URL::to('admin/gift/delete_gift', $item->id) }}" onclick="deleteConfirmationGet(event)">
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
      <div class="offcanvas offcanvas-end" tabindex="-1" id="addModal" aria-labelledby="addModalLabel">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-4">
          <h5 id="addModalLabel" class="offcanvas-title">Add Gift Card</h5>
          <button  onclick="closeModal('addModal')"  type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                url: "{{URL::to('admin/gift/add_gift_form_html')}}", // Replace with your listing URL
                type: 'GET',
                data:{form_id:''},
                success: function(response) {
                    // Update your listing element with the new data
                    $('#modal_form_box').html(response); // Assuming you have an element with ID listingElement
                    $('#addModal').addClass('show'); // Assuming you have an element with ID listingElement
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        function closeModal(modalId) {
            $('#'+modalId).removeClass('show');
        }

        function submit_form() {
            var giftForm = $('#giftForm')[0];
            // Create a FormData object to hold the form data
            var formData = new FormData(giftForm);

            // Get the CSRF token from the meta tag or hidden input field
            var csrfToken = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ URL::to('admin/gift/add_gift') }}", // Replace with your submit URL
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
                url: "{{URL::to('admin/gift/edit_gift')}}", // Replace with your listing URL
                type: 'GET',
                data:{form_id:form_id},
                success: function(response) {
                    // Update your listing element with the new data
                    $('#modal_form_box').html(response); // Assuming you have an element with ID listingElement
                    $('#addModal').addClass('show'); // Assuming you have an element with ID listingElement
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

    </script>
    
@endsection