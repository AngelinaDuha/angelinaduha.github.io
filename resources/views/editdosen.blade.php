@extends('layout.main')
@section('title', 'Edit Dosen')
@section('content')
<div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2">
        <div class="container-fluid mt-4 rounded">
        <form action="/dosen/updatedosen/{{$dosen-> id}}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
            </div>
            <div class="form-group w-25">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
            </div>
            <label>Status</label>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tetap" {{ $dosen->status = 'Dosen Tetap' ? 'checked':'' }} 
                class="form-check-input">
                <label>Dosen Tetap</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tidak Tetap" {{ $dosen->status = 'Dosen Tidak Tetap' ? 'checked':'' }} 
                class="form-check-input">
                <label>Dosen Tidak Tetap</label>
            </div>
            <div class="form-group w-25">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control">
                    <option value="Tenaga Pengajar" {{ $dosen->jafung == 'Tenaga Pengajar' ? 'selected':'' }}>Tenaga Pengajar</option>
                    <option value="Asisten Ahli" {{ $dosen->jafung == 'Asisten Ahli' ? 'selected':'' }}>Asisten Ahli</option>
                    <option value="Lektor" {{ $dosen->jafung == 'Lektor' ? 'selected':'' }}>Lektor</option>
                    <option value="Lektor Kepala" {{ $dosen->jafung == 'Lektor Kepala' ? 'selected':'' }}>Lektor Kepala</option>
                    <option value="Guru Besar" {{ $dosen->jafung == 'Guru Besar' ? 'selected':'' }}>Guru Besar</option>
                </select>
                @php
                    $pakar = explode(',', $dosen->pakar);
                @endphp
                <label>Bidang Keahlian</label>
                <div class="form-check w-25">
                    <input type="checkbox" {{ in_array('Web Engineer', $pakar) ? 'checked' : '' }} name="pakar[]" value="Web Engineer" 
                    class="form-check-input">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Artifical Intelligence" {{ in_array('Artificial Intelligence', $pakar) ? 'checked' : '' }} 
                    class="form-check-input">
                    <label>Artical Inteligence</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="DB Engineer" {{ in_array('DB Engineer', $pakar) ? 'checked' : '' }} 
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