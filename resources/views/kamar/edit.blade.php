@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kamar</h1>
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomor_kamar" class="form-label">Nomor Kamar</label>
            <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" value="{{ $kamar->nomor_kamar }}" required>
        </div>
        <div class="mb-3">
            <label for="tipe_kamar_id" class="form-label">Tipe Kamar</label>
            <select class="form-control" id="tipe_kamar_id" name="tipe_kamar_id" required>
                @foreach($tipeKamar as $tipe)
                    <option value="{{ $tipe->id }}" {{ $kamar->tipe_kamar_id == $tipe->id ? 'selected' : '' }}>{{ $tipe->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="tersedia" {{ $kamar->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="terisi" {{ $kamar->status == 'terisi' ? 'selected' : '' }}>Terisi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection