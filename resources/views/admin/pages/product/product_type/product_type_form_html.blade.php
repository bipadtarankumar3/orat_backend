<form class="pt-0" id="categoryForm">
    @csrf
    <input type="hidden" name="edit_id" id="edit_id" value="{{isset($form_id)?$form_id:''}}">
    <!-- Title -->
    <div class="mb-3">
        <label class="form-label" for="ecommerce-category-title">Name</label>
        <input type="text" value="{{isset($form_id)?$editData->name:''}}"  class="form-control" id="ecommerce-category-title"
            placeholder="Enter category title" name="name" aria-label="Product Type  Name">
    </div>

    <!-- Submit and reset -->
    <div class="mb-3">
        <button type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
        <button type="reset" class="btn bg-label-danger"
            data-bs-dismiss="offcanvas">Discard</button>
    </div>
</form>