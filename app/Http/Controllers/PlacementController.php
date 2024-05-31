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
        $parentEmail = $request->input('email');
        list($localPart, $domain) = explode('@', $parentEmail);
        $childIndex = Placement::where('email', 'LIKE', "$localPart+child%@".$domain)->count() + 1;
        $childEmail = $localPart . '+child' . $childIndex . '@' . $domain;
        $request->validate([
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email',
            'ballet' => 'nullable|string|max:255',
            'tap' => 'nullable|string|max:255',
            'jazz' => 'nullable|string|max:255',
            'pointe' => 'nullable|string|max:255',
            'acro' => 'nullable|string|max:255',
            'recommendation' => 'nullable|string',
            'comment' => 'nullable|string',
        ]);

        Placement::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $childEmail,
            'ballet' => $request->input('ballet'),
            'tap' => $request->input('tap'),
            'jazz' => $request->input('jazz'),
            'pointe' => $request->input('pointe'),
            'acro' => $request->input('acro'),
            'recommendation' => $request->input('recommendation'),
            'comment' => $request->input('comment'),
        ]);

//        Placement::create($validatedData);
        return redirect()->route('placements.index')->with('success', 'Dancer added successfully.');
    }

    public function showAll(Request $request) {
        $user = auth()->user();
        $parentEmail = $user->email; // Assume the parent's email is stored in the authenticated user
        list($localPart, $domain) = explode('@', $parentEmail);
        $parentEmailPattern = $localPart . '%@' . $domain;

        // Retrieve all placements associated with the parent's email pattern
        $placements = Placement::where('email', 'LIKE', $parentEmailPattern)->get();

        if ($placements->isEmpty()) {
            return view('errors.no_placement'); // Show a message if no placements found
        }

        return view('placements.show', compact('placements'));
    }

    private function stripEmailSuffix($email) {
        return preg_replace('/\+child\d+@/', '@', $email);
    }

    // Method to show an individual placement
    public function show($id) {
        $placement = Placement::findOrFail($id);
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
