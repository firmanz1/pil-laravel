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
        <h1>Ini Ni Halaman Tambah Mahasiswa</h1>
            <div class="row">
                <div class="col-sm-12">
                    <h4 >Form Mahasiswa</h4>
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">NIM</label>
                                <input type="number" name="NIM" class="form-control" placeholder="nim woii nimm" >
                            </div>
                        <div class="col-sm-6">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="Nama_Mahasiswa"  class="form-control" placeholder="namamu jangan nama oranglain">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Lakik apa bukan</label>
                                <select name="Lakik_Apa_Bukan" class="form-control" placeholder="">
                                <option value="1">Lakik</option>
                                <option value="2">Bukan Lakik bg</option>
                            </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Program Study</label>
                                <select name="Prodi"  class="form-control">
                                    <option value="1">SI soleedd</option>
                                    <option value="2">Ilmu ghoib</option>
                                    <option value="3">Ilmu GPT</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Tanggal Membumi</label>
                                <input type="date" name="TTL" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Dari mana Kau Bang</label>
                                <select name="Inpo" class="form-control">
                                <option value="1">Tembung</option>
                                <option value="2">Kampung Keling</option>
                                <option value="3">Karo</option>
                                </select>
                            </div>  
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                            <button class="btn btn-danger btn-outline-warning" style="width: 100%">Simpan</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="mahasiswa" class="btn btn-secondary btn-outline-warning" style="width: 100%">Pulang</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>