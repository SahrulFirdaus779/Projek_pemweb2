<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::with('provinsi')->get();
        return view('kabkota.index', compact('kabkotas'));
    }

    public function create()
    {
        $provinsis = Provinsi::all();
        return view('kabkota.create', compact('provinsis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsi,id',
        ]);

        Kabkota::create($validatedData);

        return redirect()->route('kabkota.index')->with('Pesan', 'Kabupaten/Kota berhasil ditambahkan.');
    }

    public function show(Kabkota $kabkota)
    {
        return view('kabkota.show', compact('kabkota'));
    }

    public function edit(Kabkota $kabkota)
    {
        $provinsis = Provinsi::all();
        return view('kabkota.edit', compact('kabkota', 'provinsis'));
    }

    public function update(Request $request, Kabkota $kabkota)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsi,id',
        ]);

        $kabkota->update($validatedData);

        return redirect()->route('kabkota.index')->with('Pesan', 'Kabupaten/Kota berhasil diperbarui.');
    }

    public function destroy(Kabkota $kabkota)
    {
        $kabkota->delete();

        return redirect()->route('kabkota.index')->with('Pesan', 'Kabupaten/Kota berhasil dihapus.');
    }
}
