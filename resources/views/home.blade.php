@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-center">You are logged in! <br><a href="/students">View Your Student's Placement</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection


