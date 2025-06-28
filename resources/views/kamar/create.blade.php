<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label>
        <input type="text" name="judul" required><br>

        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea><br>

        <label>Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required><br>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>
