<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku yang Dipinjam</title>
</head>
<body>
    <h1>Daftar Buku yang Dipinjam</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tanggal Pinjam</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->borrowed_at_date }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
