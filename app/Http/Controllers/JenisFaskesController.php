<?php

namespace App\Http\Controllers;

use App\Models\JenisFaskes;
use Illuminate\Http\Request;

class JenisFaskesController extends Controller
{
    public function index()
    {
        $jenisFaskes = JenisFaskes::all();
        return view('jenis_faskes.index', compact('jenisFaskes'));
    }

    public function create()
    {
        return view('jenis_faskes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        JenisFaskes::create($validatedData);

        return redirect()->route('jenis_faskes.index')->with('Pesan', 'Jenis Faskes berhasil ditambahkan.');
    }

    public function show(JenisFaskes $jenisFaskes)
    {
        return view('jenis_faskes.show', compact('jenisFaskes'));
    }

    public function edit(JenisFaskes $jenisFaskes)
    {
        return view('jenis_faskes.edit', compact('jenisFaskes'));
    }

    public function update(Request $request, JenisFaskes $jenisFaskes)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $jenisFaskes->update($validatedData);

        return redirect()->route('jenis_faskes.index')->with('Pesan', 'Jenis Faskes berhasil diperbarui.');
    }

    public function destroy(JenisFaskes $jenisFaskes)
    {
        $jenisFaskes->delete();

        return redirect()->route('jenis_faskes.index')->with('Pesan', 'Jenis Faskes berhasil dihapus.');
    }
}
