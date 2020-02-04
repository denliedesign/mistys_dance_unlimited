@extends('layouts.app')

@section('title', 'News | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">News</h3>
    @can('update', \App\Article::class)
        <p class="text-center"><a href="/articles/create">Create New Article</a></p>
    @endcan

    <div class="container" id="news">
        <div class="card-deck pb-5">
            @foreach($articles as $article)
                <div class="card" style="max-width: 400px">
                    <a href="/articles/{{ $article->id }}">
                        <img src="{{ asset('/storage/' . $article->newsImage) }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-title text-uppercase lead font-weight-bold">{{ $article->newsTitle }}</p>
                        <p class="card-text">{!! strip_tags(substr($article->articleTitle, 0, 125)) . '...' !!}</p>
                    </div>
                        @can('update', \App\Article::class)
                        <div class="card-footer">
                            <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                <div><a href="/articles/{{ $article->id }}/edit">Edit Article</a></div>
                                <div>
                                    <form action="/articles/{{ $article->id }}" method="POST">
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
    </div>

    @include('footer')
@endsection
