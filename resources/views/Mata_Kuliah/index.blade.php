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

<h2>Data Mata Kuliah</h2>
<a class="btn btn-primary" href="/mahasiswa">  Back </a>
<a class="btn btn-primary" href="/prodi/create">Add Data Mata Kuliah</a>
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>nama mata kuliah</th>
    </tr>
    @foreach ($mata_kuliah as $mk )


    <tr>
        <td>{{$mk->id}}</td>
        <td>{{$mk->nama_matkul}}</td>
    </tr>
    @endforeach
</table>
    </div>
</body>

