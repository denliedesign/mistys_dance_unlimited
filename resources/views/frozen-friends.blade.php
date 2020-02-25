@extends('layouts.app')

@section('title', 'Frozen Friends | Misty\'s Dance Unlimited')

@section('content')

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <h3 class="text-center pb-5">Frozen Friends</h3>
            <form action="{{ route('frozen-friends.store') }}" method="POST">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="parentName">Parent Name</label>
                    <div class="col-sm-8">
                        <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
                    </div>
                    <div>{{ $errors->first('parentName') }}</div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="email">Email</label>
                    <div class="col-sm-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div>{{ $errors->first('email') }}</div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                    </div>
                    <div>{{ $errors->first('phone') }}</div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="studentName">Student Name</label>
                    <div class="col-sm-8">
                        <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
                    </div>
                    <div>{{ $errors->first('parentName') }}</div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="birthdate">Birthdate</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                    </div>
                </div>
                @csrf
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger mt-2">Enroll Now</button>
                </div>
            </form>
        </div>
    </div>


    @include('footer')

@endsection
