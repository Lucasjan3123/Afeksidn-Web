@extends('../layout')

@section('title', 'Join Volunteer | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/volunteer.css">
@endsection


@section('content')

<!-- HEADER -->
<div class="mb-5 text-white position-relative" style="padding-top:70px;">
  <div class="hero">
    <div class="container d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
      <div class="left col-lg-7">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('karir') }}">Karir</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('join.volunteer') }}">Volunteer</a></li>
          </ol>
        </nav>
        <div class="text text-white mt-5">
          <h1 class="mb-4 fw-bold">Positive collaboration yields wonderful outcomes.</h1>
          <p class="fs-6">
            Dengan membantu orang lain melalui pengetahuan dan panduan, Anda turut berperan dalam menciptakan hubungan yang lebih sehat dan
            bahagia.
          </p>
        </div>
        <a type="button" class="btn btn-join mt-4 fw-medium" href="#bergabung">Gabung Jadi Volunteer</a>
      </div>
      <div class="col-lg-4 m-3">
        <img class="hero-image w-100" src="assets/img/volunteer/Banner.png" />
      </div>
    </div>
  </div>
</div>
<!-- End HEADER -->

<!-- BENEFIT SECTION -->
<div class="container mb-5">
  <div class="col justify-content-center text-center">
    <h4 class="fw-bold" style="color: #233dff">Benefit Menjadi Bagian Dari Volunteer Afeksi</h4>
    <p class="text-muted mb-5">Bergabunglah dengan kami dan mari bersama menciptakan dunia hubungan yang lebih bermakna dan bahagia!</p>
  </div>

    <div class="row mb-3">
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #5a74fd">
          <div class="card-body text-white">
            <div class="d-flex flex-column justify-content-start align-items-start white">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/fleksibilitas.png" alt="Fleksibilitas Waktu" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Pengalaman yang Berharga</h5>
              <p class="card-text mt-3">Menjadi Brand Ambassador Afeksi adalah pengalaman yang berharga yang akan memperkaya perjalanan kuliah Anda. Anda akan mendapatkan kesempatan untuk mengembangkan keterampilan komunikasi, kepemimpinan, dan pemasaran yang sangat berharga.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-start align-items-start white">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/agen.png" alt="Jadi Agen Perubahan" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Kontribusi Positif</h5>
              <p class="card-text mt-3">
                Anda akan menjadi bagian dari upaya untuk meningkatkan kualitas hidup mahasiswa dengan mempromosikan hubungan yang sehat dan kesejahteraan mental. Ini adalah kesempatan untuk berkontribusi positif pada komunitas kampus Anda.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-start align-items-start">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/jangkauan-luas.png" alt="Jangkauan Luas" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Jaringan yang Luas</h5>
              <p class="card-text mt-3">Sebagai Brand Ambassador Afeksi, Anda akan memiliki kesempatan untuk berinteraksi dengan berbagai individu, termasuk anggota tim Afeksi dan mahasiswa lainnya. Ini akan membantu Anda membangun jaringan yang berharga.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-start align-items-start">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/pengembangan-diri.png" alt="Pengembangan Diri & Karir" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Keterampilan yang Berkembang</h5>
              <p class="card-text mt-3">Anda akan mengembangkan keterampilan komunikasi, keterampilan manajemen waktu, dan kemampuan kepemimpinan. Semua ini adalah keterampilan yang akan berguna dalam karier Anda nantinya.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-start align-items-start">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/dukungan-jaringan.png" alt="Dukungan Jaringan Profesional" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Menginspirasi Perubahan</h5>
              <p class="card-text mt-3">Menjadi sumber inspirasi bagi sesama mahasiswa untuk menjalani hubungan yang lebih sehat dan mengatasi masalah kesehatan mental. Anda akan melihat dampak positif dari upaya Anda.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-2">
        <div class="card rounded-4 p-3 border-0 shadow card-benefits" style="background-color: #fafafa">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-start align-items-start">
              <div class="justify-content-lg-start mb-4 mt-2">
                <img src="/assets/img/pendaftaran-konselor/gaji.png" alt="Gaji Kompetitif" class="card-img" />
              </div>
              <h5 class="card-title fw-semibold">Akses ke Sumber Daya</h5>
              <p class="card-text mt-3">Sebagai Brand Ambassador Afeksi, Anda akan memiliki akses ke sumber daya dan informasi eksklusif yang dapat membantu Anda dalam perjalanan akademik dan pribadi Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- END BENEFIT SECTION -->

