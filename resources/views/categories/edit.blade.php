
@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
    <style>
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .error { color: #b91c1c; font-size: 14px; margin-top: 4px; }
        form { max-width: 500px; }
    </style>

    <h1>Edit Kategori</h1>
    <p><a href="{{ route('categories.index') }}">&larr; Kembali ke daftar kategori</a></p>

    <form action="{{ route('categories.update', $category['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori', $category['nama_kategori']) }}">
        @error('nama_kategori')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="deskripsi">Deskripsi (opsional)</label>
        <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $category['deskripsi']) }}</textarea>
        @error('deskripsi')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn" style="margin-top: 20px;">Perbarui</button>
    </form>
@endsection