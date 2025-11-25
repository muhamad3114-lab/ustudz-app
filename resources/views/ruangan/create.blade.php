@extends('layouts.app')

@section('title', 'Tambah Data Ruangan')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('ruangan.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="inputNamaRuangan" class="form-label">Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" id="inputNamaRuangan" value="{{ old('nama_ruangan') }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputKodeRuangan" class="form-label">Kode Ruangan</label>
                    <input type="text" name="kode_ruangan" id="inputKodeRuangan" value="{{ old('kode_ruangan') }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputTanahId"class="form-label">Tanah Id</label>
                    <select class="form-select" name="tanah_id" id="inputTanahId">
                        @foreach ($tanah as $tanah)
                            <option value="{{ $tanah->id }}">{{ $tanah->nama_tanah }}</option>
                        @endforeach
                    </select>
                </div>              
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection