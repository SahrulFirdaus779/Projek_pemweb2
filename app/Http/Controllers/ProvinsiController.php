<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index', compact('provinsi'));
    }

    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:45',
            'ibukota' => 'required|string|max:45',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        Provinsi::create($validatedData);

        return redirect()->route('provinsi.index')->with('Pesan', 'Provinsi berhasil ditambahkan.');
    }

    public function show(Provinsi $provinsi)
    {
        return view('provinsi.show', compact('provinsi'));
    }

    public function edit(Provinsi $provinsi)
    {
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, Provinsi $provinsi)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:45',
            'ibukota' => 'required|string|max:45',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $provinsi->update($validatedData);

        return redirect()->route('provinsi.index')->with('Pesan', 'Provinsi berhasil diperbarui.');
    }

    public function destroy(Provinsi $provinsi)
    {
        $provinsi->delete();

        return redirect()->route('provinsi.index')->with('Pesan', 'Provinsi berhasil dihapus.');
    }
}