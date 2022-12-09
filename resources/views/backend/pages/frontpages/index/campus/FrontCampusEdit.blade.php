@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home Page</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home Page</a>
                            </li>
                            <li class="breadcrumb-item active">Campus Info</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Campus Edit</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('front-campus.update', $frontCampus->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input name="title" type="text" class="form-control" id="title"
                                                value="{{ $frontCampus->title }}" placeholder="Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label for="backgroundImage" class="form-label">Background Image <span
                                                    class="text-danger">*</span></label>
                                                    <input name="bg_image" id="bdImg" type="file" class="form-control" id="backgroundImage"
                                                        value="" placeholder="Background Image" onchange="loadPreview(this);">
                                                    @error('bg_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <img id="preview_img" class="img-fluid img-thumbnail shadow"
                                                        src="{{ asset('frontend/assets/images/pages/home/campus') . '/' . $frontCampus->bg_image }}"
                                                        alt="teacher avater"
                                                        style="height: 120px; width: 120px; border-radius: 50%; border: 5px solid rgba(0, 0, 0, 0.151);">
                                                    <script>
                                                        $(document).ready(() => {
                                                            $('#bdImg').change(function() {
                                                                const file = this.files[0];
                                                                console.log(file);
                                                                if (file) {
                                                                    let reader = new FileReader();
                                                                    reader.onload = function(event) {
                                                                        console.log(event.target.result);
                                                                        $('#preview_img').attr('src', event.target.result);
                                                                    }
                                                                    reader.readAsDataURL(file);
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonText" class="form-label">Button Text<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_text" type="text" class="form-control" id="buttonText"
                                                value="{{ $frontCampus->button_text }}" placeholder="Button Text">
                                            @error('button_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonLink" class="form-label">Button Link<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_link" type="text" class="form-control" id="buttonLink"
                                                value="{{ $frontCampus->button_link }}" placeholder="Button Link">
                                            @error('button_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="campusDescription" class="form-label">Campus Short
                                                Description</label>
                                            <textarea name="campus_description" class="form-control ckeditor-classic" id="campusDescription"
                                                placeholder="Campust Short Description">{{ $frontCampus->campus_description }}</textarea>
                                            @error('campus_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection
