@extends('admin.layouts.main')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Create Exhibition Users</span>
    </h4>
    <div class="row my-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="Alice Smith">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" value="123-456-7890">
            </div>
            <!-- Add other fields with dummy content -->
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" value="A123456">
            </div>
            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control" value="alice.smith">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" value="********">
            </div>
            <div class="form-group">
                <label for="">Assign to exhibition</label>
                <select class="form-control">
                    <option>Art Expo 2024</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select class="form-control">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
            <button class="btn btn-primary">Create User</button>
        </div>
    </div>
</div>

@endsection
