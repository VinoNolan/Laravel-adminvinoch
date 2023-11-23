@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PEMESANAN</h1>
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
        <form action="{{ route('pemesanan.update',['id'=> $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Pemesanan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="pesanan">Pesanan</label>
                      <input type="text" class="form-control" id="pesanan" name="pesanan" value="{{ $data->pesanan }}" placeholder="Pesanan">
                      @error('pesanan')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $data->quantity }}" placeholder="Quantity">
                    @error('quantity')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="totalharga">Total Harga</label>
                      <input type="number" class="form-control" id="totalharga" name="totalharga" value="{{ $data->totalharga }}" placeholder="Total Harga">
                    @error('totalharga')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="namapembeli">Nama Pembeli</label>
                      <input type="text" class="form-control" id="namapembeli" name="namapembeli" value="{{ $data->namapembeli }}" placeholder="Nama Pembeli">
                    @error('namapembeli')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" placeholder="email">
                    @error('email')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="kabupaten">Kabupaten</label>
                      <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $data->kabupaten }}" placeholder="kabupaten">
                    @error('kabupaten')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="kecamatan">Kecamatan</label>
                      <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $data->kecamatan }}" placeholder="kecamatan">
                    @error('kecamatan')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamatlengkap">Alamat Lengkap</label>
                      <input type="text" class="form-control" id="alamatlengkap" name="alamatlengkap" value="{{ $data->alamatlengkap }}" placeholder="alamatlengkap">
                    @error('alamatlengkap')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="tipepembayaran">Tipe Pembayaran</label>
                      <input type="text" class="form-control" id="tipepembayaran" name="tipepembayaran" value="{{ $data->tipepembayaran }}" placeholder="tipepembayaran">
                    @error('tipepembayaran')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="catatan">Catatan</label>
                      <input type="text" class="form-control" id="catatan" name="catatan" value="{{ $data->catatan }}" placeholder="catatan">
                    @error('catatan')
                      <small>{{ $message }}</small>
                    @enderror
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
