@extends('layouts.app')

@section('title', 'Audition Info | Misty\'s Dance Unlimited')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container" id="adult">
            <a href="/images/pg.pdf" target="_blank"><h3 class="py-5 text-center">Audition Info</h3></a>
            <div class="text-center">
                <a target="_blank"><button class="btn btn-danger btn-lg">Fill Out Form</button></a>
            </div>
            <img src="/images/pg-benefits.jpg" alt="performing benefits" class="img-fluid">
            <div class="text-center">
                <a target="_blank"><button class="btn btn-danger btn-lg">Fill Out Form</button></a>
            </div>
            <img src="/images/pg-audition-info.jpg" alt="audition info" class="img-fluid">
            <div class="text-center">
                <a target="_blank"><button class="btn btn-danger btn-lg">Fill Out Form</button></a>
            </div>
        </div>
    </div>



    @include('footer')
@endsection
