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
        $trial = request()->validate([
            'parentName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'studentName' => 'required',
            'birthdate' => 'required'
        ]);

        Mail::to('customdenlie@gmail.com')->send(new FreeTrialMail($trial));

        return redirect('/')->with('message', 'Thank you for your interest. We wil contact you shortly.');
    }

}
