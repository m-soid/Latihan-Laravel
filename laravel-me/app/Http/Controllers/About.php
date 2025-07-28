<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = [
            ['nama' => 'Hadi', 'kelas' => ' XI RPL'],
            ['nama' => 'aoddi ', 'kelas' => ' XI RPL'],
            ['nama' => 'faiz', 'kelas' => ' XI RPL'],
            ['nama' => 'bima ', 'kelas' => ' XI RPL'],
            ['nama' => 'bimsen ', 'kelas' => ' XI RPL'],
            ['nama' => 'rapka ', 'kelas' => ' XI RPL'],
            ['nama' => 'aliy ', 'kelas' => ' XI RPL'],
            ['nama' => 'radit mahendar ', 'kelas' => ' XI RPL'],
            ['nama' => 'glenn ', 'kelas' => ' XI RPL'],
            ['nama' => 'radit rizki ', 'kelas' => ' XI RPL'],
            ['nama' => 'yusuf ', 'kelas' => ' XI RPL'],
            ['nama' => 'rangga ', 'kelas' => ' XI RPL'],
            ['nama' => 'devan ', 'kelas' => ' XI RPL'],
            ['nama' => 'ghani ', 'kelas' => ' XI RPL'],
            ['nama' => 'azzaam ', 'kelas' => ' XI RPL'],
            ['nama' => 'aksa ', 'kelas' => ' XI RPL'],
            ['nama' => 'sattar ', 'kelas' => ' XI RPL'],
        ];
        return view(
            'about',
            compact('siswas')
    );
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
