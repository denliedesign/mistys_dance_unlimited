<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $promotions = Promotion::paginate(10);
        return view('promotions.index', compact('promotions'));
    }

    public function admin(Promotion $promotion)
    {
        $promotions = Promotion::all();
        return view('admin', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Promotion $promotion)
    {
        $promotion = new Promotion();
        return view('promotions.create', compact('promotion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $promotion = Promotion::create($this->validateRequest());
        $this->storeImage($promotion);
        return redirect('promotions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        $this->authorize('update', Promotion::class);
        return view('promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Promotion $promotion)
    {
        $this->authorize('update', $promotion);
        $promotion->update($this->validateRequest());
        $this->storeImage($promotion);
        return redirect('/promotions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $this->authorize('update', $promotion);
        $promotion->delete();
        return redirect('/promotions');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($promotion)
    {
        if (request()->has('image'))
        {
            $promotion->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

}
