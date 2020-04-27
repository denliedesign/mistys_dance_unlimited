@extends('layouts.quiz-app')

<meta property="og:url"                content="http://mistysdance.com/quiz/alex" />
<meta property="og:image" content="https://mistysdance.com/images/result-alex.jpg" />

@section('content')

    <div id="page-wrap">
        <div class="container container-bg d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form method="post" action="/quiz/test">
                <div class="text-center">
                    <h1>Which MDU Teacher Are You?</h1>
                    <p>This personality quiz will reveal which teacher you resemble most.</p>
                    <input type="submit" id="submit" class="btn btn-primary" value="Take The Quiz">
                </div>
                @csrf
            </form>
        </div>
    </div>

@endsection
