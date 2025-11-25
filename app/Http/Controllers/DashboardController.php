<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use App\Models\Bangunan;
use App\Models\Ruangan;
use App\Models\Kategori;
use App\Models\Barang;

class DashboardController extends Controller
{
   public function index()
{
    return view('dashboard', [
        'tanahCount'     => \App\Models\Tanah::count(),
        'bangunanCount'  => \App\Models\Bangunan::count(),
        'ruanganCount'   => \App\Models\Ruangan::count(),
        'kategoriCount'  => \App\Models\Kategori::count(),
        'barangCount'    => \App\Models\Barang::count(),
    ]);
}

}
