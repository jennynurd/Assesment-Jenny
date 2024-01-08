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
<h2>Data Dosen</h2>
<a class="btn btn-primary" href="/dosen/create">Add Dosen</a>
<a class="btn btn-primary" href="/mahasiswa">  Back </a>
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>nama_dosen</th>
        <th>nip</th>
        <th>email</th>
        <th>mata kuliah</th>
    </tr>
    @foreach ($dosen as $d )


    <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nama_dosen}}</td>
        <td>{{$d->nip}}</td>
        <td>{{$d->email}}</td>
        <td>{{$d->mata_kuliah}}</td>
    </tr>

    @endforeach
</table>
    </div>
</body>

