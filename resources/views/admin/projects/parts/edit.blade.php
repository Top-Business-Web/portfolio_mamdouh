<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data"
        action="{{ route('projects.update', $projects->id) }}">
        @csrf
        @php
            $title = json_decode($projects->title, true);
            $classification = json_decode($projects->classification, true);
            $description = json_decode($projects->description, true);
            $images = json_decode($projects->images, true);
        @endphp
        @method('PUT')
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <label for="name" class="form-control-label">الصور: </label>
                    <input type="file" class="dropify" name="images[]" multiple
                        data-default-file="{{ asset('storage/' . $images[0]) }}"
                        accept="image/png, image/webp, image/gif, image/jpeg, image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية: png, gif, jpeg, jpg,
                        webp</span>
                </div>
                <div class="col-md-6">
                    <label for="title_ar" class="form-control-label">العنوان: </label>
                    <input type="text" class="form-control" value="{{ $title['ar'] }}" name="title[ar]">
                </div>
                <div class="col-6" style="text-align: left">
                    <label for="title_en" class="form-control-label"> :Title</label>
                    <input type="text" class="form-control text-left" value="{{ $title['en'] }}" name="title[en]">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="description" class="form-control-label">التصنيف : </label>
                    <input type="text" class="form-control text-left" value="{{ $classification['ar'] }}"
                        name="classification[ar]">
                </div>
                <div class="col-6" style="text-align: left">
                    <label for="classification" class="form-control-label">: Classification</label>
                    <input type="text" class="form-control text-left" value="{{ $classification['en'] }}"
                        name="classification[en]">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="description" class="form-control-label">الوصف : </label>
                    <textarea name="description[ar]" class="form-control" id="description_ar" rows="8">{{ $description['ar'] }}</textarea>
                </div>
                <div class="col-6" style="text-align: left">
                    <label for="description" class="form-control-label">: Description</label>
                    <textarea name="description[en]" class="form-control" id="description_en" rows="8">{{ $description['en'] }}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">تحديث</button>
        </div>
    </form>
</div>
<script src="{{ asset('assets/ck5/ckeditor.js') }}"></script>
<script>
    $('.dropify').dropify()

    ClassicEditor.create(document.querySelector('#description_ar'));
    ClassicEditor.create(document.querySelector('#description_en'));
</script>
