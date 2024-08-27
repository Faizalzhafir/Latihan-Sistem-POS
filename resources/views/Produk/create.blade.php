@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{ route('produk.index')}}">Produk</a></li>
              <li class="breadcrumb-item active">Tambah Data Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <!-- csrf digunakan untuk kepentingan atau security dari sistem yang dibuat -->
        <!-- enctype digunakan agar file dapat terdetksi dan terbaca oleh sistem -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Photo</label>
                    <input type="file" name="photo" class="form-control" id="exampleInputEmail1">
                    <small>Upload the photo,if you want change it</small>
                  @error('photo')
                    <br>
                    <small>{{ $message }}</small>
                  @enderror
                  </div>
                  <!-- <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih Poto Produk</label>
                  @error('photo')
                      <small>{{ $message }}</small>
                  @enderror
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Produk</label>
                    <input type="text" name="products_id" class="form-control" id="exampleInputEmail" placeholder="Masukkan kode produk">
                  @error('products_id')
                      <small>{{ $message }}</small>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" name="products_name" class="form-control" id="exampleInputEmail1"  placeholder="Masukkan nama produk">
                  @error('products_name')
                      <small>{{ $message }}</small>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Beli</label>
                    <input type="tel" name="buying_price" class="form-control" id="exampleInputEmail"  placeholder="Masukkan harga jual">
                    @error('buying_price')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Jual</label>
                    <input type="text" name="selling_price" class="form-control" id="exampleInputEmail" placeholder="Masukkan harga beli">
                    @error('selling_price')
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