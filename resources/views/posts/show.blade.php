@extends('layouts.app')

@section('title', 'Post | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5" id="show-post">
        <div class="row">
            <div class="col-md-10">
                <img src="{{ asset('/storage/' . $post->image) }}" alt="" id="main-post-img" style="max-width: 100%;">
                <h3 class="text-center py-5">{{ $post->title }}</h3>
                <p>{!! $post->content !!}</p>
            </div>
            <div class="col-md-2">
                <ul class="list-group list-group-flush">
                    @foreach($posts->take(5) as $post)
                        <li class="list-group-item">
                            <a href="/posts/{{ $post->id }}"><img src="{{ asset('/storage/' . $post->image) }}" alt="" class="img-thumbnail"></a>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
