@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span>Exhibition Expenses
        </h4>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="row my-4">
                    <div class="col-md-12 float-right text-right" style="text-align: right">
                        <button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasEcommerceCategoryList">
                            <span><i class="bx bx-plus me-0 me-sm-1"></i>Add Expenses</span>
                        </button>
                    </div>
                </div>

                <div class="card-datatable table-responsive">
                    <table class="datatables-table table border-top">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Expenses Name</th>
                                <th>Price</th>
                                <th>Date</th>

                                <th class="text-lg-center">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
                aria-labelledby="offcanvasEcommerceCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                    <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Expenses</h5>
                    <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Select User </label>
    
                                    <select name="loan_employee_id" class="form-control select2-multiple"
                                        onchange="getEmployeeDetails(this.value)">
                                        <option value="">Select</option>
                                        <option value="">Demo1</option>
                                        <option value="">DEmo2</option>
                                        <option value="">Select</option>
                                      
    
    
                                    </select>
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wag_employee_designation">Employee designation</label>
                                    <input type="text" class="form-control" name="loan_employee_designation"
                                        id="employee_designation" placeholder="Employee designation" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="dynimic_field">
                            <div class="row">
    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="expense_type">Expenses Status</label>
                                        <select name="expense_type[]" class="form-control select2-multiple">
                                            <option value="RENT-WORKSHOP">Food</option>
                                            <option value="RENT-STAFF-ACCOMODATION">Travel</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" name="price[]" placeholder="Price " />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="expense_date">Date</label>
                                        <input type="text" class="form-control" name="expense_date[]" id="datepicker"
                                            placeholder="Expance Date " />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a class="extra-fields-contact-number" href="#" onclick="add_more()">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        function add_more() {
            var html = `
                    <div class="row mt-4">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="expense_type">Expenses Status</label>
                                        <select name="expense_type[]" class="form-control select2-multiple">
                                            <option value="RENT-WORKSHOP">Food</option>
                                            <option value="RENT-STAFF-ACCOMODATION">Travel</option>
                                           
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price[]" placeholder="Price " />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="expense_date">Date</label>
                                    <input type="text" class="form-control datepicker" name="expense_date[]" 
                                        placeholder="Expance Date " />
                                </div>
                            </div>
                        <div class="col-md-2">
                            
                                <i class="fa fa-trash" style="color:red;" onclick="remove(this)" aria-hidden="true"></i>
                            
                        </div>
                    </div>
                `;
            $('.dynimic_field').append(html);
            $(".datepicker").datepicker({
                dateFormat: "d-m-yy"
            }).val()
            $('.select2-multiple').select2({
                theme: "classic"
            });
           
        }
    
        function remove(element) {
            // Find the closest parent row and remove it
            $(element).closest('.row').remove();
        }
    
    
    
        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "d-m-yy"
            }).val()
    
        });
    </script>
@endsection
