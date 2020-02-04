@extends('layouts.app')

@section('title', 'News Article | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">{{ $article->articleTitle }}</h3>
    <div class="container pb-5">
        <p>{!! $article->articleContent !!}</p>
    </div>


@include('footer')
@endsection

<style>
    h2 {
        background: #008cc0;
        color: white;
        padding: 5px;
        border-radius: 5px;
        box-shadow: 2px 2px 3px rgba(0,0,0,0.6),
                    -2px -2px 6px rgba(255,255,255,1);
    }
</style>
