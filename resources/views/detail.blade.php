<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebook</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Persediaan</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ebook->id }}</td>
                    <td>{{ $ebook->judul }}</td>
                    <td>{{ $ebook->pengarang }}</td>
                    <td>{{ $ebook->penerbit }}</td>
                    <td>{{ $ebook->deskripsi }}</td>
                    <td>{{ $ebook->persediaan }}</td>
                    <td><img src="{{ asset('storage/'.$ebook->gambar) }}" alt="gambar-cover-buku" width="200"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>