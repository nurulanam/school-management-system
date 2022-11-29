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
                                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Input with Value -->
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="bannerTitle" class="form-label">Banner Title <span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_title" type="text" class="form-control" id="bannerTitle"
                                                value="{{ old('banner_title') }}" placeholder="Banner Title">
                                            @error('banner_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="BannerButtonText" class="form-label">Banner Button Text<span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_button_text" type="text" class="form-control"
                                                id="BannerButtonText" value="{{ old('banner_button_text') }}"
                                                placeholder="Banner Button Text">
                                            @error('banner_button_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="BannerImage" class="form-label">Banner Image <span
                                                    class="text-danger">*</span></label>
                                            <input name="banner_image" type="file" class="form-control" id="BannerImage"
                                                value="{{ old('banner_image') }}" placeholder="Banner Image">
                                            @error('banner_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="BannerDetails" class="form-label">Banner details <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="banner_details" class="form-control ckeditor-classic" id="BannerDetails" placeholder="Banner Details" rows="3">{{ old('banner_details') }}</textarea>
                                            @error('banner_details')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-primary">Save</button>
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

        {{-- school informaion start --}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">All Banners</h5>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10px;">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                value="option">
                                        </div>
                                    </th>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Btn Text</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($banners as $key => $banner)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $key+=1 }}</td>
                                <td>
                                    <img src="{{  asset('backend/assets/images/school/banner').'/'.$banner->banner_image }}" class="img-fluid img-thumbnail " width="80px">
                                </td>
                                <td>{{ $banner->banner_title }}</td>
                                <td>{{ $banner->banner_details }}</td>
                                <td>{{ $banner->banner_button_text }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('banner.edit', $banner->id) }}" class="dropdown-item edit-item-btn">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#delete{{ $banner->id }}">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <!-- Delete Modals -->
                            <div id="delete{{ $banner->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger pb-3">
                                            <h5 class="modal-title text-light" id="myModalLabel">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="fs-15">
                                                Are You Sure To <b class="text-danger">DELETE</b> {{ $banner->banner_title }} ?
                                            </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger ">Confirm</button>
                                            </form>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- school informaion end --}}

    </div>
@endsection
