@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Payment Report</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Payment Date</label>
                <input type="date" name="payment_date" id="payment_date" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Payment Mode</label>
                <select name="payment_mode" id="payment_mode" class="form-control">
                    <option value="">All Modes</option>
                    <option value="online">Online</option>
                    <option value="cash">Cash</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Status</label>
                <select name="payment_status" id="payment_status" class="form-control">
                    <option value="">All Statuses</option>
                    <option value="paid">Paid</option>
                    <option value="due">Due</option>
                    <option value="partially_paid">Partially Paid</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-info" onclick="fetchPaymentReport()">Search</button>
        </div>
    </div>
    <div class="app-ecommerce-category">
        <!-- Payment Report Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-table table border-top">
                    <thead>
                        <tr>
                            <th>Payment Date</th>
                            <th>Payment Mode</th>
                            <th>Status</th>
                            <th>Amount Due</th>
                        </tr>
                    </thead>
                    <tbody id="payment_report_body">
                        <!-- Dummy data for demonstration -->
                        <tr>
                            <td>2024-04-15</td>
                            <td>Online</td>
                            <td>Paid</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>2024-04-16</td>
                            <td>Cash</td>
                            <td>Partially Paid</td>
                            <td>$50.00</td>
                        </tr>
                        <!-- Add more rows for additional dummy data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function fetchPaymentReport() {
        // Dummy function for fetching payment report data
        // For demonstration purposes, we will not perform any actual data fetching in this example
        // Instead, we'll just display the dummy data already provided in the table
        // You can replace this with actual AJAX request to your backend to fetch real data
        console.log("Fetching payment report data...");
    }
</script>
@endsection
