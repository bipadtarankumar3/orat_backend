<form class="pt-0" id="categoryForm">
    @csrf
    <input type="hidden" name="edit_id" id="edit_id" value="{{isset($form_id)?$form_id:''}}">
    <!-- Title -->
    <div class="mb-3">
        <label class="form-label" for="ecommerce-category-title">Title</label>
        <input type="text" value="{{isset($form_id)?$editData->sub_title:''}}"  class="form-control" id="ecommerce-category-title"
            placeholder="Enter category title" name="title" aria-label="category title">
    </div>

    <!-- Image -->
    <div class="mb-3">
        <label class="form-label" for="document">Attachment</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
        @if (isset($form_id))
        <img src="{{URL::to($editData->sub_image)}}" alt="banner" style="width: 100px;">
        @endif
    </div>

    <!-- Parent category -->
    <div class="mb-3 ecommerce-select2-dropdown">
        <label class="form-label" for="category_id">Parent category</label>
        <select id="category_id" name="category_id" class="select2 form-select" data-placeholder="Select parent category">
          <option value="">Select parent Category</option>
            @foreach ($category as $item)
                <option value="{{$item->id}}"  @if(isset($form_id)) @if($editData->category_id == $item->id) selected @endif @endif>{{$item->title}}</option>
            @endforeach
          
          
        </select>
      </div>


    <!-- Status -->
    <div class="mb-4 ecommerce-select2-dropdown">
        <label class="form-label">Select category status</label>
        <select name="status" id="ecommerce-category-status" class="select2 form-select"
            data-placeholder="Select category status">
            <option value="">Select category status</option>
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