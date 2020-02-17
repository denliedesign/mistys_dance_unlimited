@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Handbook</h3>

            @if(count($handbooks) > 0)
                @foreach($handbooks as $handbook)
                    <p>{!! $handbook->information !!}</p>
                    @can('update', $handbook)
                        <div>
                            <form action="{{ route('handbooks.update', ['handbook' => $handbook]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/handbooks.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('handbooks.destroy', ['handbook' => $handbook->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Handbook::class)
                        <div class="pt-5">
                            <h2>New Handbook</h2>
                            <form action="{{ route('handbooks.store', ['handbook' => $handbook]) }}" method="POST">
                                @include('recitals/handbooks.form')
                                <button type="submit" class="btn btn-primary">Add Handbook</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


