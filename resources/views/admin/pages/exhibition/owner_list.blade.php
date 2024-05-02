@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span>Exhibition Owner
        </h4>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">

                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="Travel-tab" data-bs-toggle="tab" data-bs-target="#Travel" type="button" role="tab" aria-controls="Travel" aria-selected="true">Travel</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Hotel-tab" data-bs-toggle="tab" data-bs-target="#Hotel" type="button" role="tab" aria-controls="Hotel" aria-selected="false">Hotel</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Food-tab" data-bs-toggle="tab" data-bs-target="#Food" type="button" role="tab" aria-controls="Food" aria-selected="false">Food</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Fees-tab" data-bs-toggle="tab" data-bs-target="#Fees" type="button" role="tab" aria-controls="Fees" aria-selected="false">Fees</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Commission-tab" data-bs-toggle="tab" data-bs-target="#Commission" type="button" role="tab" aria-controls="Commission" aria-selected="false">Commission</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Travel" role="tabpanel" aria-labelledby="Travel-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Travel date</th>
                                            <th>Travel mode</th>
                                            <th>Flight Number</th>
                                            <th>Expense Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10/12/2023</td>
                                            <td>Flight</td>
                                            <td>4342</td>
                                            <td>₹10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Hotel" role="tabpanel" aria-labelledby="Hotel-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Hotel Name</th>
                                            <th>Check In date</th>
                                            <th>Checkout Date</th>
                                            <th>Room Type</th>
                                            <th>Expense Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TAJ Hotel</td>
                                            <td>10/12/2023</td>
                                            <td>15/12/2023</td>
                                            <td>Delux</td>
                                            <td>₹10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Food" role="tabpanel" aria-labelledby="Food-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Date</th>
                                            <th>Food Name</th>
                                            <th>Food Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10/12/2023</td>
                                            <td>Apple</td>
                                            <td>₹100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Fees" role="tabpanel" aria-labelledby="Fees-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Amount</th>
                                            <th>Payment mode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>₹1000</td>
                                            <td>Cash</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Commission" role="tabpanel" aria-labelledby="Commission-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Amount</th>
                                            <th>Payment date</th>
                                            <th>Payment mode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>₹1000</td>
                                            <td>10/04/2024</td>
                                            <td>Cash</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                </div>

                
            </div>
            
        </div>

    </div>

    <script>

    
        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "d-m-yy"
            }).val()
    
        });
    </script>
@endsection
