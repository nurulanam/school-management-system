@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Subject</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Subject</a>
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
                                    <h5 class="card-title mb-0">All Subjects</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addSubject">Add</button>
                                    <!-- Varying modal content -->
                                </div>

                                {{-- Add Subject Modal  --}}
                                <div class="modal fade" id="addSubject" tabindex="-1" aria-labelledby="addSubjectLabel"
                                    aria-hidden="true">
                                    <form action="{{ route('subject.store') }}" method="post">
                                        @csrf
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addSubjectLabel">Add Subject
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="ClassId" class="form-label">Class<span
                                                                    class="text-danger">*</span></label>
                                                            <select name="class_id" id="ClassId"
                                                                class="form-control">
                                                                <option>Select Class</option>
                                                                @foreach ($classes as $class)
                                                                    <option value="{{ $class->id }}">{{ $class->class_name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            @error('class_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="SubjectName" class="form-label">Subject Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input name="subject_name" type="text" class="form-control"
                                                                id="SubjectName" value="{{ old('subject_name') }}"
                                                                placeholder="Subject Name">
                                                            @error('subject_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="TeacherId" class="form-label">Class Teacher <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="teacher_id" id="TeacherId"
                                                                class="form-control">
                                                                <option>Select Teacher</option>
                                                                @foreach ($teachers as $teacher)
                                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            @error('teacher_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="BookName" class="form-label">Book Name
                                                                on<span class="text-danger">*</span></label>
                                                            <input name="book_name" type="text" class="form-control"
                                                                id="ClassStart" value="{{ old('book_name') }}"
                                                                placeholder="Book Name">
                                                            @error('book_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
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
                                            <th>Class Name</th>
                                            <th>Subject Name</th>
                                            <th>Teacher Name</th>
                                            <th>Book Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subjects as $key => $subject)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $key += 1 }}</td>
                                                <td>{{ $subject->className->class_name }}</td>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>{{ $subject->teacherName->name }}</td>
                                                <td>{{ $subject->book_name }}</td>
                                                <td>
                                                    @if ($subject->status == 'inactive')
                                                        <a href="{{ route('subject.status', $subject->id) }}"
                                                            class="btn btn-danger btn-sm"> <i
                                                                class="mdi mdi-arrow-down-thin"></i></a>
                                                    @elseif ($subject->status == 'active')
                                                        <a href="{{ route('subject.status', $subject->id) }}"
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
                                                                    data-bs-target="#editSubject{{$subject->id}}">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</button>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete{{ $subject->id }}">
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
                                            <div class="modal fade" id="editSubject{{$subject->id}}" tabindex="-1"
                                                aria-labelledby="editSubjectLabel" aria-hidden="true">
                                                <form action="{{ route('subject.updates', $subject->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateSubjectLabel">Update Subject
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="ClassId" class="form-label">Class<span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="class_id" id="ClassId"
                                                                            class="form-control">
                                                                            <option>Select Class</option>
                                                                            @foreach ($classes as $class)
                                                                                <option value="{{ $class->id }}" @if ($class->id == $subject->class_id)
                                                                                    selected
                                                                                @endif>{{ $class->class_name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('class_id')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="SubjectName" class="form-label">Subject Name<span
                                                                                class="text-danger">*</span></label>
                                                                        <input name="subject_name" type="text" class="form-control"
                                                                            id="SubjectName" value="{{ $subject->subject_name }}"
                                                                            placeholder="Subject Name">
                                                                        @error('subject_name')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="TeacherId" class="form-label">Class Teacher <span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="teacher_id" id="TeacherId"
                                                                            class="form-control">
                                                                            <option>Select Teacher</option>
                                                                            @foreach ($teachers as $teacher)
                                                                                <option value="{{ $teacher->id }}"  @if ($teacher->id == $subject->teacher_id)
                                                                                    selected
                                                                                @endif>{{ $teacher->name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('teacher_id')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="BookName" class="form-label">Book Name
                                                                            on<span class="text-danger">*</span></label>
                                                                        <input name="book_name" type="text" class="form-control"
                                                                            id="ClassStart" value="{{ $subject->book_name }}"
                                                                            placeholder="Book Name">
                                                                        @error('book_name')
                                                                            <span class="text-danger">{{ $message }}</span>
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
                                            <div id="delete{{ $subject->id }}" class="modal fade" tabindex="-1"
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
                                                            <form action="{{ route('subject.deletes', $subject->id) }}"
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
