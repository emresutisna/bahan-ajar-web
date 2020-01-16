@extends('layouts.admin')

@section('title')
    <title>Tambah Mahasiswa</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Master</li>        
        <li class="breadcrumb-item active">Tambah Mahasiswa</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                          	<!-- ROUTINGNYA MENGIRIMKAN ID Mahasiswa YANG AKAN DITambah -->
                            <form action="{{ route('mahasiswa.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" name="nim" class="form-control" maxlength="9" required value="{{ old('nim') }}">
                                        <p class="text-danger">{{ $errors->first('nim') }}</p>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label for="nama">Nama Mahasiswa</label>
                                        <input type="text" name="nama" class="form-control" maxlength="150" required value="{{ old('nama') }}">
                                        <p class="text-danger">{{ $errors->first('nama') }}</p>
                                    </div>                              
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" maxlength="50" required value="{{ old('tempat_lahir') }}">
                                        <p class="text-danger">{{ $errors->first('tempat_lahir') }}</p>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="tgl_lahir">Tgl. Lahir</label>
                                        <input type="text" name="tgl_lahir" class="form-control" maxlength="10" required value="{{ old('tgl_lahir') }}" placeholder="ex. (2000-12-28)">
                                        <p class="text-danger">{{ $errors->first('tgl_lahir') }}</p>
                                    </div>                              
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" maxlength="200" required value="{{ old('alamat') }}">
                                        <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" maxlength="1" required value="{{ old('jenis_kelamin') }}" placeholder="L atau P">
                                        <p class="text-danger">{{ $errors->first('jenis_kelamin') }}</p>
                                    </div>                              
                                    <div class="col-md-6 form-group">
                                        <label for="jenis_kelamin">Jurusan</label>
                                        <select class="form-control" name="jurusan_id">
                                            @foreach($jurusans as $jurusan)
                                                <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('jurusan_id') }}</p>
                                    </div>                                                                  
                                </div>
                                                                
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                                    <a href="{{route('mahasiswa.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </form>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection