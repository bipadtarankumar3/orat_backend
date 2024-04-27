@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Exhibition Expense</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-6">
            <h5>Travel Expenses</h5>
            <ul>
                <li>Flight - $500</li>
                <li>Bus - $100</li>
                <li>Taxi - $50</li>
            </ul>
            <h5>Accommodation Expenses</h5>
            <ul>
                <li>Hotel XYZ - $700</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Food Expenses</h5>
            <ul>
                <li>Breakfast - $20</li>
                <li>Lunch - $30</li>
                <li>Dinner - $40</li>
            </ul>
            <h5>Other Expenses</h5>
            <ul>
                <li>Currier - $50</li>
                <li>Fabrication - $200</li>
                <li>Miscellaneous - $100</li>
            </ul>
        </div>
    </div>
</div>

@endsection
