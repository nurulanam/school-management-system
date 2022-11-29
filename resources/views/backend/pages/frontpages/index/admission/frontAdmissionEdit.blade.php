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
                            <li class="breadcrumb-item active">Admission</li>
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
                                <h5 class="card-title mb-0">Addmission Section</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('front-admission.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Input with Value -->
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input name="title" type="text" class="form-control" id="title"
                                                value="{{ $data->title }}" placeholder="Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="topDescription" class="form-label">Top Description</label>
                                            <input name="top_description" type="text" class="form-control"
                                                id="topDescription" value="{{ $data->top_description }}"
                                                placeholder="Top Description">
                                            @error('top_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="backgroundImage" class="form-label">Background Image <span
                                                    class="text-danger">*</span></label>
                                            <input name="bg_image" type="file" class="form-control" id="backgroundImage"
                                                value="{{ old('bg_image') }}" placeholder="Background Image">
                                            @error('bg_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="videoLink" class="form-label">Video Link <span
                                                    class="text-danger">*</span></label>
                                            <input name="video_link" type="text" class="form-control" id="videoLink"
                                                value="{{ $data->video_link }}" placeholder="Video Link">
                                            @error('video_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="bottomDescription" class="form-label">Bottom Description</label>
                                            <input name="bottom_description" type="text" class="form-control"
                                                id="bottomDescription" value="{{ $data->bottom_description }}"
                                                placeholder="Bottom Description">
                                            @error('bottom_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonText" class="form-label">Button Text<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_text" type="text" class="form-control"
                                                id="buttonText" value="{{ $data->button_text }}"
                                                placeholder="Button Text">
                                            @error('button_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonLink" class="form-label">Button Link<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_link" type="text" class="form-control"
                                                id="buttonLink" value="{{ $data->button_link }}"
                                                placeholder="Button Link">
                                            @error('button_link')
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
