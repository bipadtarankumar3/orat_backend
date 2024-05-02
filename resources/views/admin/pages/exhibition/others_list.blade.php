@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span>Exhibition Model
        </h4>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">

                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="Stall-tab" data-bs-toggle="tab" data-bs-target="#Stall" type="button" role="tab" aria-controls="Stall" aria-selected="true">Stall</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Currier-tab" data-bs-toggle="tab" data-bs-target="#Currier" type="button" role="tab" aria-controls="Currier" aria-selected="false">Currier</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Fabrication-tab" data-bs-toggle="tab" data-bs-target="#Fabrication" type="button" role="tab" aria-controls="Fabrication" aria-selected="false">Fabrication</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Misc-tab" data-bs-toggle="tab" data-bs-target="#Misc" type="button" role="tab" aria-controls="Misc" aria-selected="false">Misc Expenses</button>
                        </li>
                      
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Stall" role="tabpanel" aria-labelledby="Stall-tab">
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
                        <div class="tab-pane fade" id="Currier" role="tabpanel" aria-labelledby="Currier-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Currier Company Name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Curr Express</td>
                                            <td>₹10000</td>
                                            <td>10/12/2023</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Fabrication" role="tabpanel" aria-labelledby="Fabrication-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Items</th>
                                            <th>Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Febb</td>
                                            <td>₹100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Misc" role="tabpanel" aria-labelledby="Misc-tab">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-table table border-top">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Expense Details</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Attachment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <p>Lorem Ifsum</p>
                                            </td>
                                            <td>₹1000</td>
                                            <td>10/02/2024</td>
                                            <td>
                                                <a href="">My File</a>
                                            </td>
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
