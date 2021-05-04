<?php

namespace App\Http\Controllers;

use App\Fest;
use Illuminate\Http\Request;

class FestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fest = Fest::all();
        return view('fest', compact('fest'));
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
    public function store(Request $request)
    {
        $fest = Fest::create($this->validateRequest());
        return redirect('/mdu-fest');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fest  $fest
     * @return \Illuminate\Http\Response
     */
    public function show(Fest $fest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fest  $fest
     * @return \Illuminate\Http\Response
     */
    public function edit(Fest $fest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fest  $fest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fest $fest)
    {
        $fest->update($this->validateRequest());
        return redirect('/mdu-fest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fest  $fest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fest $fest)
    {
        $fest->delete();
        return redirect('/mdu-fest');
    }

    private function validateRequest()
    {
        return request()->validate([
            'description' => 'required',
        ]);
    }

}
