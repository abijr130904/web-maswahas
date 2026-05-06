@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-10 max-w-2xl">

    <h1 class="text-xl font-semibold mb-5">Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita->id) }}"
          method="POST" enctype="multipart/form-data">

        @csrf @method('PUT')

        <input type="text" name="judul"
               value="{{ $berita->judul }}"
               class="w-full border p-2 mb-3">

        <input type="date" name="tanggal"
               value="{{ $berita->tanggal }}"
               class="w-full border p-2 mb-3">

        <textarea name="konten" rows="6"
                  class="w-full border p-2 mb-3">{{ $berita->konten }}</textarea>

        <input type="file" name="gambar" class="mb-3">

        <button class="bg-teal-700 text-white px-4 py-2 rounded">
            Update
        </button>

    </form>

</div>

@endsection