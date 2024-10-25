<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\User;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    // Display a listing of the academies
    public function index()
    {
        // Get all academies with the users they are related to
        $academies = Academy::with('users')->get();
        return view('academies.index', compact('academies'));
    }

    // Show the form for creating a new academy
    public function create()
    {
        return view('academies.create');
    }

    // Store a newly created academy in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $academy = Academy::create([
            'name' => $request->input('name'),
        ]);

        if ($request->has('user_ids')) {
            $academy->users()->attach($request->input('user_ids'));
        }

        return redirect()->route('academies.index')->with('success', 'Academy created successfully.');
    }

    // Display the specified academy
    public function show($id)
    {
        $academy = Academy::with('users')->findOrFail($id);
        return view('academies.show', compact('academy'));
    }

    // Show the form for editing the specified academy
    public function edit($id)
    {
        $academy = Academy::findOrFail($id);
        $users = User::all();
        return view('academies.edit', compact('academy', 'users'));
    }

    // Update the specified academy in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $academy = Academy::findOrFail($id);
        $academy->update([
            'name' => $request->input('name'),
        ]);

        // Update attached users if provided
        if ($request->has('user_ids')) {
            $academy->users()->sync($request->input('user_ids'));
        }

        return redirect()->route('academies.index')->with('success', 'Academy updated successfully.');
    }

    // Remove the specified academy from the database
    public function destroy($id)
    {
        $academy = Academy::findOrFail($id);
        $academy->delete();

        return redirect()->route('academies.index')->with('success', 'Academy deleted successfully.');
    }
}
