@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Class</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Class</a>
                            </li>
                            <li class="breadcrumb-item active">Manage</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- start position section-->
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0">All Classes</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addClass">Add</button>
                                    <!-- Varying modal content -->
                                </div>

                                {{-- Add Class Modal  --}}
                                <div class="modal fade" id="addClass" tabindex="-1" aria-labelledby="addClassLabel"
                                    aria-hidden="true">
                                    <form action="{{ route('classes.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addClassLabel">Add Class
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="ClassName" class="form-label">Class Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="class_name" type="text" class="form-control"
                                                                id="ClassName" value="{{ old('class_name') }}"
                                                                placeholder="Class Name">
                                                            @error('class_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="ClassNumber" class="form-label">Class Number<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="class_number" type="text" class="form-control"
                                                                id="ClassNumber" value="{{ old('class_number') }}"
                                                                placeholder="Class Number">
                                                            @error('class_number')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="ClassTeacher" class="form-label">Class Teacher <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="class_teacher_id" id="ClassTeacher"
                                                                class="form-control">
                                                                <option>Select Class Teacher</option>
                                                                @foreach ($teachers as $teacher)
                                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            @error('class_teacher_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="ClassStart" class="form-label">Class Starting
                                                                on<span class="text-danger">*</span></label>
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
                                                            <input name="class_end" type="date"
                                                                class="form-control disable" id="ClassEnd"
                                                                value="{{ old('class_end') }}"
                                                                placeholder="Class Ending on" readonly>
                                                            @error('class_end')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <script>
                                                            function dateChange() {
                                                                $('#ClassEnd').removeAttr('readonly');
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
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
                                            <th>class Name</th>
                                            <th>class No</th>
                                            <th>Teacher Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($classes as $key => $class)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $key += 1 }}</td>
                                                <td>{{ $class->class_name }}</td>
                                                <td>{{ $class->class_number }}</td>
                                                <td>{{ $class->teacherName->name }}</td>
                                                {{-- <td>{{  }}</td> --}}
                                                <td>{{ $class->class_start }}</td>
                                                <td>{{ $class->class_end }}</td>
                                                <td>
                                                    @if ($class->status == 'inactive')
                                                        <a href="{{ route('classes.status', $class->id) }}"
                                                            class="btn btn-danger btn-sm"> <i
                                                                class="mdi mdi-arrow-down-thin"></i></a>
                                                    @elseif ($class->status == 'active')
                                                        <a href="{{ route('classes.status', $class->id) }}"
                                                            class="btn btn-primary btn-sm"> <i
                                                                class="mdi mdi-arrow-up-thin"></i></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <button type="button"
                                                                    class="dropdown-item edit-item-btn" data-bs-toggle="modal"
                                                                    data-bs-target="#editClass{{$class->id}}">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</button>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete{{ $class->id }}">
                                                                    <i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{-- edit Modal  --}}
                                            <div class="modal fade" id="editClass{{$class->id}}" tabindex="-1"
                                                aria-labelledby="editClassLabel" aria-hidden="true">
                                                <form action="{{ route('classes.update', $class->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editClassLabel">Update Class
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassName" class="form-label">Class
                                                                            Name<span class="text-danger">*</span></label>
                                                                        <input name="class_name" type="text"
                                                                            class="form-control" id="ClassName"
                                                                            value="{{ $class->class_name }}"
                                                                            placeholder="Class Name">
                                                                        @error('class_name')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassNumber" class="form-label">Class
                                                                            Number<span
                                                                                class="text-danger">*</span></label>
                                                                        <input name="class_number" type="text"
                                                                            class="form-control" id="ClassNumber"
                                                                            value="{{ $class->class_number }}"
                                                                            placeholder="Class Number">
                                                                        @error('class_number')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassTeacher" class="form-label">Class
                                                                            Teacher <span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="class_teacher_id" id="ClassTeacher"
                                                                            class="form-control">
                                                                            <option>Select Class Teacher</option>
                                                                            @foreach ($teachers as $teacher)
                                                                                <option value="{{ $teacher->id }}" @if ($teacher->id == $class->class_teacher_id) selected @endif>
                                                                                    {{ $teacher->name }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('class_teacher_id')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassStart" class="form-label">Class
                                                                            Starting on<span
                                                                                class="text-danger">*</span></label>
                                                                        <input name="class_start" type="date"
                                                                            class="form-control" id="ClassStart"
                                                                            value="{{ $class->class_start }}"
                                                                            placeholder="Class Starting on">
                                                                        @error('class_start')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassEnd" class="form-label">Class
                                                                            Ending on<span
                                                                                class="text-danger">*</span></label>
                                                                        <input name="class_end" type="date"
                                                                            class="form-control" id="ClassEnd"
                                                                            value="{{ $class->class_end }}"
                                                                            placeholder="Class Ending on">
                                                                        @error('class_end')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Delete Modals -->
                                            <div id="delete{{ $class->id }}" class="modal fade" tabindex="-1"
                                                aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger pb-3">
                                                            <h5 class="modal-title text-light" id="myModalLabel">
                                                                Confirmation Message</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"> </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="fs-15">
                                                                Are You Sure To <b class="text-danger">DELETE</b>
                                                                ?
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('classes.deletes', $class->id) }}"
                                                                method="POST">
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

            </div> <!-- end col -->
        </div>
        <!-- end Position section -->
    </div>
@endsection
