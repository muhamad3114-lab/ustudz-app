<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $items = Barang::with(['kategori', 'ruangan'])->get();
        return view('barang.index', compact('items'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $ruangan  = Ruangan::all();
        return view('barang.create', compact('kategori', 'ruangan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'     => 'required',
            'kode_inventaris' => 'required',
            'kategori_id'     => 'required',
            'ruangan_id'      => 'required',
            'tahun_pengadaan' => 'required|integer',
            'sumber_dana'     => 'required',
            'kondisi'         => 'required'
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item     = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $ruangan  = Ruangan::all();
        return view('barang.edit', compact('item', 'kategori', 'ruangan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang'     => 'required',
            'kode_inventaris' => 'required',
            'kategori_id'     => 'required',
            'ruangan_id'      => 'required',
            'tahun_pengadaan' => 'required|integer',
            'sumber_dana'     => 'required',
            'kondisi'         => 'required'
        ]);

        $item = Barang::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $item = Barang::findOrFail($id);
        $item->delete();

        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus');
    }
}
