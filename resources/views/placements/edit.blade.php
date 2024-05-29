@extends('layouts.app-place')
@section('content')

    <div class="container">
        <h1>Edit Dancer</h1>
        <form action="{{ route('placements.update', $placement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" name="lastName" class="form-control" value="{{ $placement->firstName }}">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" class="form-control" value="{{ $placement->lastName }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $placement->email }}" required>
            </div>
            <div class="form-group">
                <label for="ballet">Ballet:</label>
                <input type="text" name="ballet" class="form-control" value="{{ $placement->ballet }}">
            </div>
            <div class="form-group">
                <label for="tap">Tap:</label>
                <input type="text" name="tap" class="form-control" value="{{ $placement->tap }}">
            </div>
            <div class="form-group">
                <label for="jazz">Jazz:</label>
                <input type="text" name="jazz" class="form-control" value="{{ $placement->jazz }}">
            </div>
            <div class="form-group">
                <label for="pointe">Pointe:</label>
                <input type="text" name="pointe" class="form-control" value="{{ $placement->pointe }}">
            </div>
            <div class="form-group">
                <label for="acro">Acro:</label>
                <input type="text" name="acro" class="form-control" value="{{ $placement->acro }}">
            </div>
            <div class="form-group">
                <label for="recommendation">Recommendation:</label>
                <textarea name="recommendation" class="form-control">{{ $placement->recommendation }}</textarea>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" class="form-control">{{ $placement->comment }}</textarea>
            </div>
            {{--            <div class="form-group">--}}
            {{--                <label for="age">Age:</label>--}}
            {{--                <input type="date" name="age" class="form-control" value="{{ $placement->age }}">--}}
            {{--            </div>--}}
            <button type="submit" class="btn button-blue mt-1">Update</button>
        </form>
    </div>

@endsection
