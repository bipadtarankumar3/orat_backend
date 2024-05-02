@extends('admin.layouts.main')

@section('content')
<style>
    /* CSS for dummy graphs */
.dummy-graph-container {
    display: flex;
    align-items: flex-end;
    height: 200px;
}

.dummy-bar {
    width: 20px;
    background-color: #007bff; /* Blue color for bars */
    margin-right: 5px;
}

.dummy-pie-chart {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.dummy-slice {
    position: absolute;
    width: 100px;
    height: 100px;
    clip: rect(0, 50px, 100px, 0);
    border-radius: 50%;
    background-color: #007bff; /* Blue color for slices */
}

.dummy-slice:nth-child(1) {
    transform: rotate(0deg);
    clip: rect(0, 50px, 100px, 0);
}

.dummy-slice:nth-child(2) {
    transform: rotate(120deg);
    clip: rect(0, 100px, 100px, 50px);
}

.dummy-slice:nth-child(3) {
    transform: rotate(240deg);
    clip: rect(0, 100px, 100px, 50px);
}

</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Product Report</span>
    </h4>
    <div class="row my-4">
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
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Sort by location</label>
                <select name="location" id="location" class="form-control">
                    <option value="">All Locations</option>
                    <option value="New York">New York</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <!-- Add more options for other locations -->
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-info" onclick="fetchProductReport()">Search</button>
        </div>
    </div>
    <div class="app-ecommerce-category">
        <!-- Product Report Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-table table border-top">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Total Quantity Sold</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody id="product_report_body">
                        <!-- Dummy data for demonstration -->
                        <tr>
                            <td>Product A</td>
                            <td>50</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>Product B</td>
                            <td>30</td>
                            <td>Los Angeles</td>
                        </tr>
                        <!-- Add more rows for additional dummy data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Dummy graph views -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Graph View 1
                </div>
                <div class="card-body">
                    <!-- Dummy graph content using HTML and CSS -->
                    <div class="dummy-graph-container">
                        <div class="dummy-bar" style="height: 80%;"></div>
                        <div class="dummy-bar" style="height: 50%;"></div>
                        <div class="dummy-bar" style="height: 70%;"></div>
                        <!-- Add more bars for additional data points -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Graph View 2
                </div>
                <div class="card-body">
                    <!-- Dummy graph content using HTML and CSS -->
                    <div class="dummy-pie-chart">
                        <div class="dummy-slice"></div>
                        <div class="dummy-slice"></div>
                        <div class="dummy-slice"></div>
                        <!-- Add more slices for additional data points -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
