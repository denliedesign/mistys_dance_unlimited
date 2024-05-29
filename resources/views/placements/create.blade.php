@extends('layouts.app-place')
@section('content')

    <div class="container">
        <h1>Add New Dancer</h1>
        <form action="{{ route('placements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ballet">Ballet:</label>
                <input type="text" name="ballet" class="form-control">
            </div>
            <div class="form-group">
                <label for="tap">Tap:</label>
                <input type="text" name="tap" class="form-control">
            </div>
            <div class="form-group">
                <label for="jazz">Jazz:</label>
                <input type="text" name="jazz" class="form-control">
            </div>
            <div class="form-group">
                <label for="pointe">Pointe:</label>
                <input type="text" name="pointe" class="form-control">
            </div>
            <div class="form-group">
                <label for="acro">Acro:</label>
                <input type="text" name="acro" class="form-control">
            </div>
            <div class="form-group">
                <label for="recommendation">Recommendation:</label>
                <textarea name="recommendation" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>
            {{--            <div class="form-group">--}}
            {{--                <label for="age">Age:</label>--}}
            {{--                <input type="date" name="age" class="form-control">--}}
            {{--            </div>--}}
            <button type="submit" class="btn button-blue mt-1">Add</button>
        </form>
    </div>

@endsection
