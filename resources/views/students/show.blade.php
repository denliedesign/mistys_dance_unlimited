@extends('layouts.placement-app')

@section('content')

    <div class="row">
        <strong>Student Name</strong><div class="col">{{ $student->name }}</div>
        <strong>Student Email</strong><div class="col">{{ $student->email }}</div>
        <strong>Ballet Level</strong><div class="col">{{ $student->ballet }}</div>
        <strong>Jazz Level</strong><div class="col">{{ $student->jazz }}</div>
        <strong>Tap Level</strong><div class="col">{{ $student->tap }}</div>
        <strong>Pointe Level</strong><div class="col">{{ $student->pointe }}</div>
        <strong>Notes</strong><div class="col">{{ $student->description }}</div>
    </div>

@endsection

