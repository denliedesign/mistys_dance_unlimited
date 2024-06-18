@extends('layouts.app-side-mist')

@section('title', 'Calendar of Events | Misty\'s Dance Unlimited')
@section('description', 'Join In On The Fun & Festivities At Misty\'s Dance Unlimited.')

@section('content')

    <div class="bg-white pb-5">
        <div class="container" id="calendar">
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">Calendar of Events</h1>

            <div class="row poppins">
                <div class="col-sm-8">
                    <div>

                        @foreach($events as $event)
                            <p style="width: 100%;">
                            <div style="width: 25% !important; display: inline-block;">{{ $event->day->format('M d') }}@if(!empty($event->endday))<span class="text-muted"> - </span>{{ $event->endday->format('M d, Y') }}@endif</div>
                            {{--                            <span class="text-muted"> &nbsp; </span>--}}
                            <div style="width: 70% !important; display: inline-block;"><span class="fw-bold">{{ $event->happening }}</span></div>
                            </p>
                            @can('update', $event)
                                <div class="dropdown pb-3">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </div>
                <div class="col-sm-4">
                    <img src="images/parent-quote.png" alt="">
                </div>
            </div>

        </div>
    </div>

{{--    <div class="banner-wrap d-none d-md-block">--}}
{{--        <div class="banner"></div>--}}
{{--    </div>--}}

@endsection


