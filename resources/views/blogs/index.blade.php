@extends('layouts.app-lava')

@section('title', 'Blog | Misty\'s Dance Unlimited')
@section('description', 'Latest Trends, Tips, Tricks, and Guides for Dancers')

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
            <h1 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Blog</h1>
            @can('update', \App\Blog::class)
                <p class="text-center"><a href="{{ route('blogs.create') }}">Create New Blog Post</a></p>
            @endcan
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                @foreach($blogs as $blog)
                    <div class="col d-flex justify-content-center my-3">
                        <div>
                            <a href="/blogs/{{ $blog->slug }}">
                                <img src="{{ asset('/storage/' . $blog->blog_image) }}" class="img-fluid blog-link-img shadow rounded" alt="">
                            </a>
                            @can('update', \App\Post::class)
                                <div class="">
                                    <div class="d-flex justify-content-center" style="font-size: 2em;">
                                        <div class="mx-2">
                                            <a class="text-blue" href="/blogs/{{ $blog->id }}/edit"><ion-icon name="create"></ion-icon></a>
                                        </div>
                                        <div class="mx-2">
                                            <form action="/blogs/{{ $blog->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="text-red" style="background: none; border: none;" onclick="return confirm('Are you sure?')"><ion-icon name="trash"></ion-icon></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pt-2">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
