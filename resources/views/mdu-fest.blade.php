@extends('layouts.app')

@section('title', 'MDU Fest 2021 | Misty\'s Dance Unlimited')

@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/mdu-fest-logo.jpg" alt="mdu fest logo" class="img-fluid">
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="text-center">All Things MDU Fest 2021</h3>

            <div class="row text-center my-3">
                <div class="col">
                    <a href="/images/fest-tights-guide.pdf">Tights, Shoes, & Hair Guide</a>
                </div>
                <div class="col">
                    <a href="/images/fest-show-assignments.pdf">Show Assignments</a>
                </div>
                <div class="col">
                    <a href="/images/fest-dance-portrait.pdf">Dance Portraits</a>
                </div>
                <div class="col">
                    <a href="/images/show-order.png">Show Orders</a>
                </div>
            </div>
            <p>

            @foreach($fests as $fest)
                {!! $fest->description !!}
                            @can('update', \App\Fest::class)
                                <div>
                                    <form action="{{ route('fests.update', ['fest' => $fest]) }}"
                                          method="POST" class="p-3">
                                        @method('PATCH')
                                        @include('forms.fest')

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
                @endforeach

            </p>
        </div>
    </div>


    @include('footer')

@endsection


