@extends('layout.main')
@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="img/logoUtama.png" alt="Vinoch.Id|Admin" height="350" width="350">
  </div>
@endsection
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
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
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
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $totalproduk }} </h3>

                  <p>Total Produk</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('produk') }}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-cyan">
                <div class="inner">
                    <h3>{{ $totaljasa }}</h3>

                  <p>Total Jasa</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pricetags"></i>
                </div>
                <a href="{{ route('jasa') }}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $totaluser }}</h3>

                  <p>Total Admin Account</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{ route('user') }}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $totaluserpembeli }}</h3>

                  <p>Total User Pembeli</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{ route('userpembeli') }}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $totalpemesanan }}</h3>

                  <p>Total Pemesanan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-cart"></i>
                </div>
                <a href="{{ route('pemesanan') }}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
@endsection
@section('sweetalert')
@if ($message = Session::get('gagal'))
<script>
    Swal.fire
    ({
        icon: 'error',
        title: 'Perhatian',
        text: '{{ $message }}',
    })
</script>
@endif
@if ($message = Session::get('bukansuperadmin'))
<script>
    Swal.fire
    ({
        icon: 'error',
        title: 'Perhatian',
        text: '{{ $message }}',
    })
</script>
@endif
@endsection
