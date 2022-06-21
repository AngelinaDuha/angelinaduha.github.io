@extends('layout.main')
@section('title', 'Dosen')
@section('content')
<div>
<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jabatan Fungsional</th>
                        <th scope="col">Keahlian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $no => $d)
                        <tr>
                            <th scope="row">{{ $dosen->firstItem() + $no }}</th>
                            <td>{{ $d->nidn }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->status }}</td>
                            <td>{{ $d->jafung }}</td>
                            <td>{{ $d->pakar }}</td>
                            <td>
                                <a href="/dosen/editdosen/{{ $d->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/dosen/hapusdosen/{{ $d->id }}" class="btn btn-outline-primary"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"><i class="bi bi-x-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{ $dosen->links() }}</span>
        </div>
@endsection

