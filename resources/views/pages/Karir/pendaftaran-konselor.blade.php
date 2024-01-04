@extends('../layout')

@section('title', 'Join Konselor | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/pendaftaran-konselor.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')

 <!-- HEADER -->
 <div class="mb-5 bg-transparent text-white" style="padding-top:70px;">
      <div class="hero d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
        <div class="left col-lg-7">
          <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('karir') }}">Karir</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('pendaftaran.konselor') }}">Konselor</a></li>
            </ol>
          </nav>
          <div class="text text-white mt-5">
            <h1 class="mb-4 fw-bold">Great Things Happen When Good People Work Together</h1>
            <p class="fs-6">Membangun fondasi hubungan yang sehat dan memperkuat kualitas kehidupan melalui konsultasi dan bimbingan dalam hubungan.</p>
          </div>
          <a href="#section-notes" type="button" class="btn btn-join mt-4 fw-medium">Gabung Jadi Konselor</a>
        </div>
        <div class="col-lg-4 m-3">
          <img class="hero-image img-fluid" src="assets/img/pendaftaran-konselor/image-1.svg" />
        </div>
      </div>
    </div>
    <img class="background left d-none d-lg-block" src="assets/img/pendaftaran-konselor/Frame-1.svg" alt="" />
    <img class="background right d-none d-lg-block" src="assets/img/pendaftaran-konselor/blur.svg" alt="" />
    <!-- End HEADER -->

    <!-- BENEFIT SECTION -->
    <div class="container mb-5">
      <div class="col d-grid justify-content-center text-center">
        <h4 class="fw-bold" style="color: #233dff">Benefit Menjadi Bagian Dari Konselor Afeksi</h4>
        <p class="text-muted mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>

      <div class="row g-5 mb-3">
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #5a74fd">
            <div class="card-body text-white">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/fleksibilitas.png" alt="Fleksibilitas Waktu" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Fleksibilitas Waktu</h5>
                <p class="card-text mt-3">Gak usah khawatir soal jam kerja yang kaku. Di sini, anda bisa atur jadwal sesuai keinginanmu..</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/agen.png" alt="Jadi Agen Perubahan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Jadi Agen Perubahan</h5>
                <p class="card-text mt-3">Anda dapat menjadi agen perubahan positif dalam kehidupan mereka dan menciptakan dampak positif dalam hidup orang lain.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/jangkauan-luas.png" alt="Jangkauan Luas" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Jangkuan Luas</h5>
                <p class="card-text mt-3">Beragam individu yang memiliki latar belakang dan kebutuhan akan berinteraksi dengan Anda.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/pengembangan-diri.png" alt="Pengembangan Diri & Karir" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Pengembangan Diri & Karir</h5>
                <p class="card-text mt-3">Dukungan penuh, panduan, pelatihan khusus, bimbingan personal, dan sumber daya relevan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/dukungan-jaringan.png" alt="Dukungan Jaringan Profesional" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Dukungan Jaringan Profesional</h5>
                <p class="card-text mt-3">Jadilah bagian dari tim yang multikultural, bersemangat, dan menyenangkan untuk saling berbagi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/pendaftaran-konselor/gaji.png" alt="Gaji Kompetitif" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Gaji Kompetitif</h5>
                <p class="card-text mt-3">Lebih fokus pada layanan konseling Anda. Potensi pendapatan terjamin melalui konseling yang berarti</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END BENEFIT SECTION -->

    <!-- TUGAS & TANGGUNG JAWAB SECTION -->
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-5">
          <h4 class="fw-semibold" style="color: #233dff">Tugas dan tanggung jawab yang akan dilakukan</h4>
        </div>
        <div class="col-lg-7">
          <p class="text-muted">Memberikan solusi yang holistik dan berkelanjutan untuk masalah-masalah dalam hubungan, sehingga individu dan pasangan dapat mencapai kehidupan cinta yang lebih sehat dan bahagia.</p>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-5">
          <img src="assets/img/pendaftaran-konselor/4-image.png" alt="Tugas Tanggung Jawab" class="img-fluid" />
        </div>
        <div class="col-md-7">
          <div class="d-flex flex-column">
            <div class="container mb-2">
              <div class="row border-0 p-2 rounded-3 shadow-sm justify-content-center align-items-center box">
                <div class="d-flex col-1 align-items-center justify-content-center rounded-2 text-white fs-2 box-1" style="background-color: #5a74fd">1</div>
                <div class="d-flex col-9 text-muted mx-4">Melakukan praktik psikologi secara online (waktu fleksibel)</div>
              </div>
            </div>
            <div class="container mb-2">
              <div class="row border-0 p-2 rounded-3 shadow-sm justify-content-center align-items-center box">
                <div class="d-flex col-1 align-items-center justify-content-center rounded-2 text-white fs-2 box-1" style="background-color: #5a74fd">2</div>
                <div class="d-flex col-9 text-muted mx-4">Melakukan asesmen serta pembuatan laporan</div>
              </div>
            </div>
            <div class="container mb-2">
              <div class="row border-0 p-2 rounded-3 shadow-sm justify-content-center align-items-center box">
                <div class="d-flex col-1 align-items-center justify-content-center rounded-2 text-white fs-2 box-1" style="background-color: #5a74fd">3</div>
                <div class="d-flex col-9 align-items-center text-muted mx-4">Bertanggungjawab dalam semua laporan psikologi dan hasil wawancara kepada klien</div>
              </div>
            </div>
            <div class="container mb-2">
              <div class="row border-0 p-2 rounded-3 shadow-sm justify-content-center align-items-center box">
                <div class="d-flex col-1 align-items-center justify-content-center rounded-2 text-white fs-2 box-1" style="background-color: #5a74fd">4</div>
                <div class="d-flex col-9 text-muted mx-4">Mampu membantu dan mengkoordinir dalam pengembangan alat tes psikologi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END TUGAS & TANGGUNG JAWAB SECTION -->

    <!-- SWIPPER CAROUSEL -->
    <img class="bg-carousel bg-up d-none d-lg-block" src="assets/img/pendaftaran-konselor/afeksi-vertical.png" alt="" />
    <img class="bg-carousel bg-bottom d-none d-lg-block img-fluid" src="assets/img/pendaftaran-konselor/afeksi-horizon.png" alt="" />

    <img class="bg-carousel bg-up-left d-none d-md-block" src="assets/img/pendaftaran-konselor/up-left.png" alt="" />
    <img class="bg-carousel bg-bottom-left d-none d-md-block img-fluid" src="assets/img/pendaftaran-konselor/bottom-left.png" alt="" />

    <div class="container-fluid mt-5">
      <div class="row" style="background-color: #5a74fd">
        <div class="content">
          <div class="slide-container swiper m-4">
            <h2 class="fw-bold text-white mt-5">Apa Kata Mereka Tentang Afeksi</h2>
            <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/pendaftaran-konselor/Ellipse.png" alt="" style="width: 50px" />
                  <h4 class="fw-bold">Nama Client</h4>
                  <p>Psikolog</p>
                  <span>Lorem ipsum dolor sit amet consectetur. Id tellus purus pellentesque lorem et elit faucibus sit duis.</span>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/pendaftaran-konselor/Ellipse.png" alt="" style="width: 50px" />
                  <h4 class="fw-bold">Nama Client</h4>
                  <p>Psikolog</p>
                  <span>Lorem ipsum dolor sit amet consectetur. Id tellus purus pellentesque lorem et elit faucibus sit duis.</span>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/pendaftaran-konselor/Ellipse.png" alt="" style="width: 50px" />
                  <h4 class="fw-bold">Nama Client</h4>
                  <p>Psikolog</p>
                  <span>Lorem ipsum dolor sit amet consectetur. Id tellus purus pellentesque lorem et elit faucibus sit duis.</span>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/pendaftaran-konselor/Ellipse.png" alt="" style="width: 50px" />
                  <h4 class="fw-bold">Nama Client</h4>
                  <p>Psikolog</p>
                  <span>Lorem ipsum dolor sit amet consectetur. Id tellus purus pellentesque lorem et elit faucibus sit duis.</span>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/pendaftaran-konselor/Ellipse.png" alt="" style="width: 50px" />
                  <h4 class="fw-bold">Nama Client</h4>
                  <p>Psikolog</p>
                  <span>Lorem ipsum dolor sit amet consectetur. Id tellus purus pellentesque lorem et elit faucibus sit duis.</span>
                </div>
              </div>
            </div>

            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->

            <div class="s-btn swiper-button-prev"></div>
            <div class="s-btn swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SWIPPER CAROUSEL -->

    <!-- BERGABUNG BERSAMA KAMI -->

    <div class="mb-5 mt-5" id="section-notes">
      <div class="container px-4">
        <div class="row text-center mb-sm-3">
          <div class="col-sm">
            <h2 class="fw-bold" style="color: #2139f9">Bergabunglah bersama kami</h2>
            <p>Ayo ambil bagian menjadi konselor di Afeksi dan menjadi bagian dari perubahan positif serta berdampak bersama AFEKSI</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card shadow col-join">
              <img src="assets/img/pendaftaran-konselor/Peer-konselor.png" class="card-img-top img-fluid" alt="Peer Konselor" style="background-size: cover" />
              <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #2139f9">Peer Konselor</h5>
                <p class="card-text" style="color: #717171">Mewadahi Niat Baik Semua Orang yang Ingin Terlibat Langsung di Lapangan sebagai Peer Konselor. Siapapun Bisa Bergabung!</p>
                <a href="{{ route('pendaftaran-peer-konselor') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow col-join">
              <img src="assets/img/pendaftaran-konselor/relationship-konselor.png" class="card-img-top img-fluid" alt="Realtionship Konselor" style="background-size: cover" />
              <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #2139f9">Relationship Konselor</h5>
                <p class="card-text" style="color: #717171">Mewadahi Niat Baik Semua Orang yang Ingin Terlibat Langsung di Lapangan sebagai Relationship konselor. Siapapun Bisa Bergabung!</p>
                <a href="{{ route('pendaftaran-relationship-konselor') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- END BERGABUNG BERSAMA KAMI -->

@include('../partials/footer') 

@section('script')
   <script src="assets/js/slider.js"></script>
  @endsection

@endsection
