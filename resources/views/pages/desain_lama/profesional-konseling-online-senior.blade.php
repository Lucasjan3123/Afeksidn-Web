@extends('../layout')
@section('title', 'landing_page')
@section('styles')
    <link rel="stylesheet" href="assets/css/profesional-konseling-online-senior.css">
@endsection
   
<!-- NAVBAR
============================================================================ -->
{{-- @include('../partials/navbar')  --}}


@section('content')
    <section id="online-konseling" class="py-5">
        <div class="container step-progress-container">
          <div class="step-progress">
              <div class="step-item">
                <span class="step-number active">1</span>
                <span class="step-label">Pilih Pengalaman Psikolog</span>
              </div>
              <div class="step-item">
                <span class="step-number">2</span>
                <span class="step-label">Pilih Paket</span>
              </div>
              <div class="step-item">
                <span class="step-number">3</span>
                <span class="step-label">Pilih Psikolog</span>
              </div>
              <div class="step-item">
                <span class="step-number">4</span>
                <span class="step-label">Data Diri</span>
              </div>
              <div class="step-item">
                <span class="step-number">5</span>
                <span class="step-label">Pembayaran</span>
              </div>
          </div>
        </div>
        <div class="container mt-5">
          <div class="psikolog-wrapper">
            <div class="paket-wrapper">
              <button class="paket-button">Pilih Paket</button>
            </div>
            <div class="paket-wrapper">
              <button class="paket-button">Pilih Paket</button>
            </div>
            <div class="paket-wrapper">
              <button class="paket-button">Pilih Paket</button>
            </div>
            <div class="paket-wrapper">
              <button class="paket-button">Pilih Paket</button>
            </div>
            <div class="paket-wrapper">
              <button class="paket-button">Pilih Paket</button>
            </div>
        </div>
        </div>
    </section>

    @include('../partials.footer') 
@endsection