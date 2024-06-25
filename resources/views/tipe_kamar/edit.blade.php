@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Tipe Kamar</h1>
    <form action="{{ route('tipe_kamar.update', $tipeKamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $tipeKamar->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $tipeKamar->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="harga_per_malam" class="form-label">Harga per Malam</label>
            <input type="number" class="form-control" id="harga_per_malam" name="harga_per_malam" value="{{ $tipeKamar->harga_per_malam }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('tipe_kamar.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection