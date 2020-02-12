@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="py-5 text-center">Business Ads</h3>

            @if(count($ads) > 0)
                @foreach($ads as $ad)
                    <p>{!! $ad->information !!}</p>
                    @can('update', $ad)
                        <div>
                            <form action="{{ route('ads.update', ['ad' => $ad]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/ads.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('ads.destroy', ['ad' => $ad->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Ad::class)
                        <div class="pt-5">
                            <h2>New Ad</h2>
                            <form action="{{ route('ads.store', ['ad' => $ad]) }}" method="POST">
                                @include('recitals/ads.form')
                                <button type="submit" class="btn btn-primary">Add Ad</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


