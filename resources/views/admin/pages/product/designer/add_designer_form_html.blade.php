<form class="pt-0" id="designerForm">
    @csrf
    <input type="hidden" name="edit_id" id="edit_id" value="{{isset($form_id)?$form_id:''}}">
    <!-- Title -->
    <div class="mb-3">
        <label class="form-label" for="ecommerce-designer-title">Title</label>
        <input type="text" value="{{isset($form_id)?$editData->designer_name:''}}"  class="form-control" id="ecommerce-designer-title"
            placeholder="Enter designer title" name="designer_name" aria-label="designer title">
    </div>
    <div class="mb-3">
        <label class="form-label" for="ecommerce-designer-title">Description</label>
        <input type="text" value="{{isset($form_id)?$editData->designer_description:''}}"  class="form-control" id="ecommerce-designer-title"
            placeholder="Enter designer title" name="designer_description" aria-label="Designer Description">
    </div>

    <!-- Image -->
    <div class="mb-3">
        <label class="form-label" for="document">Designer thumbnail</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
        @if (isset($form_id))
        <img src="{{URL::to($editData->designer_thumbnail)}}" alt="banner" style="width: 100px;">
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label" for="designer_cover">Cover</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="designer_cover" name="designer_cover">
        @if (isset($form_id))
        <img src="{{URL::to($editData->designer_cover)}}" alt="banner" style="width: 100px;">
        @endif
    </div>


    <!-- Status -->
    <div class="mb-4 ecommerce-select2-dropdown">
        <label class="form-label">Select status</label>
        <select name="designer_status" id="ecommerce-category-status" class="select2 form-select"
            data-placeholder="Select status">
            <option value="">Select status</option>
            <option value="publish" @if(isset($form_id)) @if($editData->designer_status == 'publish') selected @endif @endif>Publish</option>
            <option value="inactive" @if(isset($form_id)) @if($editData->designer_status == 'inactive') selected @endif @endif>Inactive</option>
        </select>
    </div>
    <!-- Submit and reset -->
    <div class="mb-3">
        <button type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
        <button type="reset" class="btn bg-label-danger"
            data-bs-dismiss="offcanvas">Discard</button>
    </div>
</form>