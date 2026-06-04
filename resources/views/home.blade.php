<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Sekolah</title>

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
            transition:0.3s;
        }

        .menu a:hover{
            color:yellow;
        }

        .hero{
            width:90%;
            margin:40px auto;
            background:white;
            padding:50px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            text-align:center;
        }

        .hero h1{
            font-size:40px;
            color:#333;
            margin-bottom:20px;
        }

        .hero p{
            font-size:18px;
            color:#666;
            margin-bottom:30px;
        }

        .cards{
            width:90%;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
            margin-bottom:40px;
        }

        .card{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card h2{
            color:#8B0000;
            margin-bottom:15px;
        }

        .card p{
            color:#555;
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            padding:10px 20px;
            background:#8B0000;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        footer{
            background:#222;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:30px;
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

    <div class="hero">

        <h1>
            Sistem Informasi Sekolah
        </h1>

        <p>
            Tugas Pemrograman Web Lanjutan Laravel
        </p>

        <a href="/guru" class="btn">
            Masuk Data Guru
        </a>

    </div>

    <div class="cards">

        <div class="card">

            <h2>CRUD Guru</h2>

            <p>
                Fitur tambah, tampil, edit, dan hapus data guru.
            </p>

            <a href="/guru" class="btn">
                Buka
            </a>

        </div>

        <div class="card">

            <h2>Export Excel</h2>

            <p>
                Export data guru ke file Excel.
            </p>

            <a href="/guru/excel" class="btn">
                Export
            </a>

        </div>

        <div class="card">

            <h2>Export PDF</h2>

            <p>
                Export data guru ke file PDF.
            </p>

            <a href="/guru/pdf" class="btn">
                Export
            </a>

        </div>

        <div class="card">

            <h2>REST API Book</h2>

            <p>
                API CRUD Book menggunakan Laravel REST API.
            </p>

            <a href="/api/books" class="btn">
                Open API
            </a>

        </div>

    </div>

    <footer>
        Pemrograman Web Lanjutan - Laravel Project
    </footer>

</body>
</html>