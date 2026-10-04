<?php

namespace App\Http\Controllers;

use App\Mail\FreeTrialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FreeTrialController extends Controller
{

    public function create()
    {
        return view('trial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'parentName'   => ['required','string','max:255'],
            'email'        => ['required','email','max:254'],
            'phone'        => ['required','string','max:50'],
            'studentName'  => ['required','string','max:255'],
            'birthdate'    => ['required','date','before_or_equal:today'],
            'day'          => ['required','array','min:1','max:5'],
            'day.*'        => ['string','distinct','in:M,T,W,TH,F'],
            'sms_consent'  => ['accepted'],  // must be checked
        ]);

        // Normalize for email readability
        $validated['day'] = implode(', ', $validated['day']);
        $validated['sms_consent'] = $request->boolean('sms_consent');

//        Mail::to('customdenlie@gmail.com')->send(new FreeTrialMail($validated));
        Mail::to(['customdenlie@gmail.com', 'diana@adspendadvantage.com', 'kp@mistysdance.com'])->send(new FreeTrialMail($validated));

        return redirect('/')
            ->with('message', 'Thank you for your interest. We will contact you shortly.')
            ->with('verified_trial_submission', true);
    }


}
