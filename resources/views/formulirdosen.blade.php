@extends('layout.main')
@section('title', 'Formulir Dosen')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/dosen/simpandosen" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukan NIDN" required>
            </div>
            <div class="form-group w-25">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <label>Status</label>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tetap" class="form-check-input">
                <label>Dosen Tetap</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tidak Tetap" class="form-check-input">
                <label>Dosen Tidak Tetap</label>
            </div>
            <div class="form-group w-25">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control">
                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                    <option value="Guru Besar">Guru Besar</option>
                </select>
                <label>Bidang Keahlian</label>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Web Engineer" class="form-check-input">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Artifical Intelligence" class="form-check-input">
                    <label>Artical Inteligence</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="DB Engineer" class="form-check-input">
                    <label>DB Engineer</label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
        </div>
@endsection