@extends('../layout')

@section('title', 'lupa-password')

@section('styles')
    <link rel="stylesheet" href="assets/css/lupa-password-notif.css">
@endsection


@section('content')
<section id="lupa-password" style="background-image: url('{{ asset('assets/img/lupapassword.png') }}');">
    <nav class="navbar w-100">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logoafeksi.svg" alt="Logo" class="d-block " height="100" width="100">
        </a>
    </nav>
    <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center align-items-center">
      <h3 class="mb-3">Terima Kasih</h3>
      <p class="text-center">Kami mengirimkan link untuk membuat password baru ke
        <span class="user-email">afeksi@gmail.com </span></p>
      <div class="input-container">             
          <a href="reset-password.html" class="btn btn-primary next-btn mt-4 mb-3">Selanjutnya</a>
          <a href="lupa-password.html" class="text-center back-btn">Kembali</a>
      </div>
    </div>
</section>
