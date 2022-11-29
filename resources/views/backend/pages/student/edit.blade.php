@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Students</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Students</a>
                            </li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Personal Details</h5>
                                </div>
                                <div class="card-body">

                                    <!-- Input with Value -->
                                    <div class="row">

                                        <div class="col-md-2 mb-3">
                                            <img id="preview_img" class="img-fluid img-thumbnail shadow"
                                                src="{{ asset('backend/assets/images/school/student') . '/' . $student->student_avater }}"
                                                alt="teacher avater"
                                                style="height: 120px; width: 120px; border-radius: 50%; border: 5px solid rgba(0, 0, 0, 0.151);">
                                            <script>
                                                $(document).ready(() => {
                                                    $('#studentAvater').change(function() {
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
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="studentAvater" class="form-label">Student Avater<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="student_avater"
                                                id="studentAvater" onchange="loadPreview(this);" />
                                            @error('student_avater')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="StudentName" class="form-label">Student Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control" id="StudentName"
                                                value="{{ $student->name }}" placeholder="Student Name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="DateOfBirth" class="form-label">Date Of Birth<span
                                                    class="text-danger">*</span></label>
                                            <input name="date_of_birth" type="date" class="form-control" id="DateOfBirth"
                                                value="{{ $student->date_of_birth }}" placeholder="Date Of Birth">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="PhoneNumber" class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input name="phone_number" type="text" class="form-control" id="PhoneNumber"
                                                value="{{ $student->phone_number }}" placeholder="Phone Number">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <label for="BloodGroup" class="form-label">Blood Group <span
                                                    class="text-danger">*</span></label>
                                            <select name="blood_group" id="BloodGroup" class="form-control">
                                                <option>Select Blood Group</option>
                                                <option value="O+" @if ($student->blood_group == 'O+') selected @endif>O+
                                                </option>
                                                <option value="O-" @if ($student->blood_group == 'O-') selected @endif>O-
                                                </option>
                                                <option value="A+" @if ($student->blood_group == 'A+') selected @endif>A+
                                                </option>
                                                <option value="A-" @if ($student->blood_group == 'A-') selected @endif>A-
                                                </option>
                                                <option value="B+" @if ($student->blood_group == 'B+') selected @endif>B+
                                                </option>
                                                <option value="B-" @if ($student->blood_group == 'B-') selected @endif>B-
                                                </option>
                                                <option value="AB+" @if ($student->blood_group == 'AB+') selected @endif>AB+
                                                </option>
                                                <option value="AB-" @if ($student->blood_group == 'AB-') selected @endif>AB-
                                                </option>
                                            </select>
                                            @error('blood_group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="Gender" class="form-label">Gender<span
                                                    class="text-danger">*</span></label>
                                            <div class="d-flex">
                                                <!-- Base Radios -->
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="male" value="male"
                                                        @if ($student->gender == 'male') checked @endif>
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>

                                                <div class="form-check mx-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female"
                                                        @if ($student->gender == 'female') checked @endif>
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check mx-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="others" value="others"
                                                        @if ($student->gender == 'others') checked @endif>
                                                    <label class="form-check-label" for="others">Others</label>
                                                </div>
                                            </div>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header mb-3">
                            <h5>Address</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="StreetAddress" class="form-label">Street Address<span
                                            class="text-danger">*</span></label>
                                    <input name="street_address" type="text" class="form-control" id="StreetAddress"
                                        value="{{ $student->street_address }}" placeholder="Street Address">
                                    @error('street_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="CityName" class="form-label">City Name<span
                                            class="text-danger">*</span></label>
                                    <input name="city_name" type="text" class="form-control" id="CityName"
                                        value="{{ $student->city_name }}" placeholder="City Name">
                                    @error('city_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="CountryId" class="form-label">Country<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" id="CountryId" name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                @if ($country->id == $student->country_id) selected @endif>
                                                {{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="PinCode" class="form-label">Pin Code<span
                                            class="text-danger">*</span></label>
                                    <input name="pin_code" type="number" class="form-control" id="PinCode"
                                        value="{{ $student->pin_code }}" placeholder="Pin Code">
                                    @error('pin_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>School Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 mb-3">
                                <label for="joinigDate" class="form-label">Joining Date<span
                                        class="text-danger">*</span></label>
                                <input name="joining_date" type="date" class="form-control" id="joinigDate"
                                    value="{{ $student->joining_date }}" placeholder="Joining Date">
                                @error('joining_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="classId" class="form-label">Class<span class="text-danger">*</span></label>
                                <select name="class_id" id="classId" class="form-control">
                                    <option>Select Current Class</option>
                                    @foreach ($classes as $classe)
                                        <option value="{{ $classe->id }}"
                                            @if ($classe->id == $student->class_id) selected @endif>{{ $classe->class_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="rollNumber" class="form-label">Roll Number<span
                                        class="text-danger">*</span></label>
                                <input name="roll_number" type="text" class="form-control" id="rollNumber"
                                    value="{{ $student->roll_number }}" placeholder="Roll Number">
                                @error('roll_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Account Information</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="col-md-12 mb-3">
                                <label for="EmailAddress" class="form-label">Email Address<span
                                        class="text-danger">*</span></label>
                                <input name="email" type="email" class="form-control" id="EmailAddress"
                                    value="{{ old('email') }}" placeholder="Student Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Password" class="form-label">Password<span
                                        class="text-danger">*</span></label>
                                <input name="password" type="password" class="form-control" id="Password"
                                    value="{{ old('password') }}" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="ConfirmPassword" class="form-label">Confirm Password<span
                                        class="text-danger">*</span></label>
                                <input name="password_confirmation" type="password" class="form-control"
                                    id="ConfirmPassword" value="{{ old('password_confirmation') }}"
                                    placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="col-12 mt-3">
                                <button class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>

    </div>
@endsection
