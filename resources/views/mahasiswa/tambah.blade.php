@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <form action="mahasiswa"  method="POST" class="form-item">
                    @csrf
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control col-md-5" id="npm" placeholder="Masukan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control col-md-5" id="nama_mahasiswa" placeholder="Masukan Nama Mahasiswa">
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-3" id="tgl_lahir" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-3" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    
                    <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" >
                        <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" >
                        <label class="form-check-label">Perempuan</label>
                    </div>
                     </div>

                    <div class="form-group">
                        <label for="hp">Nomor HP</label>
                        <input type="text" name="hp" class="form-control col-md-3" id="hp" placeholder="Masukan Nomor HP">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-3" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary float-center" name="simpan">SIMPAN</button>
                    <a href="mahasiswa"class="btn btn-danger float-center">BATAL</a>
                    </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
