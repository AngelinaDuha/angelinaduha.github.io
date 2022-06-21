@extends('layout.main')
@section('title', 'User')
@section('content')
<div>
<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $no => $u)
                        <tr>
                            <th scope="row">{{ $user->firstItem() + $no }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/user/hapususer/{{ $u->id }}" class="btn btn-outline-primary"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"><i class="bi bi-x-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection