@extends('../layout')


@if (Route::currentRouteName() == 'notification.success.webinar')
    @section('title', 'Notifikasi Webinar | AFEKSI')
@elseif (Route::currentRouteName() == 'notification.mentoring.success')
    @section('title', 'Notifikasi Pembayaran Mentoring | AFEKSI')
@else
    @section('title', 'Notifikasi Pembayaran Konseling | AFEKSI')
@endif

@section('styles')
    <link rel="stylesheet" href="/assets/css/popinformasi.css">
    <link rel="stylesheet" href="/assets/css/stepper.css">
@endsection


@section('content')
<!-- Step -->
@if (Route::currentRouteName() != 'notification.success.webinar')
    <div class="container" style="padding-top:calc(70px + 94px);">
    <div class="position-relative">
      <div class="stepper-wrapper">
        @if (Route::currentRouteName() != 'notification.mentoring.success' )
          <div class="stepper-item completed">
          <!-- add class COMPLETED to enable checklist -->
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name text-center">
            Pilih <br />
            Pengalaman Psikologi
          </div>
        </div>
        @endif
        <div class="stepper-item completed">
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name">Pilih Paket</div>
        </div>
        <div class="stepper-item completed">
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name">Pilih Psikolog</div>
        </div>
        <div class="stepper-item completed">
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name">Data Diri</div>
        </div>
        <div class="stepper-item completed">
          <!--add class active to enable active step progess-->
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name">Pembayaran</div>
        </div>
      </div>
    </div>
  </div>
@endif
<!-- End Step -->

<div class="pop-up @if(Route::currentRouteName() == 'notification.success.webinar') pt-5 @endif">
  <div class="row justify-content-center rounded-4 shadow-lg mt-5 mb-3 p-5">
    <div class="col-lg-6 col-md-6 col-sm p-2 d-flex flex-column justify-content-center align-items-center">
      <img src="/assets/img/page-informasi-new/Finish.png" alt="finish" class="img-fluid w-75" />

      <h5 class="mt-3 fw-bold">
          @if (Route::currentRouteName() == 'notification.success.webinar')
              Terima kasih telah mendaftar Webinar <br />
              Kami akan mengingatkan Anda H-1 dari jadwal yang sudah dipilih            
          @elseif (Route::currentRouteName() == 'notification.mentoring.success')
              Terima kasih telah mendaftar Mentoring <br />
              Kami akan mengingatkan Anda H-1 dari jadwal yang sudah dipilih            
          @else
              Terima kasih telah mendaftar Konsultasi <br />
              Kami akan mengingatkan Anda H-1 dari jadwal yang sudah dipilih            
          @endif
      </h5>

      <a href="{{ route('homepage') }}" class="mt-4 btn-kembali">
        Kembali Ke Halaman Utama ➡
      </a>
    </div>
  </div>
</div>

@include('sweetalert::alert')
@include('../partials/footer') 
@endsection

