@extends('../layout')

@section('title', 'Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/konseling.css">
@endsection



@section('content')
<!-- HEADER -->
<div class="mb-5 bg-transparent text-white overflow-hidden">
    <div class="container-fluid py-5" style="height: 31.9rem">
      <div class="row mt-5 pt-5">
        <div class="col-md">
          <h1 class="mb-3 fw-bold mb-md-5">Apa Itu Konseling</h1>
          <p class="w-75">Mentoring adalah sebuah kegiatan  pendampingan untuk beberapa orang baik itu dari perusahaan ataupun tempat lain seperti universitas. Dimana mereka yang akan didampingi biasanya memiliki keterbatasan wawasan atau bisa dikatakan kurang mahir dalam melakukan sesuatu.</p>
        </div>
        <div class="col-md">
          <img src="assets/img/konseling/hero.png" alt="Header" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>

  <img class="background left d-none d-md-block" src="assets/img/about-us/Frame-1.png" alt="" />
  <img class="background right d-none d-md-block" src="assets/img/about-us/Frame-2.png" alt="" />
  <!-- End HEADER -->

 <!-- CONTENT -->
<div class="container-md overflow-hidden">
  <div class="row align-items-center">
      <div class="col-md-12 text-center mt-5">
          <h2 class="fw-bold">
              <span>Mengapa Seseorang</span> Membutuhkan Konseling?
          </h2>
          <p class="text-body-tertiary fw-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
      <div class="col-md-12 mt-4">
          <div class="row g-5">
              <div class="col-md-12 col-lg-6 text-center">
                  <img src="assets/img/mentoring/content.png" width="90%" class="img-fluid">
              </div>
              
              <div class="col-md-12 col-lg-4 justify-content-center d-flex flex-column ms-0 ms-md-5">
                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/img/mentoring/point.png" alt="" class="me-3 ">
                        <div class="d-flex flex-column">
                          <h6 class=" fw-bold ">Memberikan Inspirasi</h6>
                          <p class="text-body-tertiary fw-bold">Mampu memberikan anda inspirasi dan membuat anda tetap fokus.</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/img/mentoring/point.png" alt="" class="me-3 ">
                        <div class="d-flex flex-column">
                          <h6 class=" fw-bold ">Jalur Karir yang Tepat</h6>
                          <p class="text-body-tertiary fw-bold">Dapat membantu anda menciptakan jalur karir yang sesuai dengan bakat dan minat individual.</p>
                        </div>
                      </div>
                </div>

                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center">
                        <img src="assets/img/mentoring/point.png" alt="" class="me-3 ">
                        <div class="d-flex flex-column">
                          <h6 class="fw-bold ">Cara Untuk Bertumbuh</h6>
                          <p class="text-body-tertiary fw-bold">Dapat membantu anda menemukan cara untuk tumbuh secara profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="mt-5">
        <h2 class="fw-bold text-center mt-5">
          <span>Macam - Macam Konseling</span>
        </h2>
        <p class="text-body-tertiary fw-bold text-center mt-2 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <br> industry's standard dummy text ever since the 1500s,</p>
      </div>
      <div class="row mb-3 d-flex flex-row justify-content-center align-items-center">
        <div class="col-md-4 border me-3 p-3 rounded shadow-sm" id="professional-konseling" style="cursor:pointer;">
          <img src="assets/img/mentoring/mdi_mother-nurse.png" width="10%" alt="Logo" class="img-fluid mb-3">
          <h5 class="fw-bold">Profesional Konseling</h5>
          <p class=" fs-6">Konsultasi yang dilakukan dengan professional di bidangnya masing - masing</p>
        </div>

      <div class="col-md-4 border p-3 rounded shadow-sm" id="peers-konseling" style="cursor:pointer;">
        <img src="assets/img/mentoring/love.png" width="10%" alt="Logo" class="img-fluid mb-3">
        <h5 class="fw-bold">Peers Konseling</h5>
        <p class=" fs-6">Konsultasi non klinis dengan peers yang sudah bersertifikasi</p>
      </div>    
     </div>

     <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 order-md-2 text-center ">
            <img src="assets/img/konseling/content.png" class="img-fluid w-50 " alt="Image">
          </div>
          <div class="col-md-6 order-md-1">
            <h2 class="fw-bold">Yuk booking konsultasi kamu dengan <span>Mudah</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur. Varius etiam leo mauris vel congue interdum tortor ullamcorper tincidunt. Proin vitae scelerisque lacus urna lacinia morbi est.</p>
            <div class="checklist me-3">
                <img src="/assets/img/konseling/vector.png" class="me-3"> Pilih Paket <br>
                <img src="/assets/img/konseling/vector.png" class="me-3"> Pilih Psikolog <br>
                <img src="/assets/img/konseling/vector.png" class="me-3"> Isi Identitas & Pilih Jadwal <br>
                <img src="/assets/img/konseling/vector.png" class="me-3"> Pembayaran
            </div>
                
              
          </div>
        </div>
      </div>

      <div class="contents mt-5">
        <div class="slide-container swiper">
          <h2 class="fw-bold" style="color: #2139f9">Apa Kata Mereka Tentang Afeksi</h2>
          <p>Afeksi telah dipercaya para pengguna dari berbagai kalangan.</p>
          <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
              <div class="swiper-slide">
                <img src="/assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
                <h4 class="pt-2">Nama Client</h4>
                <p>Mahasiswa</p>
                <span
                  >Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span
                >
              </div>
              <div class="swiper-slide">
                <img src="/assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
                <h4 class="pt-2">Nama Client</h4>
                <p>Mahasiswa</p>
                <span
                  >Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span
                >
              </div>
              <div class="swiper-slide">
                <img src="/assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
                <h4 class="pt-2">Nama Client</h4>
                <p>Mahasiswa</p>
                <span
                  >Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span
                >
              </div>
              <div class="swiper-slide">
                <img src="/assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
                <h4 class="pt-2">Nama Client</h4>
                <p>Mahasiswa</p>
                <span
                  >Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span
                >
              </div>
              <div class="swiper-slide">
                <img src="../assets/img/landingpage/Ellipse.svg" alt="" style="width: 50px" />
                <h4 class="pt-2">Nama Client</h4>
                <p>Mahasiswa</p>
                <span
                  >Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span
                >
              </div>
            </div>
          </div>

          <div class="swiper-pagination"></div>
          <!-- If we need navigation buttons -->

          <div class="s-btn swiper-button-prev"></div>
          <div class="s-btn swiper-button-next"></div>
        </div>
      </div>

      <div class="mt-5 mb-5">
        <div class="container-md py-5 px-4 rounded" style="background-color: #5a74fd; z-index:-3;">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
              <img src="../assets/img/landingpage/tanyaadmin/tanyadmin.png" alt="tanyadmin" class="img-fluid" width="400" />
            </div>
            <div class="col-md-5 position-relative" style="z-index:0;">
              <img src="/assets/img/landingpage/tanyaadmin/Ellipse 1215.svg" alt="" style="position: absolute; top:40px; right:120px; z-index:-1;">
              <img src="/assets/img/landingpage/tanyaadmin/Ellipse 1215.svg" alt="" style="width:30px; position: absolute; top:140px; right:300px; z-index:-1;">
              <h2
                class="fw-bold mb-3 text-white">
                Ingin Berkonsultasi Terlebih Dahulu?
              </h2>
              <p class="mb-5 pb-3" style="color: #ffffff">
                Masih bingung dengan layanan yang cocok dengan kamu, yuk konsultasikan bersama admin melalui Whatsapp di tombol ini.
              </p>
              <a href="https://wa.me/6282142625552" target="blank" class="btn-tanya mt-5"
                >Tanya Admin Yuk
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp pb-1" viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" /></svg></a>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
<!-- End CONTENT -->
@section('script')
   <script src="assets/js/slider.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
      $(document).ready(function(){
          $('#professional-konseling').click(function () {
              window.location.href = '{{ route("layanan.professional.konseling") }}'
          });
      });
   </script>
@endsection

@include('../partials/footer') 
@endsection

