<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('services.update', $services->id) }}">
        @csrf
        @php
            $title = json_decode($services->title, true);
            $description = json_decode($services->description, true);
        @endphp
        @method('PUT')
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <label for="name" class="form-control-label">ايقونة: </label>
                    <input type="file" class="dropify" name="icon" data-default-file="{{ asset('storage/'. $services->icon) }}" value=""
                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png,
                        gif,
                        jpeg, jpg,webp</span>
                </div>
                <div class="col-md-6">
                    <label for="title_ar" class="form-control-label">العنوان: </label>
                    <input type="text" class="form-control text-left" value="{{ $title['ar'] }}" name="title[ar]">
                </div>
                <div class="col-6" style="text-align: left">
                    <label for="title_en" class="form-control-label"> :Title</label>
                    <input type="text" class="form-control text-left" value="{{ $title['en'] }}" name="title[en]">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="description" class="form-control-label">الوصف : </label>
                    <textarea class="form-control" name="description[ar]" id="description" rows="8">{{ $description['ar'] }}</textarea>
                </div>
                <div class="col-12" style="text-align: left">
                    <label for="description" class="form-control-label">: Description</label>
                    <textarea class="form-control text-left" name="description[en]" id="description" rows="8">{{ $description['en'] }}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">تحديث</button>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
