@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="py-5 text-center">Dress Rehearsal</h3>

            @if(count($rehearsals) > 0)
                @foreach($rehearsals as $rehearsal)
                    <p>{!! $rehearsal->information !!}</p>
                    @can('update', $rehearsal)
                        <div>
                            <form action="{{ route('rehearsals.update', ['rehearsal' => $rehearsal]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/rehearsals.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('rehearsals.destroy', ['rehearsal' => $rehearsal->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Rehearsal::class)
                        <div class="pt-5">
                            <h2>New Rehearsal</h2>
                            <form action="{{ route('rehearsals.store', ['rehearsal' => $rehearsal]) }}" method="POST">
                                @include('recitals/rehearsals.form')
                                <button type="submit" class="btn btn-primary">Add Rehearsal</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


