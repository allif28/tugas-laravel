<!DOCTYPE html>
<html>
<head>
    <title>Tambah Guru</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:50%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
        }

        button{
            background:#8B0000;
            color:white;
            padding:12px 20px;
            border:none;
            border-radius:5px;
        }

        .checkbox-group{
            margin-bottom:20px;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Tambah Guru</h1>

    <form action="/guru/store" method="POST">

        @csrf

        <label>Nama Guru</label>

        <input type="text" name="nama_guru">

        <label>Email</label>

        <input type="email" name="email">

        <label>Alamat</label>

        <input type="text" name="alamat">

        <label>Mata Pelajaran</label>

        <div class="checkbox-group">

            @foreach($matpels as $m)

                <input type="checkbox"
                       name="matpels[]"
                       value="{{ $m->id }}"
                       style="width:auto;">

                {{ $m->nama_matpel }}

                <br><br>

            @endforeach

        </div>

        <button type="submit">
            Simpan
        </button>

    </form>

</div>

</body>
</html>