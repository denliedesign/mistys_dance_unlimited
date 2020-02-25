@extends('layouts.app')

@section('title', 'Frozen Friends | Misty\'s Dance Unlimited')

@section('content')

    <div class="jumbotron jumbotron-fluid bg-aliceblue">
        <div class="container">
            <img src="images/frozen-friends.png" class="pb-5" alt="" style="width: 100%;">
            <h3 class="text-center pb-5">Frozen Friends Musical Theater Mini Session</h3>

            <p>
                Journey to Arendelle and beyond!  We'll dance, sing and go on a magical adventure. Let your imagination run wild as you pretend to be your favorite characters from the hit movies. Dazzle with your ice powers as Elsa, climb snowy mountains as Kristoff, ride through the wilderness as Sven, discover the Enchanted Forest as Anna, and more! A short presentation for families at the end is the "icing" on the cake!
                <br><br>
                Here's all the details:
                <br><br>
                <strong>Dates:</strong> March 2 - April 27 (No class on April 6)
                <br><strong>Class Time:</strong> Mondays 5:30-6:00 PM
                <br><strong>Ages:</strong> 4-6
                <br><strong>Teacher:</strong> Miss Denise
                <br><strong>Tuition:</strong> $39 per month (Due March 1st and April 1st)
                <br><strong>Attire:</strong> Your favorite Frozen costume and ballet shoes
                <br><strong>Performance:</strong> Special in-house performance for families on the last day of class
                <br><br>
                Sign Up your dancer by filling out this short form.  Miss Kris will be in touch to finalize payment and enrollment:)
                <br><br>
            </p>

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
