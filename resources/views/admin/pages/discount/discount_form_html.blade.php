<form class="pt-0" id="discountForm">
    @csrf
    <input type="hidden" name="edit_id" id="edit_id" value="{{isset($form_id)?$form_id:''}}">

    <!-- Title -->
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Coupon Name</label>
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon Name"  value="{{isset($form_id)?$editData->coupon_name:''}}" name="coupon_name" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Create coupon code</label>
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter coupon code"  value="{{isset($form_id)?$editData->coupon_code:''}}" name="coupon_code" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Coupon Limit</label>
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon Limit"  value="{{isset($form_id)?$editData->coupon_limit:''}}" name="coupon_limit" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Coupon type</label>
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Coupon type"  value="{{isset($form_id)?$editData->coupon_type:''}}" name="coupon_type" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Discount</label>
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Discount"  value="{{isset($form_id)?$editData->discount:''}}" name="discount" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">Start Date</label>
      <input type="date" class="form-control" id="ecommerce-category-title" placeholder="Enter Start Date"  value="{{isset($form_id)?$editData->start_date:''}}" name="start_date" aria-label="category title">
    </div>
    <div class="mb-3">
      <label class="form-label" for="ecommerce-category-title">End Date</label>
      <input type="date" class="form-control" id="ecommerce-category-title" placeholder="Enter End Date"  value="{{isset($form_id)?$editData->end_date:''}}" name="end_date" aria-label="category title">
    </div>
  
    <div class="mb-4 ecommerce-select2-dropdown">
        <label class="form-label">Select status</label>
        <select name="status" id="ecommerce-status" class="select2 form-select"
            data-placeholder="Select status">
            <option value="">Select status</option>
            <option value="publish" @if(isset($form_id)) @if($editData->status == 'publish') selected @endif @endif>Publish</option>
            <option value="inactive" @if(isset($form_id)) @if($editData->status == 'inactive') selected @endif @endif>Inactive</option>
        </select>
    </div>
    <!-- Submit and reset -->
    <div class="mb-3">
      <button  type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
      <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
    </div>
  </form>