<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi_produk }}</td>
                    <td>{{ $produk->harga_produk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
