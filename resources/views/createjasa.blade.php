@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">JASA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Jasa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- MAIN CONTENT --}}
    <section class="content">
        <div class="container-fluid">
        <form action="{{ route('jasa.pushjasa') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Posting jasa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="juduljasa">Judul jasa</label>
                      <input type="text" class="form-control" id="juduljasa" name="juduljasa" placeholder="Judul jasa">
                      @error('juduljasa')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="hargajasa">Harga jasa</label>
                      <input type="number" class="form-control" id="hargajasa" name="hargajasa" placeholder="Harga Jasa">
                      @error('hargajasa')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="deskripsijasa">Deskripsi jasa</label>
                      <input type="text" class="form-control" id="deskripsijasa" name="deskripsijasa" placeholder="Deskripsi Jasa">
                      @error('deskripsijasa')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="gambarjasa">Gambar jasa</label>
                      <input type="file" class="form-control" id="gambarjasa" name="gambarjasa" placeholder="Gambar Jasa">
                      @error('gambarjasa')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Posting</button>
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
