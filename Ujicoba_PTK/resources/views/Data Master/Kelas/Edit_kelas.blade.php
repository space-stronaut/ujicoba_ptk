@extends('Layout.app')
@section('title', 'Edit Data Kelas')

@section('content')
    <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data Kelas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            <form method="POST" action="{{ route('datakelas.update', $kelas->id) }}">
              @csrf
              @method('PUT')
                <div class="form-group">
                  <label for="kodeKelas">Kode Kelas</label>
                  <input type="text" class="form-control @error('kodekelas') is-invalid @enderror" value="{{ old('kodekelas', $kelas->kode_kelas) }}" name="kodekelas">
                  @error('kodekelas')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="namaKelas">Nama Kelas</label>
                  <input type="text" class="form-control @error('namakelas') is-invalid @enderror" value="{{ old('namakelas', $kelas->nama_kelas) }}" name="namakelas">
                  @error('namakelas')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{ route('datakelas.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
@endsection