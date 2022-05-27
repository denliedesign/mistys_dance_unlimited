@extends('layouts.placement-app')

@section('content')

    <div id="placement-content">

        <div class="m-5">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown placement-login">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>

        <h1 class="text-center display-4" style="font-family: 'Bree Serif', serif; color: #ed174d;">Graded Technique Placement</h1>
        <p class="text-center">To compliment your training we also recommend Modern, Lyrical, Hip Hop, Acro, Leaps & Turns, Dance Team, and Musical Theatre.
            <br>For dancers in Level 3 and up, please also consider Pre-Pointe, Int./Adv. Contemporary, and Stretching & Conditioning.</p>
        @can('update', \App\Student::class)
            <p class="text-center"><a href="students/create">New Student</a></p>
        @endcan

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Ballet</th>
                    <th>Jazz</th>
                    <th>Tap</th>
                    <th>Pointe</th>
                    <th>Notes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    @can('view', $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->ballet }}</td>
                            <td>{{ $student->jazz }}</td>
                            <td>{{ $student->tap }}</td>
                            <td>{{ $student->pointe }}</td>
                            <td>{{ $student->description }}</td>
                            @can('update', $student)
                                <td><a href="/students/{{ $student->id }}/edit">Edit</a></td>
                                <td>
                                    <form action="/students/{{ $student->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endcan
                @endforeach
                </tbody>
            </table>
        </div>
{{--        @endcan--}}
        <div class="d-flex justify-content-center mt-5">
            <div>
                <div>
                    <a href="/">
                        <img src="/images/mdu-logo.png" alt="" style="width: 275px;">
                    </a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/" class="text-center">Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection


