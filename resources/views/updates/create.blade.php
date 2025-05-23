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
                <form action="/updates" method="POST">
                    @include('forms.update')

                    <button type="submit" class="btn btn-primary">Add Policy</button>
                </form>
            </div>
        </div>
    </div>

    @include('footer')

@endsection

