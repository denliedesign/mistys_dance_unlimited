<?php

namespace App\Http\Controllers;

use App\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    // Display a listing of the placements
    public function index()
    {
        $placements = Placement::all()->sortBy('lastName');
        return view('placements.index', compact('placements'));
    }

    // Show the form for creating a new placement
    public function create()
    {
        return view('placements.create');
    }

    // Store a newly created placement in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email|unique:placements,email',
            'ballet' => 'nullable|string|max:255',
            'tap' => 'nullable|string|max:255',
            'jazz' => 'nullable|string|max:255',
            'pointe' => 'nullable|string|max:255',
            'acro' => 'nullable|string|max:255',
            'recommendation' => 'nullable|string',
            'comment' => 'nullable|string',
        ]);

        Placement::create($validatedData);
        return redirect()->route('placements.index')->with('success', 'Dancer added successfully.');
    }

    // Display the specified placement
    public function show(Placement $placement)
    {
        return view('placements.show', compact('placement'));
    }

    // Show the form for editing the specified placement
    public function edit(Placement $placement)
    {
        return view('placements.edit', compact('placement'));
    }

    // Update the specified placement in the database
    public function update(Request $request, Placement $placement)
    {
        $validatedData = $request->validate([
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email|unique:placements,email,' . $placement->id,
            'ballet' => 'nullable|string|max:255',
            'tap' => 'nullable|string|max:255',
            'jazz' => 'nullable|string|max:255',
            'pointe' => 'nullable|string|max:255',
            'acro' => 'nullable|string|max:255',
            'recommendation' => 'nullable|string',
            'comment' => 'nullable|string',
        ]);

        $placement->update($validatedData);
        return redirect()->route('placements.index')->with('success', 'Dancer updated successfully.');
    }

    // Remove the specified placement from the database
    public function destroy(Placement $placement)
    {
        $placement->delete();
        return redirect()->route('placements.index')->with('success', 'Dancer deleted successfully.');
    }
}
