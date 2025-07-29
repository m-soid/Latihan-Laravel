<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1 , 'nama' => 'motor yamaha', 'price' => 100000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 2 , 'nama' => 'motor honda', 'price' => 150000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 3 , 'nama' => 'motor suzuki', 'price' => 120000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 4 , 'nama' => 'motor kawasaki', 'price' => 100000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 5 , 'nama' => 'motor ducati', 'price' => 250000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 1 , 'nama' => 'motor yamaha', 'price' => 100000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 2 , 'nama' => 'motor honda', 'price' => 150000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 3 , 'nama' => 'motor suzuki', 'price' => 120000, 'tahun' => 2008, 'jarak' => 200],
            ['id' => 5 , 'nama' => 'motor ducati', 'price' => 250000, 'tahun' => 2008, 'jarak' => 200],
        ];

        return view('welcome', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
