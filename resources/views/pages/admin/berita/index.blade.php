@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-10">

    <div class="flex justify-between mb-5">
        <h1 class="text-xl font-semibold">Data Berita</h1>

        <a href="{{ route('admin.berita.create') }}"
           class="bg-teal-700 text-white px-4 py-2 rounded">
            + Tambah
        </a>
    </div>

    <table class="w-full bg-white border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2">Judul</th>
                <th class="p-2">Tanggal</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($beritas as $b)
            <tr class="border-t">
                <td class="p-2">{{ $b->judul }}</td>
                <td class="p-2">{{ $b->tanggal }}</td>
                <td class="p-2 flex gap-2">
                    <a href="{{ route('admin.berita.edit', $b->id) }}" class="text-blue-600">Edit</a>

                    <form method="POST" action="{{ route('admin.berita.destroy', $b->id) }}">
                        @csrf @method('DELETE')
                        <button class="text-red-600">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection