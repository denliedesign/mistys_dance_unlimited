@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Safer Studio Policy Archive</h1>
        <ul>
            @foreach($updates->sortByDesc('created_at') as $update)
                <li><a href="/updates/{{ $update->id }}">{{ $update->title }}</a></li>
            @endforeach
            <li><a href="/saferstudiopolicy/9-1-20">Safer Studio Policy 9-1-20</a></li>
            <li><a href="/saferstudiopolicy/7-30-20">Safer Studio Policy 7-30-20</a></li>
            <li><a href="/saferstudiopolicy/7-28-20">Safer Studio Policy 7-28-20</a></li>
            <li><a href="/saferstudiopolicy/6-29-20">Safer Studio Policy 6-29-20</a></li>
            <li><a href="/saferstudiopolicy/6-24-20">Safer Studio Policy 6-24-20</a></li>
            <li><a href="/saferstudiopolicy/6-22-20">Safer Studio Policy 6-22-20</a></li>
            <li><a href="/saferstudiopolicy/6-17-20">Safer Studio Policy 6-17-20</a></li>
            <li><a href="/saferstudiopolicy/6-10-20">Safer Studio Policy 6-10-20</a></li>
            <li><a href="/saferstudiopolicy/5-15-20">Safer Studio Policy 5-15-20</a></li>
            <li><a href="/saferstudiopolicy/4-28-20">Safer Studio Policy 4-28-20</a></li>
            <li><a href="/saferstudiopolicy/4-15-20">Safer Studio Policy 4-15-20</a></li>
            <li><a href="/saferstudiopolicy/4-8-20">Safer Studio Policy 4-8-20</a></li>
            <li><a href="/saferstudiopolicy/3-20-20">Safer Studio Policy 3-20-20</a></li>
            <li><a href="/saferstudiopolicy/3-16-20">Safer Studio Policy 3-16-20</a></li>
            <li><a href="/saferstudiopolicy/3-13-20">Safer Studio Policy 3-13-20</a></li>
            <li><a href="/saferstudiopolicy/3-12-20">Safer Studio Policy 3-12-20</a></li>
        </ul>
    </div>
    @include('footer')
@endsection
