@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('siswa.index')}}" class="btn btn-primary mb-2 ml-3 ">Kembali</a>
            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4>: {{ $siswa->nama }}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">NIS</h4>
                <h4>: {{ $siswa->nis }}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Tanggal Lahir</h4>
                <h4>: {{ $siswa->tgl_lahir }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection