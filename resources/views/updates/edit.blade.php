@extends('layouts.app')

@section('title', 'Add New Promotion')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="py-5 text-center">Add New Safer Studio Policy</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @can('update', \App\Update::class)
                    <div>
                        <form action="{{ route('updates.update', ['update' => $update]) }}"
                              method="POST" class="p-3">
                            @method('PATCH')
                            @include('forms.update')

                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                @endcan
            </div>
        </div>
    </div>

    @include('footer')

@endsection
