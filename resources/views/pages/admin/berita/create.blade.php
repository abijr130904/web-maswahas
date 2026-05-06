@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-10 max-w-2xl">

    <h1 class="text-xl font-semibold mb-5">Tambah Berita</h1>

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="judul" placeholder="Judul"
               class="w-full border p-2 mb-3">

        <input type="date" name="tanggal"
               class="w-full border p-2 mb-3">

        <textarea name="konten" rows="6"
                  class="w-full border p-2 mb-3"
                  placeholder="Konten berita (HTML boleh)"></textarea>

        <input type="file" name="gambar" class="mb-3">

        <button class="bg-teal-700 text-white px-4 py-2 rounded">
            Simpan
        </button>

    </form>

</div>

@endsection