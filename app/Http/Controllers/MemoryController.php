<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;
use function Sodium\compare;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->memories = Memory::all();
        \View::share('memories', $this->memories);
    }

    public function index()
    {
        $memory = new Memory();
        return view('recitals/memories.index', compact('memory'));
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
        $memory = Memory::create($this->validateRequest());
        return redirect('recitals/memories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function show(Memory $memory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function edit(Memory $memory)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memory $memory)
    {
        $memory->update($this->validateRequest());
        return redirect('recitals/memories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memory $memory)
    {
        $memory->delete();
        return redirect('recitals/memories');
    }

    private function validateRequest()
    {
        return request()->validate([
            'information' => 'required',
        ]);
    }
}
