@extends('layouts.app')

@section('title', 'Everything Recital | Misty\'s Dance Unlimited')

@section('content')

    <div class="recital-banner-wrap">
        <div class="recital-banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="py-5 text-center">Ticket Info</h3>

            @if(count($tickets) > 0)
                @foreach($tickets as $ticket)
                    <p>{!! $ticket->information !!}</p>
                    @can('update', $ticket)
                        <div>
                            <form action="{{ route('tickets.update', ['ticket' => $ticket]) }}" method="POST" class="p-3">
                                @method('PATCH')
                                @include('recitals/tickets.form')

                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            @else

                    @can('update', \App\Ticket::class)
                        <div class="pt-5">
                            <h2>New Ticket</h2>
                            <form action="{{ route('tickets.store', ['ticket' => $ticket]) }}" method="POST">
                                @include('recitals/tickets.form')
                                <button type="submit" class="btn btn-primary">Add Ticket</button>
                            </form>
                        </div>
                    @endcan
            @endif
        </div>
    </div>


    @include('footer')

@endsection


