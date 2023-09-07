<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function room()
    {
        return view('room.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function signup()
    {
        return view('signup.index');
    }


    public function card()
    {
        return view('card.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function gameoverview()
    {
        return view('gameoverview.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
