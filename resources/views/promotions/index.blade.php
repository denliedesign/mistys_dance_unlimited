@extends('layouts.vanilla')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white pb-5">

        <h3 class="text-center py-5">Promotions</h3>
        @can('update', \App\Promotion::class)
            <p class="text-center"><a href="promotions/create">New Promotion</a></p>
        @endcan

        @foreach($promotions->reverse() as $promotion)
            @if($promotion->image)
                <div class="promo-bg p-5">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ asset('/storage/' . $promotion->image) }}" alt="" style="max-height: 400px" class="img-fluid">
                        </div>
                    </div>
                    @endif
                    <div>
                        <p class="text-center mt-3 lead fw-bold">{{ $promotion->name }}</p>
                        <div class="container text-center">
                            <p class="text-center">{!! $promotion->description !!}</p>
                        </div>
                    </div>
                    @can('update', $promotion)
                        <div class="admin-controls d-flex align-items-center justify-content-center">
                            <div><a href="/promotions/{{ $promotion->id }}/edit">Edit</a></div>

                            <div>
                                <form action="/promotions/{{ $promotion->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endcan
                </div>
                @endforeach
                <div class="d-flex justify-content-center pt-2">
                    {{ $promotions->links() }}
                </div>
    </div>


    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection

<style>
    .promo-bg:nth-child(even) {
        background: aliceblue;
    }
</style>
