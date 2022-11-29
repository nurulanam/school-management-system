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
                                <form action="{{ route('front-admission.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Input with Value -->
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input name="title" type="text" class="form-control" id="title"
                                                value="{{ old('title') }}" placeholder="Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="topDescription" class="form-label">Top Description</label>
                                            <input name="top_description" type="text" class="form-control"
                                                id="topDescription" value="{{ old('top_description') }}"
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
                                                value="{{ old('video_link') }}" placeholder="Video Link">
                                            @error('video_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="bottomDescription" class="form-label">Bottom Description</label>
                                            <input name="bottom_description" type="text" class="form-control"
                                                id="bottomDescription" value="{{ old('bottom_description') }}"
                                                placeholder="Bottom Description">
                                            @error('bottom_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonText" class="form-label">Button Text<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_text" type="text" class="form-control"
                                                id="buttonText" value="{{ old('button_text') }}"
                                                placeholder="Button Text">
                                            @error('button_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="buttonLink" class="form-label">Button Link<span
                                                    class="text-danger">*</span></label>
                                            <input name="button_link" type="text" class="form-control"
                                                id="buttonLink" value="{{ old('button_link') }}"
                                                placeholder="Button Link">
                                            @error('button_link')
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
                                    <th>Background</th>
                                    <th>Title</th>
                                    <th>Top Desc</th>
                                    <th>Video Link</th>
                                    <th>Bottom Desc</th>
                                    <th>Button Text</th>
                                    <th>Button Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($admissions as $key => $admission)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $key+=1 }}</td>
                                <td>
                                    <img src="{{  asset('frontend/assets/images/pages/home/admission').'/'.$admission->bg_image }}" class="img-fluid img-thumbnail " width="80px">
                                </td>
                                <td>{{ $admission->title }}</td>
                                <td>{{ $admission->top_description }}</td>
                                <td>{{ $admission->video_link }}</td>
                                <td>{{ $admission->bottom_description }}</td>
                                <td>{{ $admission->button_text }}</td>
                                <td>{{ $admission->button_link }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('front-admission.edit', $admission->id) }}" class="dropdown-item edit-item-btn">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#delete{{ $admission->id }}">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            {{-- <!-- Delete Modals -->
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
                            </div><!-- /.modal --> --}}


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
