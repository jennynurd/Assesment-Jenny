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

<h1>Create Dosen</h1>

<form action="/dosen/store" method="POST">
    @csrf
    <input type="text" name="nama_dosen"placeholder="nama"><br>
    <input type="text" name="nip"placeholder="nip"><br>
    <input type="text" name="email"placeholder="email"><br>
    <input type="text" name="mata_kuliah"placeholder="matlul"><br>
    <input type="submit" name="submit" value="save">
    <a class="btn btn-primary" href="/dosen">  Back </a>
</form>
    </div>
</body>
