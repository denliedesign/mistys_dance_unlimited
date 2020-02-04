@extends('layouts.app')

@section('title', 'Free Trial')

@section('content')

    <h1>Your First Class Free</h1>

    <form action="{{ route('trial.store') }}" method="POST">
        <div class="form-group">
            <label for="parentName">Parent Name</label>
            <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
            <div>{{ $errors->first('parentName') }}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
            <div>{{ $errors->first('phone') }}</div>
        </div>
        <div class="form-group">
            <label for="studentName">Student Name</label>
            <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
            <div>{{ $errors->first('parentName') }}</div>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" required>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Claim Offer</button>
    </form>

@endsection
