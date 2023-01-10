@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Teacher</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Teacher</a>
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
                                    <h5 class="card-title mb-0">All Teachers</h5>
                                    <a href="{{ route('teacher.create') }}" class="btn btn-primary">Add</a>
                                    <!-- Varying modal content -->
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
                                            <th>Avater</th>
                                            <th>Teacher Name</th>
                                            <th>Position</th>
                                            <th>Phone</th>
                                            {{-- <th>Status</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $key => $teacher)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $key += 1 }}</td>
                                                <td>
                                                    <img src="{{ asset('backend/assets/images/school/teacher') . '/' . $teacher->teacher_avater }}"
                                                        class="img-fluid img-thumbnail" width="60">
                                                </td>
                                                <td>{{ $teacher->name }}</td>
                                                <td>{{ $teacher->position->position_name }}</td>
                                                <td>{{ $teacher->phone_number }}</td>
                                                {{-- <td>
                                                        @if ($teacher->user->status == 'inactive')
                                                            <a href="{{ route('teacher.status', $teacher->user->id) }}" class="btn btn-danger btn-sm"> <i
                                                                    class="mdi mdi-arrow-down-thin"></i></a>
                                                        @elseif ($teacher->user->status == 'active')
                                                            <a href="{{ route('teacher.status', $teacher->user->id) }}" class="btn btn-primary btn-sm"> <i
                                                                    class="mdi mdi-arrow-up-thin"></i></a>
                                                        @endif
                                                </td> --}}
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i
                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    View</a></li>
                                                            <li>
                                                                <button type="button" class="dropdown-item edit-item-btn">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</button>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete{{ $teacher->id }}">
                                                                    <i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Delete Modals -->
                                            <div id="delete{{ $teacher->id }}" class="modal fade" tabindex="-1"
                                                aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger pb-3">
                                                            <h5 class="modal-title text-light" id="myModalLabel">
                                                                Confirmation Message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"> </button>
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
                                                            <form action="{{ route('teacher.destroy', $teacher->id) }}"
                                                                method="POST">
                                                                @csrf
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
