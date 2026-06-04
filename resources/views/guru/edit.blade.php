<!DOCTYPE html>
<html>
<head>
    <title>Edit Guru</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:50%;
            margin:50px auto;
            background:white;
            padding:30px;
            border-radius:10px;
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

    </style>

</head>
<body>

<div class="container">

    <h1>Edit Guru</h1>

    <form action="/guru/update/{{ $guru->id }}" method="POST">

        @csrf

        <input type="text"
               name="nama_guru"
               value="{{ $guru->nama_guru }}">

        <input type="email"
               name="email"
               value="{{ $guru->email }}">

        <input type="text"
               name="alamat"
               value="{{ $guru->alamat }}">

        <button type="submit">
            Update
        </button>

    </form>

</div>

</body>
</html>