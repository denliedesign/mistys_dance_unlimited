@extends('layouts.app-lava')

@section('title', 'Post | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white py-5">
        <div class="container" id="show-post">
            <div class="row">
                <div class="col-md-10">
                    <img src="{{ asset('/storage/' . $post->image) }}" alt="" id="main-post-img" class="img-fluid shadow rounded">
                    <h3 class="text-center py-5">{{ $post->title }}</h3>
                    <p>{!! $post->content !!}</p>
                </div>
                <div class="col-md-2">
                    <ul class="list-group list-group-flush">
                        @foreach($posts as $post)
                            <li class="list-group-item">
                                <a href="/posts/{{ $post->slug }}">
                                    <img src="{{ asset('/storage/' . $post->image) }}" alt="" class="img-thumbnail">
                                </a>
                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
