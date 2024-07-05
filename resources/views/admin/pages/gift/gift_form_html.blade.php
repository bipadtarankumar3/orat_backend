<form class="pt-0" id="giftForm" >
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
        <label class="form-label" for="document">Attachment</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
        @if (isset($form_id))
        <img src="{{URL::to($editData->file)}}" alt="banner" style="width: 100px;">
        @endif
    </div>

    <div class="mb-3">
      <label class="form-label" for="short_desc">Short Description</label>
      <input name="short_desc" class="form-control" value="{{isset($form_id)?$editData->short_desc:''}}" type="text" id="short_desc" placeholder="">
    </div>
    <div class="mb-3">
      <label class="form-label" for="long_desc">Long Description</label>
      <textarea name="long_desc" class="form-control" id="long_desc">{{isset($form_id)?$editData->long_desc:''}}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input  value="{{isset($form_id)?$editData->price:''}}"  type="text" id="price" class="form-control" placeholder="Enter Price" aria-label="price" name="price">
    </div>

    <div class="mb-3">
        <label class="form-label" for="gift_card_code">Gift card Code (Auto Generate)</label>
        <input type="text" id="gift_card_code" value="{{isset($form_id)?$editData->gift_card_code:''}}" class="form-control" placeholder="Gift card Code" aria-label="gift_card_code" name="gift_card_code">
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
      <button  type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
      <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
    </div>
  </form>