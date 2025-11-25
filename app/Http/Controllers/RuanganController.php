<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.index', ['items' => $ruangan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tanah = Tanah::all();
        return view('ruangan.create', ['tanah' => $tanah]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required|string',
            'kode_ruangan' => 'required|string|unique:bangunans,kode_ruangans',
            'bangunan_id' => 'required|string|exists:bangunans,id',
        ]);

        Bangunan::create($validated);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Ditambahkan!');
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
        $ruangan = Ruangan::with('tanah')->find($id);
        $tanah = Tanah::all(['id', 'nama_tanah']);
        return view('ruangan.edit', ['ruangan' => $ruangan, 'tanah' => $tanah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required|string',
            'kode_ruangan' => 'required|string|unique:bangunan',
            'bangunan_id' => 'required|string|exists:tanah,id',
        ]);

        $ruangan = Ruangan::find($id);
        $ruangan->update($validated);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bangunan::destroy($id);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}