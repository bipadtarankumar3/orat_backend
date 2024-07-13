<form class="pt-0" id="categoryForm">
    @csrf
    <input type="hidden" name="edit_id" id="edit_id" value="{{isset($form_id)?$form_id:''}}">
    <!-- Title -->
    <div class="mb-3">
        <label class="form-label" for="ecommerce-category-title">Title</label>
        <input type="text" value="{{isset($form_id)?$editData->title:''}}"  class="form-control" id="ecommerce-category-title"
            placeholder="Enter category title" name="title" aria-label="category title">
    </div>

    <!-- Image -->
    <div class="mb-3">
        <label class="form-label" for="document">Icon</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
        @if (isset($form_id))
        <img src="{{URL::to($editData->icon)}}" alt="icon" style="width: 100px;">
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumbnail">Thumbnail</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="thumbnail" name="thumbnail">
        @if (isset($form_id))
        <img src="{{URL::to($editData->image)}}" alt="banner" style="width: 100px;">
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label" for="cover">Cover</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="cover" name="cover">
        @if (isset($form_id))
        <img src="{{URL::to($editData->image)}}" alt="banner" style="width: 100px;">
        @endif
    </div>


    <!-- Status -->
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
        <button type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
        <button type="reset" class="btn bg-label-danger"
            data-bs-dismiss="offcanvas">Discard</button>
    </div>
</form>