@extends('layout.main')
@section('title', 'Account')
@section('content')
            <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang Minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $no => $d)
                        <tr>
                            <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
                            <td>{{ $d->nim }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->gender }}</td>
                            <td>{{ $d->jurusan }}</td>
                            <td>{{ $d->bidang_minat }}</td>
                            <td>
                                <a href="/mahasiswa/editmahasiswa/{{ $d->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/mahasiswa/hapusmahasiswa/{{ $d->id }}" class="btn btn-outline-primary"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"><i class="bi bi-x-square"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{ $mahasiswa->links() }}</span>
        </div>
   
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
