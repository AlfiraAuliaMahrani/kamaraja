<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kamar</title>
</head>
<body>
    <h1>Edit Kamar</h1>

    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $kamar->judul }}" required><br>

        <label>Deskripsi:</label>
        <textarea name="deskripsi">{{ $kamar->deskripsi }}</textarea><br>

        <label>Gambar Saat Ini:</label><br>
        <img src="{{ asset('storage/' . $kamar->gambar) }}" width="120"><br>

        <label>Ganti Gambar:</label>
        <input type="file" name="gambar" accept="image/*"><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('kamar.index') }}">Kembali</a>
</body>
</html>
