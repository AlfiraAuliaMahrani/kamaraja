@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-gray-900 p-8 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6">Tambah Postingan</h2>

    {{-- Pesan error --}}
    @if ($errors->any())
        <div class="mb-4 bg-red-600 text-white p-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Judul --}}
        <div>
            <label for="title" class="block text-sm font-medium text-gray-200 mb-2">
                Judul
            </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                   class="w-full px-4 py-2 bg-gray-800 text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        {{-- Isi --}}
        <div>
            <label for="content" class="block text-sm font-medium text-gray-200 mb-2">
                Isi
            </label>
            <textarea name="content" id="content" rows="5"
                      class="w-full px-4 py-2 bg-gray-800 text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('content') }}</textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end space-x-3">
            <a href="{{ route('dashboard') }}" 
               class="px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600">
                Batal
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
