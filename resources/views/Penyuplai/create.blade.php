@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penyuplai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{ route('penyuplai.index')}}">Penyuplai</a></li>
              <li class="breadcrumb-item active">Tambah Data Penyuplai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('penyuplai.store') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <!-- csrf digunakan untuk kepentingan atau security dari sistem yang dibuat -->
        <!-- enctype digunakan agar file dapat terdetksi dan terbaca oleh sistem -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Penyuplai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penyuplai</label>
                    <input type="text" name="supplier_name" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama">
                  @error('supplier_name')
                      <small>{{ $message }}</small>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.HP</label>
                    <input type="tel" name="telephone" class="form-control" id="exampleInputEmail" placeholder="Masukkan nomor telepon">
                    @error('telephone')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail" placeholder="Masukkan alamat">
                    @error('address')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" name="descriptions" class="form-control" id="exampleInputEmail" placeholder="Masukkan deskripsi penyuplai">
                    @error('descriptions')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <!-- 'error' digunakan untuk menampilkan pesan harus diisi,apabila tidak ada pengisian sama sekali,atau tidak sesuai dengan apa yang harus diinputkan -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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