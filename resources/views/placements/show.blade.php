@extends('layouts.app-place')
@section('content')

    @can('viewAny', \App\Placement::class)
    <div style="background: linear-gradient(to bottom left, #008CC0, #ED174D); min-height: 100vh; height: 100%;" class="p-5 d-flex align-items-center">
        <div class="container py-5 rounded" style="background: white;">
            <h1 class="text-center text-red pacifico" style="font-size: 4em; position: relative; z-index: 3;">Congratulations, {{$placement->firstName}} {{ $placement->lastName }}!</h1>
            <div class="text-center raleway">
                <div class="d-flex justify-content-center">
                    <h3 style="width: max-content;" class="background-blue rounded px-3 py-1 text-center">For our 2024-25 season, you are eligible for the following classes:</h3>
                </div>
                <ul style="font-size: 1.25em;">
                    @if($placement->ballet)<li class="list-group-item">Ballet {{ $placement->ballet }}</li>@endif
                    @if($placement->tap)<li class="list-group-item">Tap {{ $placement->tap }}</li>@endif
                    @if($placement->jazz)<li class="list-group-item">Jazz {{ $placement->jazz }}</li>@endif
                    @if($placement->pointe) <li class="list-group-item">Pointe {{ $placement->pointe }}</li>@endif
                    @if($placement->acro)<li class="list-group-item">Acro {{ $placement->acro }}</li>@endif
{{--                    <li class="list-group-item">--}}
                    @if ($placement->jazz >= 1 && $placement->jazz <=2)
                        <li class="list-group-item">1st Intermediate Modern</li>
                        <li class="list-group-item">1st Intermediate Lyrical</li>
                        <li class="list-group-item">1st Intermediate Hip Hop</li>
                    @elseif ($placement->jazz >= 3 && $placement->jazz <=4)
                        <li class="list-group-item">High Intermediate Modern</li>
                        <li class="list-group-item">High Intermediate Lyrical</li>
                        <li class="list-group-item">High Intermediate Hip Hop</li>
                    @elseif ($placement->jazz >= 5 && $placement->jazz <=7)
                        <li class="list-group-item">Advanced Modern</li>
                        <li class="list-group-item">Advanced Lyrical</li>
                        <li class="list-group-item">Advanced Hip Hop</li>
                        @endif
{{--                        </li>--}}
                </ul>
                @if($placement->recommendation)
                    <div class="d-flex justify-content-center">
                        <h3 style="width: max-content;" class="background-red rounded px-3 py-1 text-center">Recommended Summer Classes:</h3>
                    </div>
                    <p>{{ $placement->recommendation }}</p>
                @endif
                @if($placement->comment)
                    <div class="d-flex justify-content-center">
                        <h3 style="width: max-content;" class="background-yellow rounded px-3 py-1 text-center">Teacher Comments:</h3>
                    </div>
                    <p>{{ $placement->comment }}</p>
                @endif
            </div>
            <div class="d-none d-md-block" style="position: absolute; bottom: 125px; left: 125px;"><img id="randomImage" alt="dancer illustration" class="img-fluid" style="height: 300px; width: auto;"></div>
        </div>
    </div>
        @else
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; height: 100%;"><h2 class="fw-bold">You do not have permission to view this page.</h2></div>
    @endcan

    <script>
        // Specify the number of icons
        const totalIcons = 10;

        // Generate a random number between 1 and 10 (inclusive)
        const randomNumber = Math.floor(Math.random() * totalIcons) + 1;

        // Construct the image file name using the random number
        const randomImageFile = `/images/BW_${randomNumber}.png`;

        // Set the src attribute of the image element to the random image file
        document.getElementById('randomImage').src = randomImageFile;
    </script>

@endsection
