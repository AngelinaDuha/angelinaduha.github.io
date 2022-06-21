@extends('layout.main')
@section('title', 'Edit User')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/user/updateuser/{{$user-> id}}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group w-25">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
            </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
        </div>
@endsection