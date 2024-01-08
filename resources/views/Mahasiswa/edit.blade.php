<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
<h1>Edit Data Mahasiswa</h1>

<form action="/mahasiswa/{{$mahasiswa->id}}{/store" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama_mahasiswa"placeholder="nama" value ="{{$mahasiswa->nama_mahasiswa}}"><br>
    <input type="text" name="nim"placeholder="nim"  value ="{{$mahasiswa->nim}}"><br>
    <input type="text" name="prodi"placeholder="prodi"  value ="{{$mahasiswa->prodi}}"><br>
    <input type="text" name="alamat"placeholder="alamat"  value ="{{$mahasiswa->alamat}}"><br>
    <input type="submit" name="submit" value="save">
    <a class="btn btn-primary" href="/mahasiswa">  Back </a>
</form>
    </div>
</body>
