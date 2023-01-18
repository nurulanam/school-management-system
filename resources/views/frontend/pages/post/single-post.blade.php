@extends('frontend.master')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>{{ $post->post_name }}</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/all-posts') }}">All Posts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            {{-- All Posts start --}}
            <div class="col-md-8 py-4">
                <div class="post-item py-4">
                    <img src="{{ asset('backend/assets/images/school/post/' . $post->post_banner) }}"
                        alt="" class="img-thumbnail img-fluid">
                    <h1 class="my-3">{{ $post->post_name }}</h1>
                    {!! $post->post_description !!}
                    <div class="tags">
                        <div class="d-flex">
                            <h3><b>Tags: </b>@foreach ($post->postHasTags as $tag )
                                <span class="badge bg-success">{{ $tag->tag_name }}</span>
                            @endforeach</h3>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3>Comment</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group mt-3">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" placeholder="yourmail@mail.com">
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-label">Comment <span class="text-danger">*</span></label>
                                    <textarea name="comment" class="form-control" cols="20" rows="5" placeholder="Comment Here *"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <button class="default-btn-1 btn">Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="latest-post py-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($latestPosts as $latestPost )
                                    <div class="col-md-4">
                                        <a href="{{ route('frontend.post.single', $latestPost->id) }}">
                                            <img src="{{ asset('backend/assets/images/school/post/' . $latestPost->post_banner) }}" alt="" >
                                        </a>
                                        <a href="{{ route('frontend.post.single', $latestPost->id) }}"><h5 class="py-3">{{ Str::limit($latestPost->post_name, 25, '...') }}</h5></a>
                                        {!! Str::limit($latestPost->post_description, 50, '...') !!}
                                        <a class="btn btn-sm btn-primary" href="{{ route('frontend.post.single', $post->id) }}">Read More</a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- All Posts end  --}}
            {{-- sidebar  --}}
            <div class="col-md-4">

            </div>
            {{-- sidebar end  --}}
        </div>
    </div>
@endsection
