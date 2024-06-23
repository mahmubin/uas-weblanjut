@extends('layouts.app')
@section('body')
<h1 class="text-center m-4">Data Pasien</h1>
<div>
    @if (session()->has('message'))
    <div class="alert alert-info">
        {{ session()->get('message') }}    
    </div>
    @endif
</div>

<table class="table table-striped">
    <tr>
        <th>Nama Pasien</th>
        <th>Jenis Penyakit</th>
        <th>Alamat Pasien</th>
        <th></th>
    </tr>
    @foreach ($pasiens as $pasien)
    <tr>
        <td>{{ $pasien->nama }}</td>
        <td>{{ $pasien->penyakit }}</td>
        <td>{{ $pasien->alamat }}</td>
        <td>
            <a href="/edit/{{ $pasien->id }}" class="btn btn-warning">EDIT</a>
            <form action="/delete/{{ $pasien->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">HAPUS</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="position-relative">
    <a href="{{ route('pasien.create') }}" class="btn btn-success">Tambah Pasien</a>
    <div class="position-absolute start-50 translate-middle">
        {{ $pasiens->links() }}
    </div>
</div>
@endsection