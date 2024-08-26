<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
        <table border="1">
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>
            @foreach ($data as $d) 

            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
            </tr>
                
            @endforeach 

        </table> 
        untuk melooping ke halaman index,maka gunakan foreach,lalu tambahkan dari variabel mana datanya dan tambahkan variabel alias nya 
        lalu untuk menampilkan data nya,panggil alias variabelnya () lalu tambahkan dengan shift nama field yang akan diambil
    </div>
</body>
</html> -->

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
              <li class="breadcrumb-item active">Pelanggan</li>
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
                <a href="{{ route('pelanggan.create') }}" class="btn btn-success mb-3">Tambah Data</a>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Pelanggan</h3>

                    <div class="card-tools">
                      <form action="{{ route('pelanggan.index') }}" method="GET">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $request->get('search') }}">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default bg-success">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                        </div>
                      </form>
                     
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pelanggan </th>
                          <th>No.HP</th>
                          <th>Alamat</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $d)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $d->customer_name}}</td>
                          <td>{{ $d->phone}}</td>
                          <td>{{ $d->live}}</td>
                          <td>{{ $d->status}}</td>
                          <td>
                              <a href="{{ route('pelanggan.edit',['id' => $d->id ]) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                              <a data-toggle="modal" data-target="#modal-delete{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
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
                              <p>Are you sure want to delete <b>{{ $d->customer_name }}</b> ?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('pelanggan.delete',['id' => $d->id ]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content membuat alert pada tombol hapus data-->
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
    </div>
  </section>       
 </div>
@endsection
