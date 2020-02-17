@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Volunteer</h3>

            @if(count($volunteers) > 0)
                @foreach($volunteers as $volunteer)
                    <p>{!! $volunteer->information !!}</p>
                    @can('update', $volunteer)
                        <div>
                            <form action="{{ route('volunteers.update', ['volunteer' => $volunteer]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/volunteers.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('volunteers.destroy', ['volunteer' => $volunteer->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                @can('update', \App\Volunteer::class)
                    <div class="pt-5">
                        <h2>New Volunteer</h2>
                        <form action="{{ route('volunteers.store', ['volunteer' => $volunteer]) }}" method="POST">
                            @include('recitals/volunteers.form')
                            <button type="submit" class="btn btn-primary">Add Volunteer</button>
                        </form>
                    </div>
                @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


