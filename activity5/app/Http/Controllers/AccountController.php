<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your model is named User

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Your code for listing accounts goes here
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Your code for showing the create form goes here
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Create a new User record
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save(); // Save the user data to the database

        return redirect('/register')->with('success', 'Registration successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Your code for displaying a specific account goes here
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Your code for showing the edit form goes here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Your code for updating an account goes here
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Your code for deleting an account goes here
    }
}
