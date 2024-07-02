@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span>Exhibition Staff
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
                                        @foreach ($ExhibitionTravel as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->travel_mode}}</td>
                                            <td>{{$item->flight_number}}</td>
                                            <td>₹{{$item->expenses_cost}}</td>
                                        </tr>
                                        @endforeach
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
                                        @foreach ($ExhibitionHotel as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->hotel_name}}</td>
                                            <td>{{$item->checkin}}</td>
                                            <td>{{$item->checkout}}</td>
                                            <td>{{$item->room_type}}</td>
                                            <td>₹{{$item->expenses_cost}}</td>
                                        </tr>
                                        @endforeach
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
                                        @foreach ($ExhibitionFood as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->food_name}}</td>
                                            <td>₹{{$item->expenses_cost}}</td>
                                        </tr>
                                        @endforeach
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
                                            <th>Payment Date</th>
                                            <th>Amount</th>
                                            <th>Payment mode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ExhibitionFees as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->payment_date}}</td>
                                            <td>₹{{$item->payment_amount}}</td>
                                            
                                            <td>{{$item->payment_mode}}</td>
                                        </tr>
                                        @endforeach
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
                                            <th>Date</th>
                                            <th>Travel Mode</th>
                                            <th>Flight Number</th>
                                            <th>Expense Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ExhibitionCommission as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->travel_mode}}</td>
                                            
                                            <td>{{$item->flight_number}}</td>
                                            <td>₹{{$item->expenses_cost}}</td>
                                        </tr>
                                        @endforeach
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
