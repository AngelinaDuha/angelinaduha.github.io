<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body class="bg-image" 
        style="background-image: url('https://2.bp.blogspot.com/-MrBetiS2cmk/XOP_-2YSouI/AAAAAAAAEiQ/ouNjcYSnrC4qDGRJubWUtIQ-_ccSqtozACLcBGAs/s1600/background3.jpg'); height: 120vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-1 text-center bg-dark">
                    <div class="mb-2 mt-1 align-center"></div>
                        <div class="dropdown float-right">
                        <button class="btn bg-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-square"></i>User
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/user">Data Pengguna</a>
                            <a class="dropdown-item" href="#">{{ Auth::user()->name ?? '' }}</a>
                            <a class="dropdown-item" href="/logout">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-4 col-12">
                    <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
                        <a class="nav-link bg-dark text-white rounded-0 p-2 border active" href="/home">Home</a>
                        <a class="nav-link bg-dark text-white rounded-0 p-2 border" href="/dosen">Dosen</a>
                        <a class="nav-link bg-dark text-white rounded-0 p-2 border" href="/mahasiswa">Mahasiswa</a>
                        <a class="nav-link bg-dark text-white rounded-0 p-2 border" href="/skripsi">Skripsi</a>
                    </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
            <div class="card-header">
                <a name="" class="btn btn-primary" href="/dosen/formulirdosen" role="button"><i class="bi bi-plus-square-fill"></i>ADD</a> 
                <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
                @if (session('alert'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Clese">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @yield('content')
        </div>
    </div>
</div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>