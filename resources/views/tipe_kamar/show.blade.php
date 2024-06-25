@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Tipe Kamar</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tipeKamar->nama }}</h5>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $tipeKamar->deskripsi }}</p>
            <p class="card-text"><strong>Harga per Malam:</strong> Rp {{ number_format($tipeKamar->harga_per_malam, 0, ',', '.') }}</p>
        </div>
    </div>
    <a href="{{ route('tipe_kamar.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection