<?php

namespace App\Http\Controllers;

use App\Hub;
use App\Post;
use Illuminate\Http\Request;

class HubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $hubs;

    public function __construct()
    {
        $this->hubs = Hub::all()->sortByDesc('created_at');
        \View::share('hubs', $this->hubs);
    }

    public function index()
    {
        return view('hubs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Hub::class);
        $hub = new Hub();
        return view('hubs.create', compact('hub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $hub = Hub::create($this->validateRequest());
        $this->storeImage($hub);
        return redirect('hubs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function show(Hub $hub)
    {
        return view('hubs.show', compact('hub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function edit(Hub $hub)
    {
        $this->authorize('update', Hub::class);
        return view('hubs.edit', compact('hub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hub $hub)
    {
        $hub->update($this->validateRequest());
        $this->storeImage($hub);
        return redirect('/hubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hub $hub)
    {
        $hub->delete();
        return redirect('/hubs');
    }

    private function validateRequest()
    {
        return request()->validate([
            'hubImage' => 'sometimes|file|image|max:5000',
            'hubPdf' => 'sometimes|file|image|max:10000',
            'hubTitle' => 'required',
            'hubContent' => 'required',
        ]);
    }

    private function storeImage($hub)
    {
        if (request()->has('hubImage'))
        {
            $hub->update([
                'hubImage' => request()->hubImage->store('uploads', 'public')
            ]);
        }
        if (request()->has('hubPdf'))
        {
            $hub->update([
                'hubPdf' => request()->hubPdf->store('uploads', 'public')
            ]);
        }

    }
}
