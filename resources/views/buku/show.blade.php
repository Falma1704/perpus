<!-- resources/views/buku/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Buku</h2>
        <p><strong>Judul:</strong> {{ $buku->judul }}</p>
        <p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
