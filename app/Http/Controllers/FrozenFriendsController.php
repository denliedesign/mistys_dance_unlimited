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
            'parentName' => 'required|string|max:255',
            'email' => 'required|email|max:254',
            'phone' => 'required|string|max:50',
            'studentName' => 'required|string|max:255',
            'birthdate' => 'required|date|before_or_equal:today'
        ]);

        Mail::to('kris.mistysdance@gmail.com')->send(new FrozenFriendsMail($frozen));

        return redirect('/')->with('message', 'Thank you for your interest. We wil contact you shortly.');

    }

}
