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
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ebook->id }}</td>
                    <td>{{ $ebook->judul }}</td>
                    <td>{{ $ebook->pengarang }}</td>
                    <td>{{ $ebook->penerbit }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>