@extends('layouts.admin')

@section('title')
    <title>Edit Jurusan</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Master</li>        
        <li class="breadcrumb-item active">Edit Jurusan</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Jurusan</h4>
                        </div>
                        <div class="card-body">
                          	<!-- ROUTINGNYA MENGIRIMKAN ID JURUSAN YANG AKAN DIEDIT -->
                            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                 
                                <div class="form-group">
                                    <label for="kode_jurusan">Kode Jurusan</label>
                                    <input type="text" name="kode_jurusan" class="form-control" value="{{ $jurusan->kode_jurusan }}" required maxlength="2">
                                    <p class="text-danger">{{ $errors->first('kode_jurusan') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Jurusan</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $jurusan->nama }}" required maxlength="100">
                                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Simpan</button>
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