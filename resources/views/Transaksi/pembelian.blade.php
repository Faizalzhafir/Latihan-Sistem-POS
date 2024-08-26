@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Pembelian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <div class="card  card-success card-outline">
              <div class="card-header">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-form-label">No Nota</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Masukkan nomor">
                    </div>
                    <label for="inputPassword3" class="col-form-label">Tanggal Nota</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputPassword3" placeholder="Pilih tanggal">
                    </div>
                    <label>Kode Produk</label>
                        <select class="form-control">
                          <option>KDBRG0001001</option>
                          <option>KDBRG0002001</option>
                          <option>KDBRG0003001</option>
                          
                        </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-success card-outline">
              <div class="card-header">
                <li class="breadcrumb bg-success mt-3">
                  <a href="#">Total Belanja</a>
                </li>
              </div>
              <div class="card-header">
                <h2><a href=""></a>Rp650.000,00</p>
              </div>
            </div>
          </div>
          <!-- /.col -->
      </div>
        <!-- ./row -->
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Informasi Transaksi</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-1">
                    <label>Stok</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-1">
                    <label>Satuan</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-3">
                    <label>Harga</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-1">
                    <label>Kuantitas</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-3">
                    <label>Total Harga</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <td>
                <button type="button" class="btn btn-block btn-success ml-4 col-11">Success</button>
              </td>
              <!-- /.card-body -->
            </div>
    </div>
    
</div>

@endsection

 <!-- <div class="col-sm-6">
                      select
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div> -->
                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div> -->
                <!-- /.card-tools -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body">
                The body of the card
              </div> -->
              <!-- /.card-body -->