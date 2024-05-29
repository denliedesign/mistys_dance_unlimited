@extends('layouts.app-place')
@section('content')

    <div class="container my-5">
        <div class="d-flex justify-content-center"><img src="/images/mdu-logo.png" alt="logo" class="img-fluid" style="height: 70px; width: auto;"></div>
        <h1 class="text-center lora text-uppercase text-gradient">Ascension</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="d-flex justify-content-center robot"><a href="/placements/create" class="btn button-blue">Add Dancer</a></div>

        <table class="table mt-3 robot">
            <thead>
            <tr>
                <th>Name</th>
                <th>Ballet</th>
                <th>Tap</th>
                <th>Jazz</th>
                <th>Pointe</th>
                <th>Acro</th>
                <th>Comments</th>
                <th>Specialty</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($placements as $placement)
                <tr>
                    <td>
                        {{ $placement->firstName }} {{ $placement->lastName }}
                        <br><small class="text-muted">{{ $placement->email }}</small>
                    </td>
                    <td>{{ $placement->ballet }}</td>
                    <td>{{ $placement->tap }}</td>
                    <td>{{ $placement->jazz }}</td>
                    <td>{{ $placement->pointe }}</td>
                    <td>{{ $placement->acro }}</td>
                    <td>
                        {{ $placement->comment }}
                        <br>
                        <strong>Recommend:</strong> {{ $placement->recommendation }}
                    </td>
                    <td>
                        @if ($placement->jazz >= 1 && $placement->jazz <=2)
                            <li class="list-group-item">1st Intermediate</li>
                        @elseif ($placement->jazz >= 3 && $placement->jazz <=4)
                            <li class="list-group-item">High Intermediate</li>
                        @elseif ($placement->jazz >= 5 && $placement->jazz <=7)
                            <li class="list-group-item">Advanced</li>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('placements.show', $placement->id) }}" class="btn button-blue">View</a>
                        <a href="{{ route('placements.edit', $placement->id) }}" class="btn button-yellow">Edit</a>
                        <form action="{{ route('placements.destroy', $placement->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn button-red" onclick="return confirm('Are you sure you want to delete {{$placement->firstName}} {{$placement->lastName}}?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
