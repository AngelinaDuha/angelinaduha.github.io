@extends('layout.main')
@section('title', 'Formulir User')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Pengguna" required>
            </div>
            <div class="form-group w-25">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email Pengguna" required>
            </div>
            <div class="form-group w-25">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Pengguna" required>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
            </div>
            </form>
            
        </div>
        </div>
@endsection