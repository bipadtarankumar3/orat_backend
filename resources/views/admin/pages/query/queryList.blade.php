@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce / </span>Product Query
        </h4>


        <!-- review List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-table table">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Customer</th>
                            <th >Conatct No</th>
                            <th>Email Id</th>
                            <th>Product Name</th>
                            <th>Contact Pref.</th>
                            <th>Massage</th>
                            <th>Placed Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Demo</td>
                            <td>9933225566</td>
                            <td>demo@mail.com</td>
                            <td>Pajama</td>
                            <td>email</td>
                            <td>demo review</td>
                            <td>02/02/2024</td>
                          
                            <td class="text-end">
                                <div class="dropdown pe-3">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu" style="">
                                        {{-- <a class="dropdown-item" href="http://localhost/orat_backend/admin/order/details"><i class="bx bx-edit-alt me-1"></i> View</a> --}}
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
