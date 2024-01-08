<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
<h1>Create Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    <input type="text" name="nama_mahasiswa"placeholder="nama"><br>
    <input type="text" name="nim"placeholder="nim"><br>
    <input type="text" name="prodi"placeholder="prodi"><br>
    <input type="text" name="alamat"placeholder="alamat"><br>
    <input type="submit" name="submit" value="save">
    <a class="btn btn-primary" href="/mahasiswa">  Back </a>
</form>
    </div>
</body>
