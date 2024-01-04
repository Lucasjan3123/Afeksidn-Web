
@extends('layout')

@auth
    @section('title', 'Beranda | AFEKSI')
@else
    @section('title', 'Welcome Afeksi | AFEKSI')
@endauth

@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/style-landing-page.css') }}">
  
@endsection
  @section('content')
    {{-- <!-- HERO
    ==================================================================== --> --}}
    <section id="hero">
      <div class="bg-hero">
        <div class="banner-headline">
            <div class="mb-5">
            <h1 class="display-6 fw-bold text-light">
              Bersama dan berdampingan <br />
              menciptakan hubungan <br />
              yang sehat di seluruh dunia
            </h1>
            <p class="fs-3 text-light">
              Bercerita dan Berbagi rasa. Tenangkan <br />
              hati dan tenangkan diri
            </p>
            <button class="btn btn-warning btn-lg custom-button w-50" type="button">
              Mulai Konsultasi
            </button>
          </div>
        </div>
        <div class="banner float-start">
          <img src="assets/img/landing-page/sect-1-bg-2.png" alt="float-end">
        </div>
      </div>
    </section>


    {{-- <!-- ACTIVITY
    ================================================================ --> --}}
    <section id="kegiatan">
      <div class="container p-5 mb-5">
      <div class="container-fluid mb-5 pb-2">
          <h1 class="text-dark text-center mx-auto mb-5 mt-5 w-50">Ikuti kegiatan yang sedang <br> berlangsung</h1>
          <div class="row">
            <div class="col ">
              <div class="sect-2-box float-end text-center rounded-4">
                <div class="card rounded-4">
                  <div class="card-body">
                    <img src="assets/img/landing-page/sect-2-img-1.png" alt=""/>
                  </div>
                </div>
                <p class="mt-5">
                <a href="#" class="btn btn-lg btn-warning w-75 align-self-center">Challange</a>
                </p>
              </div>
            </div>
            <div class="col ">
              <div class="sect-2-box float-start text-center rounded-4">
                <div class="card rounded-4">
                <div class="card-body">
                  <img src="assets/img/landing-page/sect-2-img-2.png" alt=""/>
                </div>
              </div>
              <p class="mt-5">
                <a href="#" class="btn btn-lg btn-warning w-75">Challange</a>
              </p>
            </div>
            </div>
          </div>
      </div>
      </div>
    </section>


    {{-- <!-- CONSULTATION
    ========================================================== --> --}}
    <section id="konsultasi">
      <div class="container-fluid konsultasi pt-5 pb-5">
        <div class="container text-center">
          <h1>4 langkah Mudah <br> Melakukan Konsultasi</h1>
        </div>

        <div class="container">
          <div class="row pt-5 mx-auto justify-content-center">
              <div class="col-md-3 text-center">
                  <h1>1</h1>
                  <img src="assets/img/landing-page/sect-3-img-1.png" alt="" srcset="" class="w-100 h-50">
                  <h5 class="mt-4 mb-5">Pilih Paket</h5>
                  <p>Pilih paket yang Anda <br> inginkan </p>
              </div>
              <div class="col-md-3  text-center">
                  <h1>2</h1>
                  <img src="assets/img/landing-page/sect-3-img-2.png" alt="" srcset="" class="w-100 h-50">
                  <h5 class="mt-4 mb-5">Pilih Psikolog</h5>
                  <p>Pilih psikolog sesuai <br>dengan masalah yang <br> Anda hadapi </p>
              </div>
              <div class="col-md-3  text-center">
                  <h1>3</h1>
                  <img src="assets/img/landing-page/sect-3-img-3.png" alt="" srcset="" class="w-100 h-50">
                  <h5 class="mt-4 mb-5">Isi Identitas & <br> Mengatur Jadwal</h6>
                  <p>Isilah Identitas dan <br> atur jadwal konsultasi</p>
              </div>
              <div class="col-md-3  text-center">
                  <h1>4</h1>
                  <img src="assets/img/landing-page/sect-3-img-4.png" alt="" srcset="" class="w-100 h-50">
                  <h5 class="mt-4 mb-5">Pembayaran</h5>
                  <p>Lakukan Pembayaran <br> untuk bisa mengikuti <br> konseling </p>
              </div>
          </div>
      </div>
    </section>
    
