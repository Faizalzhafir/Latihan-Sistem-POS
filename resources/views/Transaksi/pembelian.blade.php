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
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
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
                    <label for="inputEmail3" class="col-form-label ml-3">Tanggal Nota</label>
                    <div class="col-sm-4 input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                        </div>
                    </div>
                    <label class="mt-2">Kode Produk</label>
                        <select class="form-control">
                          <option>KDBRG0001001</option>
                          <option>KDBRG0002001</option>
                          <option>KDBRG0003001</option>
                          <option>KDBRG0004001</option>
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
        <div class="card card-success card-outline col-12">
              <div class="card-header">
                <h3 class="card-title">Informasi Transaksi Pembelian</h3>
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
                <button type="button" class="btn btn-block btn-success mb-3 "><a href="#"></a><i class="fas fa-cart-plus"></i> Tambah Produk</button>
              </td>
              <!-- /.card-body -->
        </div>
        <div class="card-body table-responsive card-outline card-success p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Kuantitas</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-3">
              <label>Penyuplai</label>
              <select class="form-control">
                <option>PT.Allahumma</option>
                <option>PT.Berkah Jaya Abadi</option>
                <option>PT.Sentosa Comring</option>
              </select>
            </div>
            <div class="col-6 mt-5">
            <td>
              <button type="button" class="btn btn-block btn-success"><a href="#"></a><i class="nav-icon fas fa-copy"></i> Simpan</button>
            </td>
            </div>
          <!-- textarea -->
          <!-- /.col -->
        </div>
        <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control col-6" rows="3"></textarea>
        </div>
    </div>  
</div>
@endsection

