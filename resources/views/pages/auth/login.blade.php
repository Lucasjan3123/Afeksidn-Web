@extends('../layout')

@section('title', 'Masuk | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/loginregis.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')

{{--  
@if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
 {{ session('error') }}
</div>
@endif --}}


<div class="container-lg mt-5 px-4" style="padding-top:94px;">
    <div class="row align-items-center justify-content-center gap-2" >
      <div class="col-md-5 d-none d-md-inline">
        <img src="assets/img/login-register/loginImg.svg" class="img-fluid align-self-center" alt="Image">
        <div class="heading text-center mt-5">
          <h3 class="fw-semibold">Selamat Datang, Heroes!</h3>
          <p class="text-secondary">Bercerita & berbagi rasa. Tenangkan hati & tenangkan diri.</p>
        </div>
      </div>
    
      <div class="col-md-5 d-flex flex-column">
        <div class="heading text-center">
          <h3 class="fw-semibold">Masuk ke Akun</h3>
          <p class="text-secondary">Silahkan masukkan informasi akun anda.</p>
        </div>
        <x-auth-session-status class="mb-4 fst-italic text-success" :status="session('status')" />
        <x-input-error :messages="$errors->get('email')" class="mt-2 fst-italic text-danger" style="font-size: 14px" />
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-2">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control py-2 px-3" id="email"  value="{{ old('email') }}"  name="email" placeholder="Masukkan Email" required />
          </div>
          <div class="mb-2">
            <label for="passwordInput" class="form-label fw-semibold">Password</label>
            <div class="password-container">
              <input type="password" class="form-control" id="passwordInput" placeholder="Masukkan Password" name="password" required />
              <img style="width:23px;" src="assets/img/login-register/mdi_eye.png" alt="" class="password-icon" />
            </div>
          </div>
          <div class="mb-2 text-end">
            <a href="{{ route('password.request') }}" class="text-decoration-none forgetPassBtn fw-semibold">Forgot password?</a>
          </div>
          <div class="d-flex flex-column mt-auto">
            <button type="submit" class="btn form-btn mb-2 fw-semibold">Masuk</button>
            <div class="formSmText mb-2">
              <div class="horizontal-line"></div>
              <span class="mx-3 text-muted">Atau Masuk Dengan</span>
              <div class="horizontal-line"></div>
            </div>
            <a type="button" href="{{ route('auth.google') }}" class="btn btn-transparent mb-2 fw-semibold d-flex align-items-center justify-content-center">
              <img src="assets/img/login-register/Google.png" alt=""><span class="mx-3">Masuk dengan Google</span>
            </a>
            <div class="formSmText">
              <p class="text-muted">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  @section('script')
  <script src="/assets/js/login-regis.js"></script>
  @endsection
@endsection
