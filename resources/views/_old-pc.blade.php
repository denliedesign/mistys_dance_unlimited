@extends('layouts.app-lava')
@section('title', 'Audition Info | Misty\'s Dance Unlimited')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="container" id="adult">
            {{--        <a class="text-decoration-none" href="/images/pg.pdf" target="_blank"><h3 class="py-5 text-center">Audition Info</h3></a>--}}
            {{--        <div class="text-center d-flex justify-content-center">--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSea2TA8tTUqBxQDWOKCE9Mtc2AlAV0Aea8xiiwRblmZi0S5rQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Pre-Pro Ballet Sign Up</button></a>--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeD9_U29AsvKHkZ4oFT0Erbji3kQANPuqGGZ3Ofpz9LGwsTvQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Performing Groups Sign Up</button></a>--}}
            {{--        </div>--}}
            {{--        <img src="/images/pg-benefits.jpg" alt="performing benefits" class="img-fluid">--}}
            {{--        <div class="text-center d-flex justify-content-center">--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSea2TA8tTUqBxQDWOKCE9Mtc2AlAV0Aea8xiiwRblmZi0S5rQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Pre-Pro Ballet Sign Up</button></a>--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeD9_U29AsvKHkZ4oFT0Erbji3kQANPuqGGZ3Ofpz9LGwsTvQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Performing Groups Sign Up</button></a>--}}
            {{--        </div>--}}
            {{--        <img src="/images/pg-audition-info.jpg" alt="audition info" class="img-fluid">--}}
            {{--        <div class="text-center d-flex justify-content-center">--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSea2TA8tTUqBxQDWOKCE9Mtc2AlAV0Aea8xiiwRblmZi0S5rQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Pre-Pro Ballet Sign Up</button></a>--}}
            {{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeD9_U29AsvKHkZ4oFT0Erbji3kQANPuqGGZ3Ofpz9LGwsTvQ/viewform?gxids=7628" target="_blank"><button class="btn btn-danger btn-lg mx-1">Performing Groups Sign Up</button></a>--}}
            {{--        </div>--}}

            <h1 class="text-center py-5">
                MDU 2023-24 Performing Groups, Ballet La Crosse and Pre-Professional Ballet Auditions
            </h1>
            <div class="d-flex justify-content-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSda2Kf5gJ5Xz5whMNA918d3V5DFKUOa7qKL7o3x6yK4kGln4w/viewform?usp=sf_link" target="_blank">
                    <button class="btn btn-danger btn-lg">Dates, Details, & Sign Up Form</button>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="d-flex justify-content-center">
                        <img src="/images/pg-benefits.jpg" alt="benefits of pg" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="d-flex justify-content-center my-5">
                        <img src="/images/23-audition-2.png" alt="pre-audition meeting dancers" style="max-width: 400px; height: auto;">
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
