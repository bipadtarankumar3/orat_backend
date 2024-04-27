@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Sales Report</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Form Date</label>
                <input type="date" name="form_date" id="" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">To Date</label>
                <input type="date" name="to_date" id="" class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-info">Search</button>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="app-ecommerce-category">
        <!-- Sales Report Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-table table border-top">
                    <thead>
                        <tr>
                            <th>Sale Date</th>
                            <th>Sale Location</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual sales data from the database -->
                        <tr>
                            <td>2024-04-15</td>
                            <td>New York</td>
                            <td>Product A</td>
                            <td>$50.00</td>
                            <td>$100.00</td>
                        </tr>
                        <tr>
                            <td>2024-04-15</td>
                            <td>Los Angeles</td>
                            <td>Product B</td>
                            <td>$30.00</td>
                            <td>$90.00</td>
                        </tr>
                        <!-- Add more rows for additional sales data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection


