<?php

namespace App\Http\Controllers;

use App\Handbook;
use Illuminate\Http\Request;
use function Sodium\compare;

class HandbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->handbooks = Handbook::all();
        \View::share('handbooks', $this->handbooks);
    }

    public function index()
    {
        $handbook = new Handbook();
        return view('recitals/handbooks.index', compact('handbook'));
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
        $handbook = Handbook::create($this->validateRequest());
        return redirect('recitals/handbooks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function show(Handbook $handbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Handbook $handbook)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handbook $handbook)
    {
        $handbook->update($this->validateRequest());
        return redirect('recitals/handbooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handbook $handbook)
    {
        $handbook->delete();
        return redirect('recitals/handbooks');
    }

    private function validateRequest()
    {
        return request()->validate([
            'information' => 'required',
        ]);
    }
}
