@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Daftar Post</h2>
        <a href="{{ route('posts.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
            + Tambah Post
        </a>
    </div>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="mb-4 bg-green-600 text-white p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($posts as $post)
        <div class="bg-gray-900 p-6 rounded-xl shadow mb-6 w-full">
            <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
            <p class="text-gray-300 mb-4">{{ Str::limit($post->content, 250) }}</p>

            <div class="flex space-x-3">
                <a href="{{ route('posts.edit', $post->id) }}" 
                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-400">
                    Edit
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin ingin hapus post ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-500">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class="bg-gray-800 p-6 rounded-xl text-center text-gray-400">
            Belum ada post.
        </div>
    @endforelse
</div>
@endsection
