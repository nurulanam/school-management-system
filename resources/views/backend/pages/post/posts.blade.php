@extends('backend.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Post</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Post</a>
                            </li>
                            <li class="breadcrumb-item active">Tags</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- start tag section-->
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>Posts</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addPost">Add Post</button>
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
                                            <th>Banner</th>
                                            <th>Post title</th>
                                            <th>Tags</th>
                                            <th>Created By</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $key => $post)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $key += 1 }}</td>
                                                <td><img src="{{ asset('backend/assets/images/school/post/'.$post->post_banner) }}" class="img-fluid img-thumbnail" width="80px"></td>
                                                <td>{{ $post->post_name }}</td>
                                                <td>
                                                    {{-- @foreach ($post->postHasTags as $postHasTag )
                                                        <span class="badge bg-primary">{{ $postHasTag->tag_id }}</span>
                                                    @endforeach --}}
                                                    @foreach ($post->postHasTags as $tag )
                                                        <span class="badge bg-success">{{ $tag->tag_name }}</span>
                                                    @endforeach
                                                <td>{{ $post->created_by }}</td>
                                                <td>
                                                    @if ($post->status == 'draft')
                                                        <a href="{{  route('posts.status', $post->id) }}"
                                                            class="btn btn-danger btn-sm" title="{{ $post->status }}"> <i
                                                                class="mdi mdi-arrow-down-thin"></i></a>
                                                    @elseif ($post->status == 'publish')
                                                        <a href="{{ route('posts.status', $post->id) }}"
                                                            class="btn btn-primary btn-sm" title="{{ $post->status }}"> <i
                                                                class="mdi mdi-arrow-up-thin"></i></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <button type="button" class="dropdown-item edit-item-btn" data-bs-toggle="modal"
                                                                data-bs-target="#editTag{{ $post->id }}">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</button>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete{{ $post->id }}">
                                                                    <i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Edit Tag Modal -->
                                                    {{-- <div id="editTag{{ $tag->id }}" class="modal fade" tabindex="-1"
                                                        aria-labelledby="editTagLabel" aria-hidden="true"
                                                        style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editTagLabel">Edit Tag</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="tag_name" class="form-label">Tag
                                                                                Name</label>
                                                                            <input type="text" name="tag_name"
                                                                                id="tag_name" value="{{ $tag->tag_name }}" class="form-control"
                                                                                placeholder="Tag Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-primary mt-3">Update
                                                                            Tag</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <!-- Delete Tag Modal -->
                                                    <div id="delete{{ $post->id }}" class="modal fade" tabindex="-1"
                                                        aria-labelledby="deleteLabel" aria-hidden="true"
                                                        style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteLabel">Delete Tag</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <div class="modal-body">
                                                                        <p class="text-danger">Are You Sure to Delete {{ $post->post_name }}</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-danger mt-3">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Add Tag Modal -->
                <div id="addPost" class="modal fade" tabindex="-1" aria-labelledby="addPostLabel" aria-hidden="true"
                    style="display: none;">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addPostLabel">Add post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="post_banner" class="form-label">Post Banner</label>
                                                <input type="file" name="post_banner" id="post_banner"
                                                    class="form-control" placeholder="Post Banner" onchange="loadPreview(this);">
                                                @error('post_banner')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="post_name" class="form-label">Post Title</label>
                                                <input type="text" name="post_name" id="post_name" value="{{ old('post_name') }}" class="form-control"
                                                    placeholder="Post Name">
                                                @error('post_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="post_description" class="form-label">Post Description</label>
                                                <textarea name="post_description" id="post_description"
                                                    class="form-control ckeditor-classic" placeholder="Post Description"></textarea>
                                                @error('post_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="" class="form-label">Select Tags</label>
                                                <select class="js-example-basic-multiple form-control" name="tag_id[]"
                                                    multiple="multiple" data-bs-spy="scroll">
                                                    <optgroup label="Select Tags">
                                                        @foreach ($tags as $tag)
                                                            <option value="{{ $tag->id }}" @if (old('tag_id') == $tag->id) {{ selected }} @endif>{{ $tag->tag_name }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                                @error('tag_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="publish" selected>Publish</option>
                                                    <option value="draft">Draft</option>
                                                </select>
                                                @error('status')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <img id="preview_img" src="https://via.placeholder.com/300x200/3B3486/FFFFFF/?text=Post Banner"
                                                    alt="" class="img-fluid img-thumbnail w-100">
                                                <script>
                                                    $(document).ready(() => {
                                                        $('#post_banner').change(function() {
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary mt-3">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
@section('extraJS')
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('backend') }}/assets/js/pages/select2.init.js">
        < /script
    @endsection
