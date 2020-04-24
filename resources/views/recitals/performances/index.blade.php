@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Red Carpet Recital Experience</h3>

            @if(count($performances) > 0)
                @foreach($performances as $performance)
                    <p>{!! $performance->information !!}</p>
                    @can('update', $performance)
                        <div>
                            <form action="{{ route('performances.update', ['performance' => $performance]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/performances.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('performances.destroy', ['performance' => $performance->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Performance::class)
                        <div class="pt-5">
                            <h2>New Show</h2>
                            <form action="{{ route('performances.store', ['performance' => $performance]) }}" method="POST">
                                @include('recitals/performances.form')
                                <button type="submit" class="btn btn-primary">Add Show</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


