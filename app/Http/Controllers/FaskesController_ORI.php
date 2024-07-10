<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\Kabkota;
use App\Models\Kategori;
use App\Models\JenisFaskes;

class FaskesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faskes = Faskes::all();
        // return view('faskes.show', ['list_faskes'=>$list_faskes]);
        return view('faskes.index', compact('faskes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kabkotas = Kabkota::all();
        $kategoris = Kategori::all();
        $jenis_faskes = JenisFaskes::all();
        return view('faskes.create', compact('kabkotas, kategoris, jenis_faskes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'kabkota_id' => 'required|exists:kabkota,id',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|exists:jenis_faskes,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        Faskes::create($request->all());

        return redirect()->route('faskes.index')
            ->with('success', 'Fasilitas kesehatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $faskes = Faskes::findOrFail($id);
        return view('faskes.show', compact('faskes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faskes = Faskes::findOrFail($id);
        return view('faskes.edit', compact('faskes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'kabkota_id' => 'required|exists:kabkota,id',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|exists:jenis_faskes,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $faskes = Faskes::findOrFail($id);
        $faskes->update($request->all());

        return redirect()->route('faskes.index')
            ->with('success', 'Fasilitas kesehatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faskes = Faskes::findOrFail($id);
        $faskes->delete();

        return redirect()->route('faskes.index')
            ->with('success', 'Fasilitas kesehatan berhasil dihapus.');
    }
}