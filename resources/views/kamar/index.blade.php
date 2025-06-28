<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Kamar</title>
</head>

<body>
    <h1>Daftar Kamar</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('kamar.create') }}">+ Tambah Kamar</a>

    <ul>
        @foreach ($kamars as $kamar)
            <li>
                <strong>{{ $kamar->judul }}</strong><br>
                <img src="{{ asset('storage/' . $kamar->gambar) }}" width="100"><br>
                <small>{{ $kamar->deskripsi }}</small><br>

                <a href="{{ route('kamar.edit', $kamar->id) }}">Edit</a>

                <form action="{{ route('kamar.destroy', $kamar->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
