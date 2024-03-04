@extends('layouts.app-lava')

@section('title', 'Blog | Misty\'s Dance Unlimited')
@section('description', 'Latest Trends, Tips, Tricks, and Guides for Dancers')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h1 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Blog</h1>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col">
                <a href="/posts/show" alt="SEO TITLE WHICH IS SLUG HERE">
                    <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="NEED IMG UPLOAD AND SEO IMG NAME">
                </a>
            </div>
            <div class="col">
                <a href="/posts/show" alt="SEO TITLE WHICH IS SLUG HERE">
                    <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="NEED IMG UPLOAD AND SEO IMG NAME">
                </a>
            </div>
            <div class="col">
                <a href="/posts/show" alt="SEO TITLE WHICH IS SLUG HERE">
                    <img src="/images-lava/blog-1.png" class="img-fluid blog-link-img shadow rounded" alt="NEED IMG UPLOAD AND SEO IMG NAME">
                </a>
            </div>
        </div>
    </div>
@endsection