{{-- 
    <!-- PROFILE Psikolog
    ======================================================= --> --}}
    <section id="profil">
      <h1 class="text-center pb-5 mb-5 mt-5">Profile Psikolog</h1>
      <div class="wrapper ">
          <ul class="items">
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
            <li class="item"><img src="assets/img/landing-page/sect-4.png" alt=""></li>
          </ul>
        </div>
    </section>
    

    {{-- <!-- SERVICE
    ============================================================ --> --}}
    <section id="layanan">
      <div class="p-5 mb-5" style=" background-color: #5260DB; margin-top: 10%;"> 
        <div class="rounded-3">
            <h1 class="text-center text-light mb-5 display-5 fw-bold">Pilih layanan konsultasi yang membuatmu
            <br>nyaman dan tenang</h1>
          <div class="row">
          <div class="col">
          <div class="card float-end rounded-4" style="height: 400px; width: 300px;">
            <div class="card-body text-center">
                <img src="assets/img/landing-page/sect-5-img-1.png" class="mt-5" alt="" width="250px" height="200px"/>
                <p class="mt-5">
                  <a href="#" class="btn btn-lg btn-warning rounded-5 w-75">Mentoring</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card float-start rounded-4">
              <div class="card-body text-center" style="height: 400px; width: 300px;">
                <img src="assets/img/landing-page/sect-5-img-2.png" class="mt-5" alt="" width="250px" height="200px"/>
                <p class="mt-5">
                  <a href="#" class="btn btn-lg btn-warning rounded-5 w-75">Konseling</a>
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
       
    </section>

    
    {{-- <!-- TESTIMONIES
    ============================================================= --> --}}
    <section id="testimoni">
      <div class="wrapper pt-5">
        <h1 class="mb-3 text-center fw-bold">Testimoni mereka yang telah <br>menggunakan afeksi</h1>
        <ul class="items">
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, beatae! Incidunt dolorem sequi deserunt qui minima blanditiis deleniti nesciunt impedit.
            </p>
          </li>
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nam autem incidunt voluptate quo consequatur?
            </p>
          </li>
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore deserunt non quas, iste, provident incidunt adipisci expedita doloribus distinctio maxime consequatur magni ab quaerat fugiat?
            </p>
          </li>
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam tempore, aspernatur quae deleniti totam commodi id animi odio sit!
            </p>
          </li>
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet obcaecati voluptates adipisci aperiam odit eum?
            </p>
          </li>
          <li class="item2 item-shadow p-3">
            <img src="assets/img/landing-page/sect-6-img.png" class="camera">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae animi commodi corporis facilis quibusdam sequi aspernatur dolorem perspiciatis, sunt molestias labore molestiae amet assumenda enim?
            </p>
          </li>
        </ul>
      </div>
    </section>


    {{-- <!-- PARTNERSHIP
    ================================================== --> --}}
    <section id="client">
      <div class="card m-auto mb-5 mt-5 text-center">
        <div class="card-body" style="background: rgb(225,227,248) ;">
            <h1 class="card-title fw-bold mb-5">Telah Bekerja Sama Dengan :</h1>
              <div class="row pt-5">
                  <div class="col-md-3 m-auto">
                      <img src="assets/img/landing-page/sect-7-img-1.png" alt="Gambar 1" class="img-fluid w-75">
                  </div>
                  <div class="col-md-3 m-auto">
                      <img src="assets/img/landing-page/sect-7-img-2.png" alt="Gambar 2" class="img-fluid w-75">
                  </div>
                  <div class="col-md-3 m-auto">
                      <img src="assets/img/landing-page/sect-7-img-3.png" alt="Gambar 3" class="img-fluid w-75">
                  </div>
                  <div class="col-md-3 m-auto">
                      <img src="assets/img/landing-page/sect-7-img-4.png" alt="Gambar 4" class="img-fluid w-75">
                  </div>
              </div>
        </div>
    </div>
    </section>



@include('../partials.footer') 

@section('script')
   <script src="{{ asset('/assets/js/landing-page.js') }}"></script>
@endsection
@endsection

 
