@extends('layouts.app')

@section('title', 'Blog | Misty\'s Dance Unlimited')
@section('description', 'Latest Trends, Tips, Tricks, and Guides for Dancers')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="bg-aliceblue">
        <h3 class="text-center py-5">Blog</h3>
        @can('update', \App\Post::class)
            <p class="text-center"><a href="/posts/create">Create New Post</a></p>
        @endcan

        <div class="container pb-5" id="blog">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach($posts as $post)
                    <div class="card mx-2 mb-4" style="max-width: 350px">
                        <a href="/posts/{{ $post->id }}">
                            <img src="{{ asset('/storage/' . $post->image) }}" class="card-img-top" alt="...">
                        </a>
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title text-center text-uppercase font-weight-bold">{{ $post->title }}</h5>--}}
{{--                            <p class="card-text">{!! strip_tags(substr($post->content, 0, 125)) . '...' !!}</p>--}}
{{--                        </div>--}}
                        @can('update', \App\Post::class)
                        <div class="card-footer">
{{--                            <p class="card-text"><small>{{ $post->shown->format('M d, Y') }}</small></p>--}}

                                <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                    <div><a href="/posts/{{ $post->id }}/edit">Edit Post</a></div>
                                    <div>
                                        <form action="/posts/{{ $post->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>

                        </div>
                        @endcan
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pt-2">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    @include('footer')
@endsection
