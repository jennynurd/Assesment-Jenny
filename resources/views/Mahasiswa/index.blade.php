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
<h1>Website Kampus Mardira</h1>

<h2>Data Mahasiswa</h2>

<a class="btn btn-primary" href="/mahasiswa/create">Add Mahasiswa</a> <a class="btn btn-success" href="/dosen">Data Dosen</a> <a class="btn btn-info" href="/prodi">Data Prodi</a><a class="btn btn-warning" href="/mata_kuliah">Data Mata Kuliah</a>
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>nama_mahasiswa</th>
        <th>nim</th>
        <th>prodi</th>
        <th>alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $m)


    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama_mahasiswa}}</td>
        <td>{{$m->nim}}</td>
        <td>{{$m->prodi}}</td>
        <td>{{$m->alamat}}</td>
        <td>
            <a href="/mahasiswa/{{$m->id}}/edit" class="btn btn-dark">Edit</a>
            <form action="">
                <input type="submit" value="Delete">

            </form>
        </td>

    </tr>

    @endforeach
</table>
    </div>
</body>
</html>

