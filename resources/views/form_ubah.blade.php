@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('siswa.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="nama" required value="{{ $siswa->nama }}">
                    Nis <input type="text" name="nis" required value="{{ $siswa->nis }}">
                    Tanggal Lahir <input type="date" name="tgl_lahir" required value="{{ $siswa->tgl_lahir }}">
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success mt-2">
            </form>
        </div>
    </div>
</div>
@endsection