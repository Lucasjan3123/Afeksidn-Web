@extends('../layout')

@section('title', ' Daftar | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/loginregis.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')
<div class="container-lg mt-3 px-4" style="padding-top:94px;">
    <div class="row align-items-center justify-content-center gap-2">
      <!-- Left Column -->
      <div class="col-md-5 d-none d-md-inline">
        <img src="assets/img/login-register/registerImg.svg" class="img-fluid align-self-center" alt="Image">
        <div class="heading text-center mt-5">
          <h3 class="fw-semibold">Selamat Datang, Heroes!</h3>
          <p class="text-secondary">Bercerita & berbagi rasa. Tenangkan hati & tenangkan diri.</p>
        </div>
      </div>
      <!-- Right Column -->
      <div class="col-md-5 d-flex flex-column">
        <div class="heading text-center">
          <h3 class="fw-semibold">Buat Akun Baru</h3>
          <p class="text-secondary">Silahkan isi data berikut untuk melanjutkan.</p>
        </div>
        <form method="POST" action="{{ route('register') }}">
          @csrf
           @if ($errors->get('email'))
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger fst-italic" style="font-size:14px;" />
            @else
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger fst-italic" style="font-size:14px;" />
            @endif
          <div class="mb-2">
            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" class="form-control py-2 px-3" id="nama" placeholder="Masukkan Nama Lengkap" name="name" value="{{ old('name') }}" required>
          </div>
          <div class="mb-2">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control py-2 px-3" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required />
          </div>
          <div class="mb-2">
            <label for="passwordInput" class="form-label fw-semibold">Password</label>
            <div class="password-container">
              <input type="password" class="form-control" id="passwordInput" placeholder="Masukkan Password" name="password" required />
              <img style="width:23px;" src="assets/img/login-register/mdi_eye.png" alt="" class="password-icon">
            </div>
          </div>
          <div class="mb-2">
            <label for="confirmPasswordInput" class="form-label fw-semibold">Konfirmasi Password</label>
            <div class="password-container">
              <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Konfirmasi Password" name="password_confirmation" required />
              <img style="width:23px;" src="assets/img/login-register/mdi_eye.png" alt="" class="password-icon">
            </div>
          </div>
          <div class=" mt-3 mb-2 text-center">
            Dengan membuat akun, saya setuju dengan <a href="#">Persyaratan Layanan</a> dan <a href="/kebijakan-privasi">Kebijakan Privasi</a> AFEKSI.
          </div>
          <div class="d-flex flex-column mt-auto">
            <button type="submit" class="btn form-btn mb-2 fw-semibold">Daftar</button>
            <div class="formSmText mb-2">
              <div class="horizontal-line"></div>
              <span class="mx-3 text-muted">Atau Daftar Dengan</span>
              <div class="horizontal-line"></div>
            </div>
            <a type="button" href="{{ route('auth.google') }}" class="btn btn-transparent mb-2 fw-semibold d-flex align-items-center justify-content-center">

              <img src="assets/img/login-register/Google.png" alt=""><span class="mx-3">Daftar dengan Google</span>
            </a>
            <div class="formSmText mb-3">
              <p class="text-muted">Sudah punya akun? <a href="{{ route('login') }}">Masuk sekarang</a></p>
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
