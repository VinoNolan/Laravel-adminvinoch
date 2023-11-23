@extends('layout.authmain')

@section('title')
<title>Forgot Password | Admin Vinoch.Id</title>
@endsection

@section('body')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <b class=" text-xl">ADMIN</b>
        </div>
        @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
        <form action="{{ route('forget.password.post') }}" method="POST">
            @csrf
            <div class="card-body">
            <p class="login-box-msg">Isi email yang digunakan untuk login</p>
                <div class="input-group mb-3">
                <input type="email" id="email-address" class="form-control" name="email" placeholder="Email" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                </div>
                <div class="row">
                <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Minta Password Baru</button>
                    </div>
                    <!-- /.col -->
                </div>
          </form>
          <p class="mt-3 mb-1">
            <a href="{{ route('login') }}">Login</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
@endsection
