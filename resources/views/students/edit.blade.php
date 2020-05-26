@extends('layouts.placement-app')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <form action="{{ route('students.update', ['student' => $student]) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @include('students.form')

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection
