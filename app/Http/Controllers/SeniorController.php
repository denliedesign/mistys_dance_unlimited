<?php

namespace App\Http\Controllers;

use App\Senior;
use Illuminate\Http\Request;
use function Sodium\compare;

class SeniorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->seniors = Senior::all();
        \View::share('seniors', $this->seniors);
    }

    public function index()
    {
        $senior = new Senior();
        return view('recitals/seniors.index', compact('senior'));
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
        $senior = Senior::create($this->validateRequest());
        return redirect('recitals/seniors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Senior  $senior
     * @return \Illuminate\Http\Response
     */
    public function show(Senior $senior)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Senior  $senior
     * @return \Illuminate\Http\Response
     */
    public function edit(Senior $senior)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Senior  $senior
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Senior $senior)
    {
        $senior->update($this->validateRequest());
        return redirect('recitals/seniors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Senior  $senior
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senior $senior)
    {
        $senior->delete();
        return redirect('recitals/seniors');
    }

    private function validateRequest()
    {
        return request()->validate([
            'information' => 'required',
        ]);
    }
}
