@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Exhibition Sales</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-6">
            <h5>Sales Summary</h5>
            <p>Total Sales: $10,000</p>
            <p>Total Orders: 50</p>
        </div>
        <div class="col-md-6">
            <h5>Recent Orders</h5>
            <ul>
                <li>Order #1 - Product A - $200</li>
                <li>Order #2 - Product B - $150</li>
                <li>Order #3 - Product C - $300</li>
                <!-- Add more dummy orders as needed -->
            </ul>
        </div>
    </div>
</div>

@endsection
