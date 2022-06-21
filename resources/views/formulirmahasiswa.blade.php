@extends('layout.main')
@section('title', 'Formulir Mahasiswa')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
            </div>
            <div class="form-group w-25">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <label>Gender</label>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
                <label>Laki-laki</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Wanita" class="form-check-input">
                <label>Wanita</label>
            </div>
            <div class="form-group w-25">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Management">Management</option>
                    <option value="Desain Produk">Desain Produk</option>
                    <option value="Teologi">Teologi</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Bioteknologi">Bioteknologi</option>
                </select>
                <label>Bidang Minat</label>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Web Engineer" class="form-check-input">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Artifical Intelligence" class="form-check-input">
                    <label>Artical Inteligence</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="DB Engineer" class="form-check-input">
                    <label>DB Engineer</label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
        </div>
@endsection