@extends('layouts.app')
@section('body')
<h1 class="text-center m-4">Tambah Data Pasien</h1>
<form action="{{ route('pasien.store') }}" method="POST">
  @csrf
  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
    <div class="col-sm-10">
      <input type="string" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
      @error('nama')
      <span class="invalid-feedback">
        <p>{{ $message }}</p>
      </span>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat Pasien</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
      @error('alamat')
      <span class="invalid-feedback">
        <p>{{ $message }}</p>
      </span>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="penyakit" class="col-sm-2 col-form-label">Jenis Penyakit Pasien</label>
    <div class="col-sm-10">
      <select class="form-select @error('penyakit') is-invalid @enderror" aria-label="Default select example" name="penyakit" id="penyakit">
        <option value="dalam" selected>dalam</option>
        <option value="luar">luar</option>
      </select>
      @error('penyakit')
      <span class="invalid-feedback">
        <p>{{ $message }}</p>
      </span>
      @enderror
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<a href="/" class="btn btn-success mt-4">Kembali</a>
@endsection