<!-- Pertumbuhan karir section -->
<div class="position-relative karir">
  <div class="container mb-5 pt-2 pb-4">
    <!-- karna ada margin bottom pada img jadi paddingnya ditambah -->
    <div class="text-center px-lg-5 px-4">
      <h2 class="fw-bold mb-3" style="color: #2139f9">Bertumbuh Dalam Keberagaman, Berkarya Dengan Semangat Kebersamaan</h2>
      <p class="text-muted">
        Kami percaya bahwa edukasi adalah kunci untuk hubungan yang sehat dan bahagia. Bergabunglah dengan kami dalam misi mulia ini untuk
        memberikan panduan berharga kepada masyarakat. Jadilah bagian dari perubahan positif diri sendiri dan orang lain
      </p>
    </div>
    <div class="img-container d-flex mt-5 gap-2 justify-content-lg-between justify-content-around px-lg-0 px-2 flex-wrap">
      <img class="img" src="assets/img/volunteer/kegiatan.png" alt="" />
      <img class="img" src="assets/img/volunteer/kegiatan (1).png" alt="" />
      <img class="img" src="assets/img/volunteer/kegiatan4.png" alt="" />
      <img class="img" src="assets/img/volunteer/kegiatan (3).png" alt="" />
    </div>
  </div>
  <img class="background-vecassets/img/volunteer/ic_sharp-person.png" alt="" />
  <img class="background-vectortwo" src="assets/img/volunteer/backgroundRight.png" alt="" />
</div>
<!-- Pertumbuhan karir section -->

<!-- slider -->
<div class="contents px-lg-5 px-4 mb-5">
  <div class="slide-container px-lg-2 swiper">
    <h2 class="fw-bold text-white">Apa Kata Mereka Tentang Afeksi</h2>
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/about-us/bimo-transformed.png" class="rounded-circle border shadow-sm"  alt="" style="width: 50px; height:50px; object-fit:cover" />
          <h4>Bimo Setyo</h4>
          <p>IT Intern</p>
          <span class="text-justify">Banyak insight yang saya dapat selama intern sebagai Staff IT di Afeksi dengan belajar berkordinasi dengan beberapa diisi dan belajar membangun startup dari nol.</span>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/about-us/octi-transformed.png" class="rounded-circle border shadow-sm"  alt="" style="width: 50px; height:50px; object-fit:cover" />
          <h4>Octavia Syeira</h4>
          <p>Innovator Program Intern</p>
          <span class="text-justify">Magang di Afeksi telah membuka berbagai kesempatan bagi saya untuk terjun langsung dalam mengeksekusi suatu program/event.</span>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/about-us/santi-transformed.png" class="rounded-circle border shadow-sm"  alt="" style="width: 50px; height:50px; object-fit:cover" />
          <h4>Elisabeth Desanti</h4>
          <p>IT Intern</p>
          <span class="text-justify">Internship di Afeksi seruu bgt. Kita sering banget brainstroming bareng & dapat ilmu baru. Sebelumnya belum pernah pakai figma, sekarang jadi paham dan seneng bisa nambah portofolio. Thank u Afeksi</span>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/about-us/bimo-transformed.png" class="rounded-circle border shadow-sm"  alt="" style="width: 50px; height:50px; object-fit:cover" />
          <h4>Bimo Setyo</h4>
          <p>IT Intern</p>
          <span class="text-justify">Banyak insight yang saya dapat selama intern sebagai Staff IT di Afeksi dengan belajar berkordinasi dengan beberapa diisi dan belajar membangun startup dari nol.</span>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/about-us/octi-transformed.png" class="rounded-circle border shadow-sm"  alt="" style="width: 50px; height:50px; object-fit:cover" />
          <h4>Octavia Syeira</h4>
          <p>Innovator Program Intern</p>
          <span class="text-justify">Magang di Afeksi telah membuka berbagai kesempatan bagi saya untuk terjun langsung dalam mengeksekusi suatu program/event.</span>
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

<!-- BERGABUNG BERSAMA KAMI -->

<div id="bergabung" class="bergabung position-relative py-5 overflow-hidden">
  <img class="background" src="assets/img/volunteer/backgroundbergabung.png" alt="" />
  <div class="container py-4 px-4" id="join-volunteer">
    <div class="row text-center mb-sm-3">
      <div class="col-sm">
        <h2 class="fw-bold" style="color: #2139f9">Bergabunglah bersama kami</h2>
        <p>Ayo ambil bagian menjadi konselor di Afeksi dan menjadi bagian dari perubahan positif serta berdampak bersama AFEKSI</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card shadow col-join">
          <img
            src="assets/img/volunteer/relationshiphero.png"
            class="card-img-top img-fluid"
            alt="Peer Konselor"
            style="background-size: cover" />
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #2139f9">Relationship Heroes</h5>
            <p class="card-text" style="color: #717171">
              Mewadahi Niat Baik Semua Orang yang Ingin Terlibat Langsung di Lapangan sebagai Peer Konselor. Siapapun Bisa Bergabung!
            </p>
            <a href="{{ route('volunteer.relationship-heroes') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500"
              >Selengkapnya</a
            >
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow col-join">
          <img
            src="assets/img/volunteer/brand ambassador.png"
            class="card-img-top img-fluid"
            alt="Realtionship Konselor"
            style="background-size: cover" />
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #2139f9">Brand Ambassador</h5>
            <p class="card-text" style="color: #717171">
              Mewadahi Niat Baik Semua Orang yang Ingin Terlibat Langsung di Lapangan sebagai Relationship konselor. Siapapun Bisa Bergabung!
            </p>
            <a href="{{ route('volunteer.brand-ambassador') }}" class="btn btn-selengkapnya w-100" style="background-color: #233dff; color: #ffffff; font-size: 14px; font-weight: 500"
              >Selengkapnya</a
            >
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
