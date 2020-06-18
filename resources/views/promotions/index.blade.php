@extends('layouts.app')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <h3 class="text-center py-5">Tutu Fun Run</h3>
    @can('update', \App\Promotion::class)
        <p class="text-center"><a href="promotions/create">New Promotion</a></p>
    @endcan

    @foreach($promotions as $promotion)
        @if($promotion->image)
            <div class="promo-bg p-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img src="{{ asset('/storage/' . $promotion->image) }}" alt="" style="max-height: 400px">
                    </div>
                </div>
                @endif
                <div>
                    <p class="text-center mt-3 lead font-weight-bold">{{ $promotion->name }}</p>
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

    @include('footer')
@endsection

<style>
    .promo-bg:nth-child(even) {
        background: aliceblue;
    }
</style>
