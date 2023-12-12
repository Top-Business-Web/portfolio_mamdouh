<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{ route('services.store') }}">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <label for="name" class="form-control-label">ايقونة: </label>
                    <input type="file" class="dropify" name="icon" data-default-file=""
                        value=""
                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png,
                        gif,
                        jpeg, jpg,webp</span>
                </div>
                <div class="col-md-6">
                    <label for="title_ar" class="form-control-label">العنوان: </label>
                    <input type="text" class="form-control" name="title[ar]">
                </div>
                <div class="col-6" style="text-align: left">
                    <label for="title_en" class="form-control-label"> :Title</label>
                    <input type="text" class="form-control text-left" name="title[en]">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="description" class="form-control-label">الوصف : </label>
                    <textarea class="form-control" name="description[ar]" id="description" rows="8"></textarea>
                </div>
                <div class="col-12" style="text-align: left">
                    <label for="description" class="form-control-label">: Description</label>
                    <textarea class="form-control text-left" name="description[en]" id="description" rows="8"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
