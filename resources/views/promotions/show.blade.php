@extends('layouts.app')

@section('content')

    <div class="row">
        <strong>Promotion ID</strong><div class="col">{{ $promotion->id }}</div>
        <strong>Promotion Name</strong><div class="col">{{ $promotion->name }}</div>
        <strong>Promotion Description</strong><div class="col">{{ $promotion->description }}</div>
    </div>

@endsection

