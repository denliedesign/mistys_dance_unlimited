@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="py-5 text-center">Daddy Daughter Dance</h3>

            @if(count($seniors) > 0)
                @foreach($seniors as $senior)
                    <p>{!! $senior->information !!}</p>
                    @can('update', $senior)
                        <div>
                            <form action="{{ route('seniors.update', ['senior' => $senior]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/seniors.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('seniors.destroy', ['senior' => $senior->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Senior::class)
                        <div class="pt-5">
                            <h2>New Dance</h2>
                            <form action="{{ route('seniors.store', ['senior' => $senior]) }}" method="POST">
                                @include('recitals/seniors.form')
                                <button type="submit" class="btn btn-primary">Add Dance</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


