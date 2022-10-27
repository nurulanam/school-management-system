@extends('backend.master')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">School Setup</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">School Setup</a>
                        </li>
                        <li class="breadcrumb-item active">Setup</li>
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
                            <h5 class="card-title mb-0">Setup</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('school-setup.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Input with Value -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolName" class="form-label">School Name <span class="text-danger">*</span></label>
                                        <input name="school_name" type="text" class="form-control" id="schoolName" value="{{ old('school_name') }}" placeholder="School Name">
                                        @error('school_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolTagline" class="form-label">School Tagline <span class="text-danger">*</span></label>
                                        <input name="school_tagline" type="text" class="form-control" id="schoolTagline" value="{{ old('school_tagline') }}" placeholder="School Tagline">
                                        @error('school_tagline')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6 mb-3">
                                        <label for="schoolAddress" class="form-label">School Address</label>
                                        <input name="school_address" type="text" class="form-control" id="Address" value="" placeholder="School Address">
                                    </div> --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolPhoneNumber" class="form-label">School Phone Number <span class="text-danger">*</span></label>
                                        <input name="school_phone_number" type="text" class="form-control" id="schoolPhoneNumber" value="{{ old('school_phone_number') }}" placeholder="School Phone Number">
                                        @error('school_phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolEmail" class="form-label">School Email <span class="text-danger">*</span></label>
                                        <input name="school_email" type="email" class="form-control" id="schoolEmail" value="{{ old('school_email') }}" placeholder="School Email">
                                        @error('school_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolEiinNumber" class="form-label">School EIIN Number <span class="text-danger">*</span></label>
                                        <input name="school_eiin_number" type="number" class="form-control" id="schoolEiinNumber" value="{{ old('school_eiin_number') }}" placeholder="School EIIN Number">
                                        @error('school_eiin_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolMpoNumber" class="form-label">School MPO Number <span class="text-danger">*</span></label>
                                        <input name="school_mpo_number" type="number" class="form-control" id="schoolMpoNumber" value="{{ old('school_mpo_number') }}" placeholder="School MPO Number">
                                        @error('school_mpo_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolAvater" class="form-label">School Avater <span class="text-danger">*</span></label>
                                        <input name="school_avater" type="file" class="form-control" id="schoolAvater" value="{{ old('school_avater') }}" placeholder="School Avater">
                                        @error('school_avater')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="schoolDescription" class="form-label">School Description <span class="text-danger">*</span></label>
                                        <textarea name="school_description" id="schoolDescription" class="form-control ckeditor-classic" cols="10" rows="5">{{ old('school_description') }}</textarea>
                                        @error('school_description')
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
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th>#</th>
                                <th>Avater</th>
                                <th>School Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>EIIN No</th>
                                <th>MPO No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($school as $key=>$school)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $key+=1 }}</td>
                                <td>
                                    <img src="{{  asset('backend/assets/images/school/avater').'/'.$school->school_avater }}" class="img-fluid img-thumbnail " width="80px">
                                </td>
                                <td>{{ $school->school_name }}</td>
                                <td>{{ $school->school_phone_number }}</td>
                                <td>{{ $school->school_email }}</td>
                                <td>{{ $school->school_eiin_number }}</td>
                                <td>{{ $school->school_mpo_number }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li>
                                                <a href="{{ route('school-setup.edit', $school->id) }}" class="dropdown-item edit-item-btn">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#delete{{ $school->id }}">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <!-- Delete Modals -->
                            <div id="delete{{ $school->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger pb-3">
                                            <h5 class="modal-title text-light" id="myModalLabel">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="fs-15">
                                                Are You Sure To <b class="text-danger">DELETE</b> {{ $school->school_name }} ?
                                            </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('school-setup.destroy', $school->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                {{-- <input type="hidden" name="id" value="{{ $school->id }}"> --}}
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
