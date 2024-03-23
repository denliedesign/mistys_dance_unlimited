@extends('layouts.app-lava')

@section('title', $blog->seo_title )
@section('description', $blog->seo_description )

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('/storage/' . $blog->blog_image) }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <h1 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">{{ $blog->blog_title }}</h1>
            <p class="font-syne" style="font-size: 22px;">
                {!! $blog->blog_content !!}
            </p>
            <hr class="my-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                @foreach($recentBlogs as $recentBlog)
                    <div class="col">
                        <a href="{{ route('blogs.show', $recentBlog->slug) }}">
                            <img src="{{ asset('/storage/' . $recentBlog->blog_image) }}" class="img-fluid blog-link-img shadow rounded" alt="...">
                        </a>
                    </div>
                @endforeach

{{--                <div class="col">--}}
{{--                    <a href="">--}}
{{--                        <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="...">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="">--}}
{{--                        <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="...">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="">--}}
{{--                        <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="...">--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>

            <div class="d-flex justify-content-end mt-5">
                <a href="/blogs" class="nav-link">
                    <div class="btn btn-lg btn-danger shadow">Back to Blog</div>
                </a>
            </div>
        </div>
@endsection
