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
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <a href="{{ route('produk.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>

                <div class="card-tools">
                  <form action="{{ route('produk.index') }}" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $request->get('search') }}">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default bg-success">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset('storage/photo.user/'.$d->photo) }}" width="100px" alt=""></td>
                      <td>{{ $d->products_id}}</td>
                      <td>{{ $d->products_name}}</td>
                      <td>{{ $d->buying_price}}</td>
                      <td>{{ $d->selling_price}}</td>
                      <td>
                        <a href="{{ route('produk.edit',['id' => $d->id ]) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                        <a data-toggle="modal" data-target="#modal-delete{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <div class="modal fade" id="modal-delete{{ $d->id }}"> 
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Confirmation</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure want to delete <b>{{ $d->products_name }}</b>?</p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <form action="{{ route('produk.delete',['id' => $d->id ]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>       
</div>
@endsection
