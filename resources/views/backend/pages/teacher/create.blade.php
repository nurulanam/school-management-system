@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Teachers</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Teachers</a>
                            </li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
                                                src="https://via.placeholder.com/120" alt="teacher avater"
                                                style="height: 120px; width: 120px; border-radius: 50%; border: 5px solid rgba(0, 0, 0, 0.151);">
                                            <script>
                                                $(document).ready(() => {
                                                    $('#teacherAvater').change(function() {
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
                                            <label for="teacherAvater" class="form-label">Teacher Avater<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="teacher_avater"
                                                id="teacherAvater" onchange="loadPreview(this);" />
                                            @error('teacher_avater')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="TeacherName" class="form-label">Teacher Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control" id="TeacherName"
                                                value="{{ old('name') }}" placeholder="Teacher Name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="DateOfBirth" class="form-label">Date Of Birth<span
                                                    class="text-danger">*</span></label>
                                            <input name="date_of_birth" type="date" class="form-control" id="DateOfBirth"
                                                value="{{ old('date_of_birth') }}" placeholder="Date Of Birth">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="PhoneNumber" class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input name="phone_number" type="text" class="form-control" id="PhoneNumber"
                                                value="{{ old('phone_number') }}" placeholder="Phone Number">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="EmailAddress" class="form-label">Email Address<span
                                                    class="text-danger">*</span></label>
                                            <input name="email" type="email" class="form-control"
                                                id="EmailAddress" value="{{ old('email') }}"
                                                placeholder="Teacher Email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="BloodGroup" class="form-label">Blood Group <span
                                                    class="text-danger">*</span></label>
                                            <select name="blood_group" id="BloodGroup" class="form-control">
                                                <option>Select Blood Group</option>
                                                <option value="1">O+</option>
                                                <option value="2">O-</option>
                                                <option value="3">A+</option>
                                                <option value="4">A-</option>
                                                <option value="5">B+</option>
                                                <option value="6">B-</option>
                                                <option value="7">AB+</option>
                                                <option value="8">AB-</option>
                                            </select>
                                            @error('blood_group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="Qualification" class="form-label">Qualification<span
                                                    class="text-danger">*</span></label>
                                            <input name="qualification" type="text" class="form-control"
                                                id="Qualification" value="{{ old('qualification') }}"
                                                placeholder="Qualification">
                                            @error('qualification')
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
                                                        id="male" value="male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>

                                                <div class="form-check mx-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check mx-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="others" value="others">
                                                    <label class="form-check-label" for="others">Others</label>
                                                </div>
                                            </div>
                                            @error('qualification')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="card-header mb-3">
                                            <h5>Address</h5>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="StreetAddress" class="form-label">Street Address<span
                                                    class="text-danger">*</span></label>
                                            <input name="street_address" type="text" class="form-control"
                                                id="StreetAddress" value="{{ old('street_address') }}"
                                                placeholder="Street Address">
                                            @error('street_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="CityName" class="form-label">City Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="city_name" type="text" class="form-control" id="CityName"
                                                value="{{ old('city_name') }}" placeholder="City Name">
                                            @error('city_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="Country" class="form-label">Country<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" id="Country" name="country">
                                                <option value="">Select Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="&#197;land Islands">&#197;land Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belau">Belau</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius
                                                    and Saba</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="British Virgin Islands">British Virgin Islands</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                                                <option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cura&Ccedil;ao">Cura&Ccedil;ao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald
                                                    Islands</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Republic of Ireland">Republic of Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao S.A.R., China">Macao S.A.R., China</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="North Korea">North Korea</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palestinian Territory">Palestinian Territory</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barth&eacute;lemy">Saint Barth&eacute;lemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin (French part)">Saint Martin (French part)
                                                </option>
                                                <option value="Saint Martin (Dutch part)">Saint Martin (Dutch part)
                                                </option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                    Grenadines</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="S&atilde;o Tom&eacute; and Pr&iacute;ncipe">S&atilde;o
                                                    Tom&eacute; and Pr&iacute;ncipe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia/Sandwich Islands">South Georgia/Sandwich
                                                    Islands</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                                <option value="United States (US)">United States (US)</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican">Vatican</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Western Samoa">Western Samoa</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            @error('street_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="PinCode" class="form-label">Pin Code<span
                                                    class="text-danger">*</span></label>
                                            <input name="pin_code" type="number" class="form-control" id="PinCode"
                                                value="{{ old('pin_code') }}" placeholder="Pin Code">
                                            @error('pin_code')
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>School Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 mb-3">
                                <label for="joinigDate" class="form-label">Joining Date<span class="text-danger">*</span></label>
                                <input name="joining_date" type="date" class="form-control" id="joinigDate"
                                    value="{{ old('joining_date') }}" placeholder="Joining Date">
                                @error('joining_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="LeavingDate" class="form-label">Leaving Date<span class="text-danger">*</span></label>
                                <input name="leaving_date" type="date" class="form-control" id="LeavingDate"
                                    value="{{ old('leaving_date') }}" placeholder="Leaving Date">
                                @error('leaving_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="LeavingDate" class="form-label">Current Position<span class="text-danger">*</span></label>
                                <select name="leaving_date" id="LeavingDate" class="form-control">
                                    <option>Select Current Position</option>
                                    <option value="headmaster">Head Master</option>
                                    <option value="assistant_headmaster">Assistant Head Master</option>
                                    <option value="sub_assistant_headmaster">Sub Assistant Head Master</option>
                                    <option value="assistant_teacher">Assistant Teacher</option>
                                    <option value="sub_assistant_teacher">Sub Assistant Teacher</option>
                                </select>
                                @error('leaving_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
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
                            <div class="col-md-12 mb-3">
                                <label for="Password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input name="password" type="password" class="form-control" id="Password"
                                    value="{{ old('password') }}" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="ConfirmPassword" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                                <input name="password_confirmation" type="password" class="form-control" id="ConfirmPassword"
                                    value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
@endsection
