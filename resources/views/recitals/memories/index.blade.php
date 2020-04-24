@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <a href="/recitals#everythingrecital">Back to Recital Page</a>
            <h3 class="py-5 text-center">Recital Memory T-shirt & Puppy Order Form</h3>

            @if(count($memories) > 0)
                @foreach($memories as $memory)
                    <p>{!! $memory->information !!}</p>
                    @can('update', $memory)
                        <div>
                            <form action="{{ route('memories.update', ['memory' => $memory]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/memories.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('memories.destroy', ['memory' => $memory->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Memory::class)
                        <div class="pt-5">
                            <h2>New Memory</h2>
                            <form action="{{ route('memories.store', ['memory' => $memory]) }}" method="POST">
                                @include('recitals/memories.form')
                                <button type="submit" class="btn btn-primary">Add Memory</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


