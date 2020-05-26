@extends('layouts.placement-app')

@section('title', 'Add New Student')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Add New Student</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <form action="/students" method="POST" enctype="multipart/form-data">
                    @include('students.form')

                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
        </div>
    </div>

@endsection
