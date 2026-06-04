<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        .navbar{
            background:#8B0000;
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            color:white;
            font-size:24px;
            font-weight:bold;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            font-weight:bold;
        }

        .menu a:hover{
            color:yellow;
        }

        .container{
            width:90%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            margin-bottom:20px;
            color:#333;
        }

        .top-button{
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            padding:10px 20px;
            background:#8B0000;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-right:10px;
        }

        .btn:hover{
            opacity:0.9;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#8B0000;
            color:white;
            padding:15px;
        }

        table td{
            padding:15px;
            border-bottom:1px solid #ddd;
        }

        tr:hover{
            background:#f9f9f9;
        }

        .aksi a{
            text-decoration:none;
            margin-right:10px;
            font-weight:bold;
        }

       .btn-edit{
    background:#3498db;
    color:white;
    padding:8px 14px;
    text-decoration:none;
    border-radius:5px;
    margin-right:8px;
    font-size:14px;
}

.btn-hapus{
    background:#e74c3c;
    color:white;
    padding:8px 14px;
    text-decoration:none;
    border-radius:5px;
    font-size:14px;
}

.btn-edit:hover,
.btn-hapus:hover{
    opacity:0.8;
}

    </style>

</head>
<body>

    <div class="navbar">

        <div class="logo">
            Web Laravel
        </div>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/guru">Data Guru</a>
            <a href="/guru/excel">Export Excel</a>
            <a href="/guru/pdf">Export PDF</a>
            <a href="/api/books">API Books</a>
        </div>

    </div>

    <div class="container">

        <h1>Data Guru</h1>

        <div class="top-button">

            <a href="/guru/tambah" class="btn">
                + Tambah Guru
            </a>

            <a href="/guru/excel" class="btn">
                Export Excel
            </a>

            <a href="/guru/pdf" class="btn">
                Export PDF
            </a>

        </div>

        <table>

            <tr>
                <th>Nama Guru</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            @foreach($guru as $g)

            <tr>

                <td>{{ $g->nama_guru }}</td>

                <td>{{ $g->email }}</td>

                <td>{{ $g->alamat }}</td>

                <td class="aksi">

    <a href="/guru/edit/{{ $g->id }}" class="btn-edit">
        Edit
    </a>

    <a href="/guru/hapus/{{ $g->id }}" class="btn-hapus">
        Hapus
    </a>

</td>

            </tr>

            @endforeach

        </table>

    </div>

</body>
</html>