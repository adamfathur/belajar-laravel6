@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="tambah-data" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>NPM</th>
                            <th>NAMA LENGKAP</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>JENIS KELAMIN</th>
                            <th>HP</th>
                            <th>ALAMAT</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{$mhs ->id}}</td>
                            <td>{{$mhs ->npm }}</td>
                            <th>{{$mhs ->nama_mahasiswa}}</th>
                            <td>{{$mhs ->tempat_lahir.', '.$mhs ->tgl_lahir }}</td>
                            <td>{{$mhs ->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td>{{$mhs ->hp }}</td>
                            <td>{{$mhs ->alamat }}</td>
                            <td>
                                <a href="{{route('mahasiswa.edit', $mhs->id )}}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{route('mahasiswa.hapus', $mhs->id )}}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
