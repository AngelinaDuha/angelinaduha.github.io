@extends('layout.main')
@section('title', 'Edit Mahasiswa')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/updatemahasiswa/{{$mahasiswa-> id}}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group w-25">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <label>Gender</label>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->gender = 'Laki-laki' ? 'checked':'' }} 
                class="form-check-input">
                <label>Laki-laki</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Wanita" {{ $mahasiswa->gender = 'Wanita' ? 'checked':'' }} 
                class="form-check-input">
                <label>Wanita</label>
            </div>
            <div class="form-group w-25">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                    <option value="Informatika" {{ $mahasiswa->jurusan == 'Informatika' ? 'selected':'' }}>Informatika</option>
                    <option value="Management" {{ $mahasiswa->jurusan == 'Management' ? 'selected':'' }}>Management</option>
                    <option value="Desain Produk" {{ $mahasiswa->jurusan == 'Desain Produk' ? 'selected':'' }}>Desain Produk</option>
                    <option value="Teologi" {{ $mahasiswa->jurusan == 'Teologi' ? 'selected':'' }}>Teologi</option>
                    <option value="Kedokteran" {{ $mahasiswa->jurusan == 'Kedokteran' ? 'selected':'' }}>Kedokteran</option>
                    <option value="Bioteknologi" {{ $mahasiswa->jurusan == 'Bioteknologi' ? 'selected':'' }}>Bioteknologi</option>
                </select>
                @php
                    $minat = explode(',', $mahasiswa->minat);
                @endphp
                <label>Bidang Minat</label>
                <div class="form-check w-25">
                    <input type="checkbox" {{ in_array('Web Engineer', $minat) ? 'checked' : '' }} name="minat[]" value="Web Engineer" 
                    class="form-check-input">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Artifical Intelligence" {{ in_array('Artificial Intelligence', $minat) ? 'checked' : '' }} 
                    class="form-check-input">
                    <label>Artical Inteligence</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="DB Engineer" {{ in_array('DB Engineer', $minat) ? 'checked' : '' }} 
                    class="form-check-input">
                    <label>DB Engineer</label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
        </div>
@endsection