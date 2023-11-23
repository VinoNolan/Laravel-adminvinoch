@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PRODUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- MAIN CONTENT --}}
    <section class="content">
        <div class="container-fluid">
        <form action="{{ route('produk.update',['id'=> $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Produk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judulproduk">Judul Produk</label>
                      <input type="text" class="form-control" id="judulproduk" name="judulproduk" value="{{ $data->judulproduk }}" placeholder="Enter Judul Produk">
                      @error('judulproduk')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="hargaproduk">Harga Produk</label>
                      <input type="number" class="form-control" id="hargaproduk" name="hargaproduk" value="{{ $data->hargaproduk }}" placeholder="Enter Harga Produk">
                    @error('hargaproduk')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsiproduk">Deskripsi Produk</label>
                        <input type="text" class="form-control" id="deskripsiproduk" name="deskripsiproduk" value="{{ $data->deskripsiproduk }}" placeholder="Deskripsi Produk">
                        @error('deskripsiproduk')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <label for="gambar">Gambar Produk</label>
                    <div class="form-group">
                        <img src="{{ asset('storage/gambar-produk/'.$data->gambar) }}" alt="Gambar Produk" style="max-height: 80px">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar Produk">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
        </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    {{-- END MAIN CONTENT --}}
  </div>
@endsection
