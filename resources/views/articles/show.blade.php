@extends('layouts.vanilla')

@section('title', 'News Article | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white py-5">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('/storage/' . $article->newsImage) }}" alt="" class="img-fluid" style="max-width: 400px; height: auto;">
        </div>
        <h3 class="text-center pt-5">{{ $article->newsTitle }}</h3>
        <h3 class="text-center pb-5">{{ $article->articleTitle }}</h3>
        <div class="container pb-5">
            <p>{!! $article->articleContent !!}</p>
        </div>

        @if($article->id == 42)
           <div class="container">
               <div class="row">
                   <div class="col-sm py-2"><img src="/images/a1.png" alt="" class="img-fluid"></div>
                   <div class="col-sm py-2"><img src="/images/a2.jpg" alt="" class="img-fluid"></div>
                   <div class="col-sm py-2"><img src="/images/a3.png" alt="" class="img-fluid"></div>
               </div>
           </div>
        @endif
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

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
