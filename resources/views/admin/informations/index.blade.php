@extends('admin/layouts/master')

@section('title')
    {{ $setting->name_en ?? '' }} | معلوماتي
@endsection
@section('page_name')
    معلوماتي
@endsection
@section('content')
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> معلوماتي {{ $setting->name_en ?? '' }}</h3>
                </div>
                <div class="card-body">
                    <form id="updateForm" method="POST" enctype="multipart/form-data"
                        action="{{ route('updateInformation', $informations->id) }}">
                        @csrf
                        <input type="hidden" value="{{ $informations->id }}" name="id">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-header" style="background-color: lightblue;">
                                    <h3 class="card-title">الرئيسية</h3>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name" class="form-control-label">صورة: </label>
                                            <input type="file" class="dropify" name="image_owner" data-default-file="{{ asset('storage/' . $informations->image_owner) }}"
                                                accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                            <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png,
                                                gif,
                                                jpeg, jpg,webp</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name_owner" class="form-control-label">الاسم: </label>
                                            <input type="text" class="form-control"
                                                value="{{ $informations->name_owner['ar'] }}" name="name_owner[ar]">
                                        </div>
                                        <div class="col-md-6" style="text-align: left">
                                            <label for="name_owner_en" class="form-control-label">: Name</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $informations->name_owner['en'] }}" name="name_owner[en]">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="customers" class="form-control-label">زبائن: </label>
                                            <input type="number" class="form-control"
                                                value="{{ $informations->customers }}" name="customers">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="years_experience" class="form-control-label">سنوات الخبرة: </label>
                                            <input type="number" class="form-control"
                                                value="{{ $informations->years_experience }}" name="years_experience">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="best_customers" class="form-control-label">افضل الزبائن: </label>
                                            <input type="number" class="form-control"
                                                value="{{ $informations->best_customers }}" name="best_customers">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="project_successfully" class="form-control-label">المشاريع الناجحة:
                                            </label>
                                            <input type="number" class="form-control"
                                                value="{{ $informations->project_successfully }}"
                                                name="project_successfully">
                                        </div>
                                    </div>
                                    <div class="container">git push --set-upstream origin humsi
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="name" class="form-control-label"> وصف المالك: </label>
                                                <textarea class="form-control" id="description_owner_ar" name="description_owner[ar]" rows="8">{{ $informations->description_owner['ar'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="text-align: left">
                                                <label for="name" class="form-control-label">: Description Owner</label>
                                                <textarea class="form-control text-left" id="description_owner_en" name="description_owner[en]" rows="8">{{ $informations->description_owner['en'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="background-color: lightgreen;">
                                    <h3 class="card-title">قسم من نحن: </h3>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name" class="form-control-label">صورة من نحن: </label>
                                            <input type="file" class="dropify" name="image_description" data-default-file="{{ asset('storage/' . $informations->image_description) }}"
                                                value="{{ asset('storage/' . $informations->image_description) }}"
                                                accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                            <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png,
                                                gif,
                                                jpeg, jpg,webp</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name" class="form-control-label">من نحن: </label>
                                            <textarea class="form-control" id="about_us_ar" name="description_about[ar]" rows="8">{{ $informations->description_about['ar'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" style="text-align: left">
                                            <label for="name" class="form-control-label">: About Us</label>
                                            <textarea class="form-control text-left" id="about_us_en" name="description_about[en]" rows="8">{{ $informations->description_about['en'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="background-color: lightgray;">
                                    <h3 class="card-title">قسم تواصل معنا</h3>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name" class="form-control-label">الايميل</label>
                                            <input type="text" value="{{ $informations->email }}" class="form-control" name="email">
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-control-label">الهاتف</label>
                                            <input type="text" value="{{ $informations->phone }}" class="form-control text-left" name="phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6" style="text-align: left">
                                            <label for="name" class="form-control-label"> : Facebook</label>
                                            <input type="text" value="{{ $informations->facebook }}" class="form-control text-left" name="facebook">
                                        </div>
                                        <div class="col-6" style="text-align: left">
                                            <label for="name" class="form-control-label"> : Twitter</label>
                                            <input type="text" value="{{ $informations->twitter }}" class="form-control text-left" name="twitter">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6" style="text-align: left">
                                            <label for="name" class="form-control-label"> : Linkedin</label>
                                            <input type="text" value="{{ $informations->linkedin }}" class="form-control text-left" name="linkedin">
                                        </div>
                                        <div class="col-6" style="text-align: left">
                                            <label for="name" class="form-control-label"> : Instagram</label>
                                            <input type="text" value="{{ $informations->instagram }}" class="form-control text-left" name="instagram">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name" class="form-control-label">العنوان</label>
                                            <textarea name="address" id="address" class="form-control" rows="8">{{ $informations->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </div>
    @include('admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script src="{{ asset('assets/ck5/ckeditor.js') }}"></script>

    <script>
        ClassicEditor.create(document.querySelector('#about_us_ar'));
        ClassicEditor.create(document.querySelector('#about_us_en'));
        ClassicEditor.create(document.querySelector('#description_owner_ar'));
        ClassicEditor.create(document.querySelector('#description_owner_en'));
        ClassicEditor.create(document.querySelector('#address'));

        $('.dropify').dropify()
        editScript();
    </script>
@endsection
