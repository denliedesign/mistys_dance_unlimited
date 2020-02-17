@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Individual Photos from Design Photography</h3>

            @if(count($photos) > 0)
                @foreach($photos as $photo)
                    <p>{!! $photo->information !!}</p>
                    @can('update', $photo)
                        <div>
                            <form action="{{ route('photos.update', ['photo' => $photo]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/photos.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('photos.destroy', ['photo' => $photo->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                @can('update', \App\Photo::class)
                    <div class="pt-5">
                        <h2>New Photo</h2>
                        <form action="{{ route('photos.store', ['photo' => $photo]) }}" method="POST">
                            @include('recitals/photos.form')
                            <button type="submit" class="btn btn-primary">Add Photo</button>
                        </form>
                    </div>
                @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


