<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\Kabkota;
use App\Models\JenisFaskes;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    public function index()
    {
        $faskes = Faskes::with(['kabkota', 'jenisFaskes', 'kategori'])->get();
        return view('faskes.index', compact('faskes'));
    }

    public function create()
    {
        $kabkotas = Kabkota::all();
        $jenisFaskes = JenisFaskes::all();
        $kategoris = Kategori::all();
        return view('faskes.create', compact('kabkotas', 'jenisFaskes', 'kategoris'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'nama_pengelola' => 'required|string',
            'alamat' => 'required|string',
            'website' => 'required|url',
            'email' => 'required|email',
            'kabkota_id' => 'required|exists:kabkota,id',
            'rating' => 'required|integer|min:1|max:5',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|exists:jenis_faskes,id',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        Faskes::create($validatedData);

        return redirect()->route('faskes.index')->with('Pesan', 'Fasilitas Kesehatan berhasil ditambahkan.');
    }
}