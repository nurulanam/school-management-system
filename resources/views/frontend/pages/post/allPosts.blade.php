@extends('frontend.master')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Latest Posts</h1>
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
                @foreach ($postInfo as $post)
                    <div class="post-item py-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('backend/assets/images/school/post/' . $post->post_banner) }}"
                                    alt="" class="img-thumbnail img-fluid" width="200px">
                            </div>
                            <div class="col-sm-8">
                                <div class="post-item-content">
                                    <h2>{{ $post->post_name }}</h2>
                                    {!! Str::limit($post->post_description, 145, '...') !!}
                                    <a class="btn btn-sm btn-primary" href="{{ route('frontend.post.single', $post->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $postInfo->links(); }}
            </div>
            {{-- All Posts end  --}}
            {{-- sidebar  --}}
            <div class="col-md-4">

            </div>
            {{-- sidebar end  --}}
        </div>
    </div>
@endsection
