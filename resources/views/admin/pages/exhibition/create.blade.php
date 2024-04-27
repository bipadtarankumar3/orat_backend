@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Create Exhibition</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Exhibition Name</label>
                <input type="text" class="form-control" value="Art Expo 2024">
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input type="text" class="form-control" value="New York City">
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" value="2024-06-15">
            </div>
            <button class="btn btn-primary">Create Exhibition</button>
        </div>
    </div>
</div>

@endsection
