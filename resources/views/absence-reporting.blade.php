@extends('layouts.app-side-mist')
@section('content')


    <div class="bg-white" id="day">
        <div class="mx-4 pb-1 pt-3">
            <h1 class="born-7 poppins fw-bold p-0 m-0" style="font-size: 45px;">How to Report an Absence</h1>



                <div class="wrap poppins">
                    <header>
            <p>We’ve made it easier to report absences! You can now report your dancer’s absence directly through your Studio Director portal.</p>
            </header>

            <main class="card">
                <div class="container my-4">
                    <h2>Step-by-Step Instructions</h2>
                    <ol>
                        <li><a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"><strong>Log in</strong></a> to your Studio Director account.</li>
                        <li>
                            <strong>Report an Absence</strong>
                            <ul>
                                <li>Tap the menu <kbd>☰</kbd> in the top corner to open <em>Menu</em>.</li>
                                <li>Go to <em>Actions</em> &gt; <em>View Attendance</em>.</li>
                                <li>Click <em>Report an Absence</em> next to the class your child will miss.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Select the Dates and Reason</strong>
                            <ul>
                                <li>Check the box for each date your child will be absent.</li>
                                <li>Select a reason from the dropdown (e.g., Illness, Family Event, Dance Team).</li>
                                <li>If needed, add details in the text box.</li>
                                <li>Click <em>Save Absence</em>.</li>
                            </ul>
                        </li>
                    </ol>

                    <div class="callout">
                        <strong>Important:</strong> You can only report an absence <em>before</em> the class starts. If you need to report after class begins, please email
                        Miss KP at <a href="mailto:kp@mistysdance.com">kp@mistysdance.com</a>.
                    </div>

                    <h2 class="mt-5">New Feature: View Your Child’s Attendance</h2>
                    <ul>
                        <li>Tap the menu <kbd>☰</kbd> in the top corner to open <em>Menu</em>.</li>
                        <li>Go to <em>Actions</em> &gt; <em>View Attendance</em>.</li>
                        <li>Select <em>Attendance</em> next to the class you want to view.</li>
                    </ul>

                    <div class="d-flex justify-content-start mt-4">
                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank">
                            <div class="btn btn-primary">Access Your Account</div>
                        </a>
                    </div>
                </div>
            </main>
        </div>


        </div>
    </div>

@endsection
