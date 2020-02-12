<?php

namespace App\Http\Controllers;

use App\Rehearsal;
use Illuminate\Http\Request;
use function Sodium\compare;

class RehearsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->rehearsals = Rehearsal::all();
        \View::share('rehearsals', $this->rehearsals);
    }

    public function index()
    {
        $rehearsal = new Rehearsal();
        return view('recitals/rehearsals.index', compact('rehearsal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rehearsal = Rehearsal::create($this->validateRequest());
        return redirect('recitals/rehearsals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function show(Rehearsal $rehearsal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function edit(Rehearsal $rehearsal)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rehearsal $rehearsal)
    {
        $rehearsal->update($this->validateRequest());
        return redirect('recitals/rehearsals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rehearsal $rehearsal)
    {
        $rehearsal->delete();
        return redirect('recitals/rehearsals');
    }

    private function validateRequest()
    {
        return request()->validate([
            'information' => 'required',
        ]);
    }
}
