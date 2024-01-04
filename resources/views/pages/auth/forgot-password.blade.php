@extends('../layout')

@section('title', 'Forgot Password | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/lupa-password.css">
    <link rel="stylesheet" href="assets/css/lupa-password-notif.css">
@endsection

@section('content')
<section id="lupa-password"  style="background-image: url('{{ asset('/assets/img/lupapassword.png') }}');">
    <nav class="navbar w-100">
        <a class="navbar-brand ms-5  mt-3" href="/">
            <img src="/assets/img/logoafeksi.svg" alt="Logo" class="d-block" style="width: 100px">
        </a>
    </nav>
    @if (session()->has('success'))  
        {{-- <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center mt-5">
            <h3 class="mt-4 mb-3 fw-bolder">Terima Kasih</h3>
            <p class="text-center">Kami mengirimkan link untuk membuat password baru ke
                <span class="fw-bold">{{  session('success')  }}</span>.</p>
            <div class="row input-container">  
                <a  class="btn btn-primary mt-4 mb-3"></a>
                <a href="" class="text-center">Kembali</a>
            </div>
        </div> --}}

        <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center align-items-center">
            <h3 class="mb-3">Terima Kasih</h3>
            <p class="text-center">Kami mengirimkan link untuk membuat password baru ke
                <span class="user-email fw-bold">{{  session('success')  }}</span></p>
            <div class="input-container">             
                <a type="button" href="https://mail.google.com/" class="btn btn-primary next-btn mt-4 mb-3">Perikas Email Kamu</a>
                <a href="{{ route('login') }}" class="text-center back-btn">Kembali</a>
            </div>
        </div>

    @else
        <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center  text-center">
        <h3 class="mb-3 fw-bolder">Lupa Password</h3>
        <p class="text-center">Masukkan alamat email yang kamu daftarkan dan kami akan mengirimkan link untuk membuat password baru.</p>
        <div class="form-input input-container">
          <form action="{{ route('password.email') }}" method="POST" >
            
            @if (session()->has('error'))
                 <span class="text-danger" style="font-style:italic; font-size:14px;"><i class="bi bi-exclamation-circle"></i> {{ session('error') }}</span>
            @endif
            @csrf
            <label class="mb-1" for="email">Email</label>
            <input type="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required />
            <button type="submit" class="btn btn-primary mt-4 mb-3">Reset Password</button>
            <a href="{{ route('login') }}" class="text-center">Kembali</a>
          </form>
        </div>
    </div>
    @endif
    

</section> 
@endsection

