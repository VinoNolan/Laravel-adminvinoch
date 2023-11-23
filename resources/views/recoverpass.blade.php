@extends('layout.authmain')

@section('title')
    <title>Recover Password | Admin Vinoch.Id</title>
@endsection

@section('body')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <b class=" text-xl">ADMIN</b>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Masukan Password Baru</p>
          <form action="{{ route('reset.password.post') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input-group mb-3">
              <input type="text" id="email_address" name="email" class="form-control" placeholder="Email Address" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Ganti Password</button>
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
