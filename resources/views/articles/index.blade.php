@extends('layouts.app-side-mist')

@section('title', 'News | Misty\'s Dance Unlimited')
@section('description', 'Keep Up To Date With The Latest News From MDU!')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-center py-5 mx-5">
            <div>
                @can('update', \App\Video::class)
                    <p class="text-center"><a class="text-dark" href="/videos/create">Add New Video</a></p>
                @endcan
                @foreach($videos as $video)
                    <div>{!! $video->embed !!}</div>
                    @can('update', \App\Video::class)
                        <div class="d-flex justify-content-center">
                            <form action="/videos/{{ $video->id }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-4" type="submit" style="border: 1px solid white;">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            </div>
        </div>
    </div>

{{--    <div class="banner-wrap d-none d-md-block">--}}
{{--        <div class="banner"></div>--}}
{{--    </div>--}}

    <div class="bg-white pb-5 poppins">
        <h1 class="born-7 text-center poppins fw-bold p-0 m-0" style="font-size: 45px;">News</h1>
    @can('update', \App\Article::class)
            <p class="text-center"><a href="/articles/create">Create New Article</a></p>
        @endcan

        <div class="container" id="news">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($articles as $article)
                    <div class="col-sm p-2">
                        <div class="card" style="max-width: 400px">
                            <a href="/articles/{{ $article->id }}">
                                <img src="{{ asset('/storage/' . $article->newsImage) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-title text-uppercase lead fw-bold">{{ $article->newsTitle }}</p>
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
