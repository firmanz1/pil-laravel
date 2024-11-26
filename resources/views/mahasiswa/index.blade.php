<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="margin-left: 20px;">
            <a class="navbar-brand" href="/">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-left: 17px;  font-family: segoe UI;">
        <h1>Mahasiswa</h1>

        <div class="row">
            <div class="col-sm-12">
                {{-- @if (Session::has ('success'))
                    <div class="pt-3">
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    </div> --}}
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>successfully</strong>{{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                {{-- @endif --}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h4>TABEL MAHASISWA</h4>
            </div>
            <div class="col-sm-6" style="text-align:right">
                <a href="mahasiswa/create" class="btn btn-secondary btn-sm">Tambah Mahasiswa</a>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-dark table-sm table-hover table-striped table-bordered text-center ">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Prodi</th>
                                <th>Tanggal Lahir</th>
                                <th colspan="2">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $m)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $m->nim }}</td>
                                <td>{{ $m->nama_mahasiswa }}</td>
                                <td>{{ $m->jk }}</td>
                                <td>{{ $m->prodi }}</td>
                                <td>{{ $m->tgl_lahir }}</td>
                                <td>{{ $m->alamat }}</td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>