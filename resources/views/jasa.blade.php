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
              <li class="breadcrumb-item active">Jasa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <a href="{{ route('jasa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Jasa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Judul</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d )

                    <tr>
                      <td>{{  $loop->iteration }}</td>
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->juduljasa }}</td>
                      <td>{{ 'Rp ' . number_format($d->hargajasa, 0, ',', '.') }}</td>
                      <td class="text-wrap">{{ $d->deskripsijasa }}</td>
                      <td><img src="{{ asset('storage/gambar-jasa/'.$d->gambarjasa) }}" alt="gambarjasa"  height="80"></td>
                      <td>
                            <a href="{{ route('edit.jasa',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                      </td>
                    </tr>
                    {{-- MODAL HAPUS --}}
                    <div class="modal fade" id="modal-hapus{{ $d->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Yakin untuk hapus data <b>{{ $d->juduljasa }}</b>?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <form action="{{ route('jasa.delete',['id'=>$d->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                    </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
