@extends('../layout')

@section('title', 'Mentoring | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/mentoring.css">
@endsection

@section('content')
<!-- HEADER -->
<div class="mb-5 bg-transparent text-white overflow-hidden">
    <div class="container-fluid py-5" style="height: 31.9rem">
      <div class="row mt-5 pt-5">
        <div class="col-md">
          <h1 class="mb-3 fw-bold mb-md-5">Apa Itu Mentoring</h1>
          <p class="w-75">Mentoring adalah sebuah kegiatan  pendampingan untuk beberapa orang baik itu dari perusahaan ataupun tempat lain seperti universitas. Dimana mereka yang akan didampingi biasanya memiliki keterbatasan wawasan atau bisa dikatakan kurang mahir dalam melakukan sesuatu.</p>
        </div>
        <div class="col-md">
          <img src="assets/img/mentoring/hero.png" alt="Header" class="img-fluid" />
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
              <span>Mengapa Seseorang</span> Membutuhkan Mentoring?
          </h2>
          <p class="text-body-tertiary fw-bold">Seseorang membutuhkan mentoring karena bimbingan dan dukungan yang diberikan oleh seorang mentor dapat <br> membantu mereka mengembangkan potensi penuh, meningkatkan keterampilan, dan mencapai tujuan mereka <br> dengan lebih efektif.</p>
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
          <span>Macam - Macam Mentoring</span>
        </h2>
        <p class="text-body-tertiary fw-bold text-center mt-2 mb-5">Macam-macam mentoring mencakup parenting mentoring, Pre Marriage mentoring, dan Relatinship <br> mentoring.</p>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-3 border p-3 rounded shadow-sm me-4" style="cursor:pointer;" >
            <img src="assets/img/mentoring/mdi_mother-nurse.png" width="15%" alt="Logo" class="img-fluid mb-3">
            <h5 class="fw-bold">Parenting Mentoring</h5>
            <p class=" fs-6">Kelas intensif dengan topik parenting khusus bagi ibu.</p>
          </div>

          <div class="col-md-3 border p-3 rounded shadow-sm me-4" style="cursor:pointer;"  >
            <img src="assets/img/mentoring/love.png" width="15%" alt="Logo" class="img-fluid mb-3">
            <h5 class="fw-bold">Pre Marriage Mentoring</h5>
            <p class=" fs-6">Kelas intensif dengan topik persiapan menuju pernikahan bagi pasangan.</p>
          </div>

          <div class="col-md-3 border p-3 rounded shadow-sm" style="cursor:pointer;"  >
            <img src="assets/img/mentoring/material-symbols_mindfulness-rounded.png" width="15%" alt="Logo" class="img-fluid mb-3">
            <h5 class="fw-bold">Relationship Mentoring</h5>
            <p class=" fs-6">Kelas intensif dengan topik kesehatan hubungan dengan berbagai sub-topik.</p>
          </div>
      </div>

    <div class="mt-5 pt-5">
        <div class="row">
          <div class="col-sm">
            <h2 class="fw-bold" style="color: #2139f9">4 Langkah Mudah</h2>
            <h2 class="fw-bold">Melakukan konsultasi</h2>
            <p style="color: #717171; font-size: 20px">
              Temukan kemudahan dan kenyamanan dalam mendapatkan solusi <br />
              terbaik untuk setiap aspek kehidupan Anda melalui konsultasi <br />
              kami! Ikuti langkah-langkah sederhana.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 mb-3"><img src="../assets/img/landingpage/Group 2406.png" alt="group" class="img-fluid" width="250" /></div>
          <div class="col-sm-6 text-center"><img src="../assets/img/landingpage/OBJECTS.png" alt="object" class="img-fluid" width="400" /></div>
        </div>

        <div class="mt-5 mb-5">
          <div class="container-md py-5 px-4 rounded" style="background-color: #5a74fd; z-index:-3;">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-6 text-center">
                <img src="../assets/img/landingpage/tanyaadmin/tanyadmin.png" alt="tanyadmin" class="img-fluid" width="400" />
              </div>
              <div class="col-md-5 position-relative" style="z-index:0;">
                <img src="../assets/img/landingpage/tanyaadmin/Ellipse 1215.svg" alt="" style="position: absolute; top:40px; right:120px; z-index:-1;">
                <img src="../assets/img/landingpage/tanyaadmin/Ellipse 1215.svg" alt="" style="width:30px; position: absolute; top:140px; right:300px; z-index:-1;">
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
</div>
<!-- End CONTENT -->


@include('../partials/footer') 
@endsection

