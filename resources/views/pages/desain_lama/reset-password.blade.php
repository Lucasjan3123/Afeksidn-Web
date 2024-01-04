@extends('../layout')

@section('title', 'reset-password')

@section('styles')
    <link rel="stylesheet" href="assets/css/reset-password.css">
@endsection


@section('content')
<section id="lupa-password" style="background-image: url('{{ asset('assets/img/lupapassword.png') }}');">
    <nav class="navbar w-100">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logoafeksi.svg" alt="Logo" class="d-block " height="100" width="100">
        </a>
    </nav>
    <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center">
      <h3 class="mb-3">Reset Password</h3>
      <p class="text-center">Buat Password baru untuk akun anda</p>
      <div class="input-container">
          <label class="mb-1" for="email">Password</label>
          <input class="mb-3" type="password" placeholder="Masukkan Password">

          <label class="mb-1" for="email">Konfirmasi Password</label>
          <input type="password" placeholder="Konfirmasi Password">
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="" class="btn btn-primary next-btn mt-4 mb-3">Reset Password</a>
          <a href="notif-lupa-password.html" class="text-center">Kembali</a>
      </div>
    </div>
    <!-- Modals -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">                  
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h3>Terima Kasih</h3>
              <p>Password anda telah diperbarui, Anda dapat mencoba masuk sekarang</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">Masuk</button>
            </div>
          </div>
        </div>
      </div>
    <!-- End Modals -->
</section>