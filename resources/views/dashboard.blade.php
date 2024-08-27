@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Bernda</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-4">
            <div class="info-box card-outline card-info inner">
              <span class="info-box-icon bg-info"><i class="fas fa-box"></i></span>

              <div class="info-box-content">
                <h4 class="small-box bg-info"><a class="ml-3">Penyuplai</a></h4>
                <h4 class="small-box bg-info"><a class="ml-3">150</a></h4>
                <span class="info">
                <a href="{{ route('penyuplai.index')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
                </span>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-4">
            <div class="info-box card-outline card-success inner">
              <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <h4 class="small-box bg-success"><a class="ml-3">Pelanggan</a></h4>
                <h4 class="small-box bg-success"><a class="ml-3">53</a></h4>
                <span class="info">
                <a href="{{ route('pelanggan.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
                </span>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-4">
            <div class="info-box card-outline card-danger inner">
              <span class="info-box-icon bg-danger"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <h4 class="small-box bg-danger"><a class="ml-3">Produk</a></h4>
                <h4 class="small-box bg-danger"><a class="ml-3">410</a></h4>
                <span class="info">
                <a href="{{ route('produk.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
                </span>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
            <!-- Custom tabs (Charts with tabs)-->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <li class="breadcrumb mt-3 bg-info">
                  <a href="#">Informasi Stok Produk <i class="fas fa-arrow-circle-right"></i></a>
                </li>
              </div>
              <div class="card-header">
                <li class="breadcrumb float-sm-right mt-3 p-2 bg-danger">
                  <a>Habis</a>
                </li>
                <p class="mt-3">Beras</p> 
              </div>
              <div class="card-header">
                <li class="breadcrumb float-sm-right mt-3 p-2 bg-danger">
                  <a>Habis</a>
                </li>
                <p class="mt-3">Minyak Goreng 1 Liter</p>
              </div>
              <div class="card-header">
                <li class="breadcrumb float-sm-right mt-3 p-2 bg-danger">
                  <a>Habis</a>
                </li>
                <p class="mt-3">Telur 1 Kilogram</p>
              </div>
              <div class="card-header">
                <li class="breadcrumb float-sm-right mt-3 p-2 bg-danger">
                  <a>Habis</a>
                </li>
                <p class="mt-3">Indomie Rendang</p>
              </div>
              <div class="card-header">
                <li class="breadcrumb float-sm-right mt-3 p-2 bg-danger">
                  <a>Habis</a>
                </li>
                <p class="mt-3">Coca Cola</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-success card-outline">
              <div class="card-header">
                <li class="breadcrumb bg-success mt-3">
                  <a href="#">Omset Hari ini</a>
                </li>
              </div>
              <div class="card-header">
                <h2><a href=""></a>Rp650.000,00</p>
              </div>
            </div>
          </div>
         
          <!-- /.col -->
        </div>
        <div class="row">
          
          <!-- /.col -->
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection