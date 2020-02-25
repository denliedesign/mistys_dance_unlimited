<?php

namespace App\Http\Controllers;

use App\Mail\FrozenFriendsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrozenFriendsController extends Controller
{

    public function index()
    {
        return view('frozen-friends');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $frozen = request()->validate([
            'parentName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'studentName' => 'required',
            'birthdate' => 'required'
        ]);

        Mail::to('customdenlie@gmail.com')->send(new FrozenFriendsMail($frozen));

        return redirect('/')->with('message', 'Thank you for your interest. We wil contact you shortly.');

    }

}
