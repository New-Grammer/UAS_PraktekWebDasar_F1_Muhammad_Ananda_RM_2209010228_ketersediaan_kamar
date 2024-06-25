@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Tipe Kamar</h1>
    <a href="{{ route('tipe_kamar.create') }}" class="btn btn-primary mb-3">Tambah Tipe Kamar</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga per Malam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipeKamar as $tipe)
            <tr>
                <td>{{ $tipe->id }}</td>
                <td>{{ $tipe->nama }}</td>
                <td>Rp {{ number_format($tipe->harga_per_malam, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('tipe_kamar.show', $tipe->id) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('tipe_kamar.edit', $tipe->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tipe_kamar.destroy', $tipe->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tipe kamar ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection