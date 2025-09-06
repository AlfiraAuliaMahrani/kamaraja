@extends('layouts.app')

@section('content')
<div class="col-span-full">
    <h1 class="text-3xl font-bold text-purple-900 mb-6 px-6">🏠 Daftar Kamar</h1>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="mb-4 mx-6 px-4 py-2 rounded-lg bg-green-100 text-green-800 shadow">
            ✅ {{ session('success') }}
        </div>
    @endif

    {{-- Tombol tambah kamar --}}
    <div class="mx-6 mb-6">
        <a href="{{ route('kamar.create') }}" 
           class="inline-block bg-pink-400 hover:bg-pink-500 text-white px-4 py-2 rounded-xl shadow transition">
            ➕ Tambah Kamar
        </a>
    </div>

    {{-- Tabel daftar kamar --}}
    <div class="w-full overflow-x-auto bg-white rounded-none shadow">
        <table class="w-full border-collapse divide-y divide-purple-200">
            <thead class="bg-purple-100">
                <tr>
                    <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-purple-900">Judul</th>
                    <th class="w-40 px-6 py-3 text-left text-sm font-semibold text-purple-900">Gambar</th>
                    <th class="w-1/2 px-6 py-3 text-left text-sm font-semibold text-purple-900">Deskripsi</th>
                    <th class="w-1/6 px-6 py-3 text-center text-sm font-semibold text-purple-900">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-100">
                @foreach ($kamars as $kamar)
                <tr class="hover:bg-purple-50 transition">
                    {{-- Judul --}}
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        {{ $kamar->judul }}
                    </td>
                    
                    {{-- Gambar --}}
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $kamar->gambar) }}" 
                             alt="{{ $kamar->judul }}" 
                             class="w-28 h-20 object-cover rounded-lg shadow">
                    </td>
                    
                    {{-- Deskripsi --}}
                    <td class="px-6 py-4 text-sm text-gray-700">
                        {{ $kamar->deskripsi }}
                    </td>
                    
                    {{-- Aksi --}}
                    <td class="px-6 py-4 text-center flex gap-2 justify-center">
                        <a href="{{ route('kamar.edit', $kamar->id) }}" 
                           class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow transition">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('kamar.destroy', $kamar->id) }}" method="POST" 
                              onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded-lg shadow transition">
                                🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
