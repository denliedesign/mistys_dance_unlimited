@extends('layouts.app-side-mist')

@section('title', 'Community Programs | Misty\'s Dance Unlimited')

@section('content')

    <div class="bg-white py-5 poppins mx-4">
        <img src="{{ asset('/storage/' . $article->newsImage) }}" alt="" class="img-fluid" style="max-width: 400px; width: 100%; height: auto;">
        <h1 class="born-7 poppins text-muted pt-5 px-0 m-0" style="font-size: 45px;">{{ $article->newsTitle }}</h1>
        <h1 class="born-7 poppins fw-bold pb-5 px-0 m-0" style="font-size: 45px;">{{ $article->articleTitle }}</h1>
        <div class="pb-5 poppins">
            <p>{!! $article->articleContent !!}</p>
        </div>

        @if($article->id == 42)
           <div class="mx-4">
               <div class="row">
                   <div class="col-sm py-2"><img src="/images/a1.png" alt="" class="img-fluid"></div>
                   <div class="col-sm py-2"><img src="/images/a2.jpg" alt="" class="img-fluid"></div>
                   <div class="col-sm py-2"><img src="/images/a3.png" alt="" class="img-fluid"></div>
               </div>
           </div>
        @endif
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
