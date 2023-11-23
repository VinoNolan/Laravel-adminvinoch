@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">USER PEMBELI</h1>
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
        <form action="{{ route('userpembeli.update',['id'=> $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit User Pembeli</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="name" value="{{ $data->name }}" placeholder="Enter Name">
                      @error('name')
                          <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" placeholder="Enter email">
                    @error('email')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
                    @error('password')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="asalkota">Asal kota</label>
                      <input type="text" class="form-control" id="asalkota" name="asalkota" value="{{ $data->asalkota }}" placeholder="Enter Asal Kota">
                    @error('asalkota')
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
