@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pasien</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pasien->nama }}</h5>
            <p class="card-text"><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
            <p class="card-text"><strong>Nomor Telepon:</strong> {{ $pasien->nomor_telepon }}</p>
            <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</p>
        </div>
    </div>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection