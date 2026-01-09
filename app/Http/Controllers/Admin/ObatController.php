<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Tampilkan daftar obat
     */
    public function index()
    {
        $obats = Obat::latest()->get();
        return view('admin.obat.index', compact('obats'));
    }

    /**
     * Tampilkan form tambah obat
     */
    public function create()
    {
        return view('admin.obat.create');
    }

    /**
     * Simpan data obat
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat'    => 'required|string|max:255',
            'deskripsi'    => 'required|string',
            'aturan_pakai' => 'required|string',
            'efek_samping' => 'required|string',
        ]);

        Obat::create([
            'nama_obat'    => $request->nama_obat,
            'deskripsi'    => $request->deskripsi,
            'aturan_pakai' => $request->aturan_pakai,
            'efek_samping' => $request->efek_samping,
        ]);

        return redirect()
            ->route('obat.index')
            ->with('success', 'Data obat berhasil ditambahkan');
    }

    /**
     * Tampilkan form edit obat
     */
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('admin.obat.edit', compact('obat'));
    }

    /**
     * Update data obat
     */
    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $request->validate([
            'nama_obat'    => 'required|string|max:255',
            'deskripsi'    => 'required|string',
            'aturan_pakai' => 'required|string',
            'efek_samping' => 'required|string',
        ]);

        $obat->update([
            'nama_obat'    => $request->nama_obat,
            'deskripsi'    => $request->deskripsi,
            'aturan_pakai' => $request->aturan_pakai,
            'efek_samping' => $request->efek_samping,
        ]);

        return redirect()
            ->route('obat.index')
            ->with('success', 'Data obat berhasil diperbarui');
    }

    /**
     * Hapus data obat
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()
            ->route('obat.index')
            ->with('success', 'Data obat berhasil dihapus');
    }
}
