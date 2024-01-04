@extends('../layout')

@section('title', 'Karir | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/karir.css">
@endsection


@section('content')

 <!-- HEADER -->

 <div class="mb-5 bg-transparent text-white" style="padding-top:70px;">
      <div class="container-fluid py-5">
        <div class="row  pt-5">
          <div class="col-md-6">
            <h1 class="display-6 fw-bold mb-4">Grow With AFEKSI</h1>
            <p class="fs-5">
              Hai, Kami Afeksi! Layanan edukasi dan konsultasi hubungan relasi pertama di Indonesia. Kami mencari talenta unggulan untuk berjalan
              bersama kami mewujudkan hubungan relasi yang lebih meaningful, sehat, dan saling memahami. Bergabunglah Bersama Kami untuk mewujudkan
              ide kami menjadi kenyataan dan jadi bagian dari Afeksi Super Team!
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="/assets/img/karir/header.png" alt="Header" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>

    <img class="background left d-none d-md-block" src="/assets/img/about-us/Frame-1.png" alt="" />
    <img class="background right d-none d-md-block" src="/assets/img/about-us/Frame-2.png" alt="" />
    <!-- End HEADER -->

    <!-- Bergabung bersama kami section -->
    <section class="py-2">
      <div class="mb-5">
        <div class="container px-4">
          <div class="row text-center mb-sm-3">
            <div class="col-sm">
              <h2 class="fw-bold mb-3" style="color: #2139f9">Bergabunglah Bersama Kami</h2>
              <p class="text-muted">Mari bergabung dengan AFEKSI dan bersama-sama menciptakan masa depan yang lebih baik</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-5 mb-3">
              <div class="card shadow">
                <img
                  src="/assets/img/karir/Frame 2608806 1 (3) 1 (1).png"
                  class="card-img-top img-fluid"
                  alt="psikolog"
                  style="background-size: cover" />
                <div class="card-body">
                  <h5 class="card-title fw-bold" style="color: #2139f9">Konselor</h5>
                  <p class="card-text" style="color: #717171">
                    Mulailah konsultasi masalahmu dengan psikolog terbaik kami. Dan Temukan Psikolog untuk menyelesaikan masalahmu !!!!
                  </p>
                  <a href="{{ route('pendaftaran.konselor') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 mb-3">
              <div class="card shadow">
                <img
                  src="/assets/img/karir/Frame 2608806 (1) 1 (1).png"
                  class="card-img-top img-fluid"
                  alt="psikolog"
                  style="background-size: cover" />
                <div class="card-body">
                  <h5 class="card-title fw-bold" style="color: #2139f9">Volunteer</h5>
                  <p class="card-text" style="color: #717171">
                    Mulailah konsultasi masalahmu dengan Konselor terbaik kami. Dan Temukan Konselor untuk menyelesaikan masalahmu !!!!
                  </p>
                  <a href="{{ route('join.volunteer') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Bergabung bersama kami section end -->

    <!-- Pertumbuhan karir section -->
    <div class="position-relative karir">
      <div class="container mb-5 pt-2 pb-4">
        <!-- karna ada margin bottom pada img jadi paddingnya ditambah -->
        <div class="text-center px-lg-5 px-4">
          <h2 class="fw-bold mb-3" style="color: #2139f9">Pertumbuhan karir dan pembelajaran</h2>
          <p class="text-muted">
            Afeksi berkomitmen menjadi ekosistem pembelajaran dan pertumbuhan bersama bagi karyawan di dalamnya untuk dapat saling bergandengan tangan
            menuju masa depan lebih baik secara personal maupun mendukung perusahaan
          </p>
        </div>
        <div class="img-container d-flex mt-5 gap-2 justify-content-lg-between justify-content-around px-lg-0 px-2 flex-wrap">
          <img class="img" src="assets/img/karir/kegiatan.png" alt="" />
          <img class="img" src="assets/img/karir/kegiatan (1).png" alt="" />
          <img class="img" src="assets/img/karir/kegiatan (2).png" alt="" />
          <img class="img" src="assets/img/karir/foto webinar 2 1 (1).png" alt="" />
        </div>
      </div>
      <img class="background-vector" src="assets/img/karir/Vector.svg" alt="" />
    </div>
    <!-- Pertumbuhan karir section -->

    <!-- slider -->
    <div class="contents px-lg-5 px-4 mb-5">
      <div class="slide-container px-lg-2 swiper">
        <h2 class="fw-bold" style="color: #2139f9">Apa Kata Mereka Tentang Afeksi</h2>
        <p>Afeksi telah dipercaya para pengguna dari berbagai kalangan.</p>
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="swiper-slide">
              <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Mahasiswa</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Mahasiswa</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Mahasiswa</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Mahasiswa</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Mahasiswa</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->

        <div class="s-btn swiper-button-prev"></div>
        <div class="s-btn swiper-button-next"></div>
      </div>
    </div>
    <!-- slider end -->

    <!-- Our team section -->
    <div class="our-team text-center text-white mb-5" style="background-image: url('assets/img/karir/intern.png')">
      <h2 class="fw-bold mb-3">Be a part of our team</h2>
      <p>Raih kesempatan untuk mengembangkan diri dan berdampak bersama AFEKSI</p>
      <div class="box rounded-4 pt-4 pb-3 px-5 border">
        <form action="/karir">
          <div class="row align-items-center">
              <div class="inputs col-md-3 mb-3">
                  <input type="text" class="form-control" placeholder="Search" name="nama_posisi" id="nama_posisi">
                  <img src="assets/img/karir/search.png" alt="" class="input-icon">
              </div>
              <div class="col-md-3 mb-3 inputs">
                  <input type="text" class="form-control" placeholder="Location" name="tempat" id="tempat" value="Surabaya" readonly>
                  <img src="assets/img/karir/location_on.png" alt="" class="input-icon">
                </div>
              <div class="col-md-3 mb-3 inputs">
                  <select class="form-select" name="tipe_kerja" id="tipe_kerja">
                      <option value="" selected>Type</option>
                      <option value="Internship">Internship</option>
                      <option value="Full Time">Full time</option>
                      <!-- Add more options as needed -->
                  </select>
                  <img src="assets/img/karir/work.png" alt="" class="input-icon">
              </div>
              <div class="col-md-3 mb-3 d-flex gap-2 flex-wrap">
                  <button type="submit" class="btn btn-fill flex-fill">Temukan</button>
                  <button type="submit" class="btn btn-outline flex-fill">Semua Posisi</button>
              </div>
          </div>
        </form>
    </div>
    </div>


    <div class="team-regis px-lg-5 px-4 pb-5" style="margin-top: 100px">
        @foreach ($result as $item)
            <div class="regis-card flex-wrap rounded-3 py-3 px-3 px-lg-4 d-flex justify-content-between align-items-center">
              <div class="text">
                <h2 class="fw-bold">{{ $item->nama_posisi }}</h2>
                <div class="d-flex gap-3">
                  <img style="height: 24px" src="assets/img/karir/location_on.png" alt="" />
                  <p style="color: #233dff" class="fw-bold">Remote <span class="text-secondary">- {{ $item->tempat }}</span></p>
                  <img style="height: 24px" src="assets/img/karir/work.png" alt="" />
                  <p><span class="text-secondary">Internship</span></p>
                </div>
              </div>
              <div class="">
                <a href="/internship/{{ $item->slug }}" class="text-decoration-none"><div class="btn btn-fill">Daftar Sekarang</div></a>
              </div>
            </div>
        @endforeach
        @if ($result->isEmpty())
         <div class="regis-card flex-wrap rounded-3 py-3 px-3 px-lg-3 d-flex justify-content-center align-items-center">
            <p class="text-center mt-3">No results found</p>
         </div>
        @endif
    </div>
    <!-- Our team section -->

@include('../partials/footer') 

@section('script')
   <script src="assets/js/slider.js"></script>
  @endsection

@endsection
