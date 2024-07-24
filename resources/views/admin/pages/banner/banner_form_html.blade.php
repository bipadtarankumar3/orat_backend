<form class="pt-0" id="bannerForm" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="banner_id" id="banner_id" value="{{isset($form_id)?$form_id:''}}">
    <div class="mb-3">
        <label class="form-label" for="document">Banner</label>
        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" id="document" name="document">
        @if (isset($form_id))
        <img src="{{$Banner->banner_image}}" alt="banner" style="width: 100px;">
        @endif
    </div>
    <div class="mb-3">
        <button type="button" onclick="submit_form()" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
        <button type="reset" class="btn bg-label-danger"
            data-bs-dismiss="offcanvas">Discard</button>
    </div>
</form>