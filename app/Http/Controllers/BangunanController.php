<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function index()
    {
        $bangunan = Bangunan::with('tanah')->get();
        return view('bangunan.index', ['items' => $bangunan]);
    }

    public function create()
    {
        $tanah = Tanah::all();
        return view('bangunan.create', ['tanah' => $tanah]);
    }

    public function store(Request $request)
    {
        $bangunan = $request->all();
        Bangunan::create($bangunan);
        return redirect()->route('bangunan.index')
            ->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $bangunan = Bangunan::with('tanah')->findOrFail($id);
        $tanah = Tanah::all();
        return view('bangunan.edit', compact('bangunan', 'tanah'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_bangunan' => 'required|string',
            'kode_bangunan' => 'required|string|unique:bangunans,kode_bangunan,' . $id,
            'tanah_id' => 'required|integer|exists:tanah,id',
        ]);

        $bangunan = Bangunan::findOrFail($id);
        $bangunan->update($validated);

        return redirect()->route('bangunan.index')
            ->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        Bangunan::destroy($id);

        return redirect()->route('bangunan.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
