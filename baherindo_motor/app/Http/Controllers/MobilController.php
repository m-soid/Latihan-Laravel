<?php

namespace App\Http\Controllers;

use App\Models\MobilBaherindo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = mobilbaherindo::all();
        return view('mobil',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mobil.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ValidatedData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request -> file('gambar_mobil')->store('mobil_images', 'public');
            $ValidatedData['gambar_mobil'] = $path;
        }

        MobilBaherindo::create($ValidatedData);
        return redirect('/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);

        $ValidatedData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request -> file('gambar_mobil')->store('mobil_images', 'public');
            $ValidatedData['gambar_mobil'] = $path;
        }

        MobilBaherindo::create($ValidatedData);
        return redirect('/mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        $mobil->delete();
        return redirect('/');
    }
}
