@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kamar</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nomor Kamar: {{ $kamar->nomor_kamar }}</h5>
            <p class="card-text"><strong>Tipe Kamar:</strong> {{ $kamar->tipeKamar->nama }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $kamar->status }}</p>
            <p class="card-text"><strong>Harga per Malam:</strong> Rp {{ number_format($kamar->tipeKamar->harga_per_malam, 0, ',', '.') }}</p>
        </div>
    </div>
    <a href="{{ route('kamar.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection