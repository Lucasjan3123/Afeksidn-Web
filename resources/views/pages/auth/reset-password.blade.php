@extends('../layout')

@section('title', 'Reset Password | AFEKSI')


@section('styles')
    <link rel="stylesheet" href="/assets/css/lupa-password.css">
    <link rel="stylesheet" href="assets/css/reset-password.css">
@endsection

@section('content')
<section id="lupa-password"  style="background-image: url('{{ asset('/assets/img/lupapassword.png') }}');">
    <nav class="navbar w-100">
        <a class="navbar-brand ms-5 mt-3" href="/">
            <img src="/assets/img/logoafeksi.svg" alt="Logo" class="d-block" style="width: 100px">
        </a>
    </nav>


    @if(session()->has('status'))
        <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center mt-5">
                <h3 class="mt-4 mb-3 fw-bolder">Terima Kasih</h3>
                <p class="text-center"> {{  session('status')  }}</p>
                <div class="row input-container">  
                    <a type="button" href="{{ route('login') }}" class="btn btn-primary mt-4 mb-3">Masuk</a>
                </div>
            </div>
    @else
    <div class="wrapper p-4 m-auto d-flex flex-column justify-content-center text-center mt-5">
        <h3 class="mb-3 fw-bolder">Reset Password</h3>
        <p class="text-center">Buat Password baru untuk akun anda.</p>
        <div class="form-input input-container">
        <form method="POST" action="{{  route('password.store') }}" >
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger text-start fst-italic" style="font-size:14px;"  />
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }} " required>
            <input name="email" type="hidden" id="email" value="{{ old('email', $request->email) }}" placeholder="Email"  required />
            <label class="mb-1" for="email">Password Baru</label>
            <input placeholder="Masukkan Password"  name="password" type="password"  />

            <label class="mb-1 mt-3" for="email">Konfirmasi Password Baru</label>
            <input placeholder="Masukkan Konfirmasi Password"  name="password_confirmation" type="password" />
            <button  data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit" class="btn btn-primary next-btn mt-4 mb-3">Reset Password</button>
            <a href="{{ route('login') }}" class="text-center">Kembali</a>
        </form>
        </div>
    </div>
    @endif

    {{-- <!-- Modals -->
    <div class="modal fade @if(session()->has('status')) show @endif " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <!-- End Modals -->  --}}
    
</section> 
@endsection
