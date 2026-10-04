@extends('layouts.app-mist')
@section('content')
<main class="container py-5 poppins" style="max-width: 1040px;">
    <nav aria-label="Breadcrumb" class="mb-4"><a href="/">Home</a> / <a href="/fall">Dance classes</a></nav>
    <article style="font-size: 1.125rem; line-height: 1.8;">
        @yield('page')
    </article>
    @hasSection('adult_session')
    <section class="my-5 p-4 bg-light rounded">
        <h2>Ask about the next adult session</h2>
        <p>Call our Onalaska office at <a href="tel:+16087794642">608-779-4642</a> or email <a href="mailto:info@mistysdance.com">info@mistysdance.com</a> for upcoming dates and availability.</p>
        <a class="btn btn-danger btn-lg" href="/community-programming">View community programming</a>
    </section>
    @else
    <section class="my-5 p-4 bg-light rounded" aria-labelledby="trial-heading">
        <h2 id="trial-heading">Find your dancer's next step</h2>
        <p>Tell us your child's age, dance experience, and preferred days. Our team can help you choose a class and confirm its studio location before your first visit.</p>
        <a class="btn btn-danger btn-lg" href="/trialclass">Book a free trial</a>
        <a class="btn btn-outline-dark btn-lg m-2" href="/fall">View class schedule</a>
        <p class="mt-3 mb-0">Questions? <a href="tel:+16087794642">608-779-4642</a> · <a href="mailto:info@mistysdance.com">info@mistysdance.com</a></p>
    </section>
    @endif
    @include('seo.explore')
</main>
@endsection
