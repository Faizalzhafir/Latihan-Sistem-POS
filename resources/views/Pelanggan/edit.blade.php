@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pelanggan.index')}}">Pelanggan</a></li>
              <li class="breadcrumb-item active">Tambah Data Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('pelanggan.update',['id' => $data->id]) }}" method="POST">
        @csrf 
        @method('PUT')
        <!-- csrf digunakan untuk kepentingan atau security dari sistem yang dibuat -->
        <!-- enctype digunakan agar file dapat terdetksi dan terbaca oleh sistem -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" name="customer_name" class="form-control" id="exampleInputEmail1" value="{{ $data->customer_name }}" placeholder="Masukkan nama">
                  @error('customer_name')
                      <small>{{ $message }}</small>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.HP</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputEmail"  value="{{ $data->phone }}" placeholder="Masukkan nomor telepon format(+62XXXXXXXXX)">
                    @error('phone')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="live" class="form-control" id="exampleInputEmail"  value="{{ $data->live }}" placeholder="Masukkan alamat">
                    @error('live')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" name="status" class="form-control" id="exampleInputEmail"  value="{{ $data->status }}" placeholder="Masukkan deskripsi penyuplai">
                    @error('status')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <!-- 'error' digunakan untuk menampilkan pesan harus diisi,apabila tidak ada pengisian sama sekali,atau tidak sesuai dengan apa yang harus diinputkan -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  </div>
@endsection