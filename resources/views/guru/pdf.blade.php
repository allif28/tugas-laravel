<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>
</head>
<body>

<h1>Data Guru</h1>

<table border="1" width="100%" cellpadding="10">

    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>

    @foreach($guru as $g)

    <tr>

        <td>{{ $g->nama_guru }}</td>

        <td>{{ $g->email }}</td>

        <td>{{ $g->alamat }}</td>

    </tr>

    @endforeach

</table>

</body>
</html>