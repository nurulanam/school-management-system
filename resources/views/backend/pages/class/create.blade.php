@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Classes</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Classes</a>
                            </li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{ route('classes.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Add Class</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ClassName" class="form-label">Class Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="class_name" type="text" class="form-control" id="ClassName"
                                                value="{{ old('class_name') }}" placeholder="Class Name">
                                            @error('class_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="ClassNumber" class="form-label">Class Number<span
                                                    class="text-danger">*</span></label>
                                            <input name="class_number" type="text" class="form-control" id="ClassNumber"
                                                value="{{ old('class_number') }}" placeholder="Class Number">
                                            @error('class_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        {{-- <div class="col-md-6 mb-3">
                                            <label for="ClassTeacher" class="form-label">Class Teacher <span
                                                    class="text-danger">*</span></label>
                                            <select name="class_teacher_id" id="ClassTeacher" class="form-control">
                                                <option>Select Class Teacher</option>
                                                @foreach ($teachers as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                @endforeach

                                            </select>
                                            @error('class_teacher_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}
                                        <div class="col-md-6 mb-3">
                                            <label for="ClassStart" class="form-label">Class Starting on<span
                                                    class="text-danger">*</span></label>
                                            <input name="class_start" type="date" class="form-control"
                                                id="ClassStart" value="{{ old('class_start') }}"
                                                placeholder="Class Starting on" onchange="dateChange()">
                                            @error('class_start')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ClassEnd" class="form-label">Class Ending on<span
                                                    class="text-danger">*</span></label>
                                            <input name="class_end" type="date" class="form-control disable"
                                                id="ClassEnd" value="{{ old('class_end') }}"
                                                placeholder="Class Ending on" readonly>
                                            @error('class_end')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                        <script>
                                            function dateChange(){
                                                $('#ClassEnd').removeAttr('readonly');
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end col -->
            </div>
        </form>

    </div>
@endsection
