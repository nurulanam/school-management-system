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
                        <li class="breadcrumb-item active">Update</li>
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
                            <h5 class="card-title mb-0">Update</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('school-setup.update', $schoolSetup->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <!-- Input with Value -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolName" class="form-label">School Name <span class="text-danger">*</span></label>
                                        <input name="school_name" type="text" class="form-control" id="schoolName" value="{{ $schoolSetup->school_name }}" placeholder="School Name">
                                        @error('school_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolTagline" class="form-label">School Tagline <span class="text-danger">*</span></label>
                                        <input name="school_tagline" type="text" class="form-control" id="schoolTagline" value="{{ $schoolSetup->school_tagline }}" placeholder="School Tagline">
                                        @error('school_tagline')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="schoolPhoneNumber" class="form-label">School Phone Number <span class="text-danger">*</span></label>
                                        <input name="school_phone_number" type="text" class="form-control" id="schoolPhoneNumber" value="{{ $schoolSetup->school_phone_number }}" placeholder="School Phone Number">
                                        @error('school_phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolEmail" class="form-label">School Email <span class="text-danger">*</span></label>
                                        <input name="school_email" type="email" class="form-control" id="schoolEmail" value="{{ $schoolSetup->school_email }}" placeholder="School Email">
                                        @error('school_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolEiinNumber" class="form-label">School EIIN Number <span class="text-danger">*</span></label>
                                        <input name="school_eiin_number" type="number" class="form-control" id="schoolEiinNumber" value="{{ $schoolSetup->school_eiin_number }}" placeholder="School EIIN Number">
                                        @error('school_eiin_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolMpoNumber" class="form-label">School MPO Number <span class="text-danger">*</span></label>
                                        <input name="school_mpo_number" type="number" class="form-control" id="schoolMpoNumber" value="{{ $schoolSetup->school_mpo_number }}" placeholder="School MPO Number">
                                        @error('school_mpo_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="schoolAvater" class="form-label">School Avater</label>
                                        <input name="school_avater" type="file" class="form-control" id="schoolAvater" value="" placeholder="School Avater">
                                        @error('school_avater')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <img src="{{ asset('backend/assets/images/school/avater'.'/'.$schoolSetup->school_avater) }}" class="img-fluid img-thumbnail" width="80px">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="schoolDescription" class="form-label">School Description <span class="text-danger">*</span></label>
                                        <textarea name="school_description" id="schoolDescription" class="form-control ckeditor-classic" cols="10" rows="5">{{ $schoolSetup->school_description }}</textarea>
                                        @error('school_description')
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

    {{-- school informaion start --}}

    {{-- school informaion end --}}

</div>
@endsection
