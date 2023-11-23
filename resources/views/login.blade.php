@extends('layout.authmain')

@section('title')
<title>Login | Vinoch Admin</title>
@endsection

@section('body')
<body class="hold-transition login-page bglogin">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <b class=" text-xl">ADMIN</b>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Silahkan Login dan Selamat Bekerja</p>

          <form action="{{ route('proseslogin') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('email')
                <small>{{ $message }}</small>
            @enderror
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
                <small>{{ $message }}</small>
            @enderror
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
            </div>
            <div class="social-auth-links text-center mt-2 mb-3">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.social-auth-links -->
          </form>


          <p class="mb-1">
            <a href="{{ route('forgot') }}">I forgot my password</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
@endsection

@section('sweetalert')
@if ($message = Session::get('failed'))
<script>
    Swal.fire
    ({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
    })
</script>
@endif
@if ($message = Session::get('success'))
<script>
    Swal.fire
    ({
        icon: 'success',
        title: 'Selamat',
        text: '{{ $message }}',
    })
</script>
@endif
@if ($message = Session::get('gagal'))
<script>
    Swal.fire
    ({
        icon: 'error',
        title: 'Pelanggaran',
        text: '{{ $message }}',
    })
</script>
@endif
@if ($message = Session::get('message'))
<script>
    Swal.fire
    ({
        icon: 'success',
        title: 'Perhatian',
        text: '{{ $message }}',
    })
</script>
@endif
@endsection
