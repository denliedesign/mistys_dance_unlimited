@extends('layouts.app')

@section('title', 'Calendar of Events | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="calendar">
            <h3 class="py-5 text-center">Calendar of Events</h3>

            <div class="row">
                <div class="col-sm-8">

                    @foreach($events as $event)
                        <p>{{ $event->day->format('M d') }}@if(!empty($event->endday))<span class="text-muted"> - </span>{{ $event->endday->format('M d, Y') }}@endif<span class="text-muted"> &nbsp; </span><span class="font-weight-bold">{{ $event->happening }}</span></p>
                        @can('update', $event)
                            <div class="dropdown pb-3">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit Event
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dLabel">
                                    <div>
                                        <form action="{{ route('events.update', ['event' => $event]) }}" method="POST" class="p-3">
                                            @method('PATCH')
                                            @include('events.form')

                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </form>
                                    </div>
                                    <div>
                                        <form action="/events/{{ $event->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endcan
                    @endforeach

                    @can('update', \App\Event::class)
                        <div class="pt-5">
                            <h2>New Event</h2>
                            <form action="/events" method="POST">
                                @include('events.form')
                                <button type="submit" class="btn btn-primary">Add Event</button>
                            </form>
                        </div>
                    @endcan

                </div>
                <div class="col-sm-4">
                    <img src="images/parent-quote.png" alt="">
                </div>
            </div>

        </div>
    </div>

    @include('footer')

@endsection


