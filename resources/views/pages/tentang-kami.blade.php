@extends('../layout')

@section('title', 'Tentang Kami | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="assets/css/tentang-kami.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')
<!-- HEADER -->

<div class="mb-5 bg-transparent text-white hero-wrapper" style="padding-top:70px;">
      <div class="container-fluid py-5 hero" style="height: 31.9rem">
        <div class="row mt-5">
          <div class="col-md-6">
            <h6 class="mb-3">TENTANG KAMI</h6>
            <h1 class="display-6 fw-bold mb-4">Aktivis Pertama Kesehatan Hubungan di Indonesia</h1>
            <p class="fs-5">Afeksi merupakan Platform layanan edukasi dan konsultasi yang fokus di 3 bidang yakni kesehatan hubungan berbasis psikologi relasi, kesetaraan gender, dan hukum pertama di Indonesia.</p>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="assets/img/about-us/header.png" alt="Header" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>

    <img class="background left d-none d-md-block" src="assets/img/about-us/Frame-1.png" alt="" />
    <img class="background right d-none d-md-block" src="assets/img/about-us/Frame-2.png" alt="" />
    <!-- End HEADER -->

    <!-- CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-3">
          <div class="col-md-12">
            <img src="assets/img/about-us/Frame-3.png" class="mx-auto d-block mb-5 img-fluid" style="width: 23.5em" alt="" />
          </div>
        </div>
        <div class="col-md-6 mt-5">
          <div class="col-md-12">
            <small class="d-inline-flex mb-3 px-4 py-2 fw-semibold text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-2">VALUE</small>
            <h5 class="fs-4 fw-bold mb-3">
              Bagaimana kami mendukung pengembangan
              <strong style="color: #233dff">
                <span>relasi</span>
              </strong>
              melalui
              <strong style="color: #ffd34e"> <span>edukasi dan konsultasi </span> </strong>?
            </h5>
            <div class="col-md-12">
              <p class="text-justify">AFEKSI sebagai penyedia layanan edukasi dan konsultasi hubungan relasi pertama di Indonesia berkomitmen memberikan transformasi positif melalui program-program seperti :</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-auto">
              <ul class="custom-list">
                <li>Komunikasi Efektif</li>
                <li>Manajemen Konflik</li>
              </ul>
            </div>
            <div class="col-sm-auto">
              <ul class="custom-list">
                <li>Keterampilan Interpersonal</li>
                <li>Resolusi Masalah</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT -->

    <!-- VISI MISI -->
    <img class="background-visimisi right-misi d-none d-md-block" src="assets/img/about-us/Vector.png" alt="" />
    <div class="mb-5 p-1" style="background-color: #ced6ff">
      <div class="p-3 mt-md-3" style="color: #233dff">
        <h5 class="text-center fw-bold fs-4">Visi & Misi</h5>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 mb-4">
            <div class="card p-3 rounded-1">
              <div class="card-body" style="height: 17.5em">
                <div class="mt-0">
                  <h3 class="fw-bold text-center" style="color: #233dff">Visi</h3>
                  <p class="card-text p-4">Building an emotionally strong generation through healthy and sustainable relationships</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-3 rounded-1" style="z-index: 1">
              <div class="card-body" style="height: 17.5em">
                <div class="mt-2">
                  <h3 class="fw-bold text-center" style="color: #233dff">Misi</h3>
                  <p class="card-text">
                    Membantu individu dan pasangan mengatasi hambatan, membangun fondasi yang kuat, dan mencapai hubungan yang harmonis, intim, dan memuaskan.Membantu individu dan pasangan mengatasi hambatan, membangun fondasi yang kuat,
                    dan mencapai hubungan yang harmonis, intim, dan memuaskan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- END VISI MISI -->

    <!-- PENGURUS -->
    <img class="background-pengurus left-pengurus d-none d-md-block" src="assets/img/about-us/Frame-4.png" alt="" />
    <div class="mb-5 p-1">
      <div class="p-3 mt-md-3 text-center">
        <h5 class="fw-bold fs-4" style="color: #233dff">Mereka yang memulai</h5>
        <p style="color: #717171">Kami percaya bahwa perubahan dimulai dengan diri sendiri, lalu dari tim kamu, lalu dunia.</p>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/endin-transformed.png" alt="..." />
              <div class="overlay">
                <h5>A Endin Yoga Pradana</h5>
                <p>Founder & Chief Executive Officer</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/wafa-transformed.png" alt="..." />
              <div class="overlay">
                <h5>Sabilil Wafa W.</h5>
                <p>Co-Founder & Chief of Business Development</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/verens-transformed.png" alt="..." />
              <div class="overlay">
                <h5>Varens Elvira</h5>
                <p>Chief Marketing Officer</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/octi-transformed.png" alt="..." />
              <div class="overlay">
                <h5>Octiana Syeira P</h5>
                <p>Chief Product Officer</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/santi-transformed.png" alt="..." />
              <div class="overlay">
                <h5>Elisabeth Desanti</h5>
                <p>Chief Technology Officer</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-3 image-container">
              <img src="assets/img/about-us/bimo-transformed.png" alt="..." />
              <div class="overlay">
                <h5>Bimo Setyo</h5>
                <p>Chief Design Officer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PENGURUS -->

    <!-- #BEBAS KHAWATIR -->
    <div class="mb-5 p-1">
      <div class="p-3 mt-md-3 text-center">
        <h5 class="fw-bold fs-4" style="color: #233dff">Saatnya Hidup <span>#BebasKhawatir</span> bersama AFEKSI</h5>
        <p style="color: #717171">Kami bertekad untuk mendukung langkah maju kamu demi menatap masa depan yang berkualitas</p>
      </div>

      <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-3">
          <div class="col">
            <div class="card" id="card" style="background-color: #00b88c">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold">100+</h5>
                <p>Topik Webinar</p>
              </div>
              <img src="assets/img/about-us/img-1.png" class="card-img-bottom" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card" id="card" style="background-color: #262260">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold">100+</h5>
                <p>Psikolog</p>
              </div>
              <img src="assets/img/about-us/img-2.png" class="card-img-bottom" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card" id="card" style="background-color: #af1484">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold">100+</h5>
                <p>Pengikut di Media Social</p>
              </div>
              <img src="assets/img/about-us/img-3.png" class="card-img-bottom" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card" id="card" style="background-color: #0050a8">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold">100+</h5>
                <p>Campaign</p>
              </div>
              <img src="assets/img/about-us/img-4.png" class="card-img-bottom" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card" id="card" style="background-color: #b51d1d">
              <div class="card-body text-white">
                <h5 class="card-title fw-bold">100+</h5>
                <p>Podcast</p>
              </div>
              <img src="assets/img/about-us/img-5.png" class="card-img-bottom" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- END #BEBAS KHAWATIR -->

    <!-- KERJA SAMA -->
    <div class="mb-5 p-1">
      <div class="p-3 mt-md-3 text-center">
        <h5 class="fw-bold fs-4" style="color: #233dff">Ingin bekerja sama dengan kami bisnis / organisasi ?</h5>
        <p style="color: #717171">Ajukan penawaran kerjasama anda sekarang juga dan dapatkan manfaatnya.</p>
      </div>
      <div class="d-grid justify-content-center mb-5 mt-4">
        <div class="align-content-center text-center">
          <a href="https://wa.me/6282142625552" target="_blank" type="button" class="btn btn-primary button-wa fw-medium" style="background-color: #233dff; width: 13rem">
            <i class="fa-brands fa-whatsapp mx-2"></i>
            <span> WhatsApp Kami</span>
          </a>
        </div>
      </div>
    </div>

    <!-- END KERJA SAMA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>


@include('../partials/footer') 

@endsection
