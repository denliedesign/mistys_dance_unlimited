@extends('layouts.app-mist')
@section('content')
    <div class="container">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <form action="{{ route('levels.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            <button type="submit">Import</button>
        </form>
    </div>
@endsection
