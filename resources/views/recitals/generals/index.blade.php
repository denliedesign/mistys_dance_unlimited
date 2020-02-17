@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Recital Dates & Venue</h3>

            @if(count($generals) > 0)
                @foreach($generals as $general)
                    <p>{!! $general->information !!}</p>
                    @can('update', $general)
                        <div>
                            <form action="{{ route('generals.update', ['general' => $general]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/generals.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('generals.destroy', ['general' => $general->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\General::class)
                        <div class="pt-5">
                            <h2>New General</h2>
                            <form action="{{ route('generals.store', ['general' => $general]) }}" method="POST">
                                @include('recitals/generals.form')
                                <button type="submit" class="btn btn-primary">Add General</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


