@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Manage Banner</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Banner</a>
                            </li>
                            <li class="breadcrumb-item active">Banners</li>
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
                                <h5 class="card-title mb-0">Add Banner</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <!-- Input with Value -->
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="bannerTitle" class="form-label">Banner Title <span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_title" type="text" class="form-control" id="bannerTitle"
                                                value="{{ $banner->banner_title }}" placeholder="Banner Title">
                                            @error('banner_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="BannerButtonText" class="form-label">Banner Button Text<span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_button_text" type="text" class="form-control"
                                                id="BannerButtonText" value="{{ $banner->banner_button_text }}"
                                                placeholder="Banner Button Text">
                                            @error('banner_button_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="BannerImage" class="form-label">Banner Image <span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_image" type="file" class="form-control" id="BannerImage"
                                                value="" placeholder="Banner Image">
                                            @error('banner_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <img src="{{ asset('backend/assets/images/school/banner'.'/'.$banner->banner_image) }}" class="img-fluid img-thumbnail" width="80px">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="BannerDetails" class="form-label">Banner details <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="banner_details" class="form-control ckeditor-classic" id="BannerDetails" placeholder="Banner Details" rows="3">{{ $banner->banner_details }}</textarea>
                                            @error('banner_details')
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
