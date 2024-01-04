
<style>
  * {
    text-decoration: none !important;
  }

  footer {
    background-color: #5a74fd;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }

  .contact-img {
    max-width: 20px;
    height: 19px;
  }

  .link-title {
    font-size: 18px;
  }

  .bottom {
    background-color: #4959db;
    padding: 15px 10px;
    text-align: center;
    font-weight: bold;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    color: white;
  }

  .content-footer {
    margin-bottom: 55px;
  }
</style>

<footer class="p-5" style="background-image: url('{{ asset('assets/img/footer/background.svg') }}');">
  <div class="container content-footer">
    <div class="row d-flex gap-5 align-content-center">

      <div class="col-lg-5 bg-white rounded-4 p-4">
        <div class="d-flex text-muted mb-2">
          <div class="me-2">
            <img src="{{ asset('assets/img/footer/logo.png') }}" alt="Logo" width="70px" class="img" />
          </div>
          <div style="font-size: 15px">
            <p>Afeksi adalah layanan edukasi dan konsultasi kesehatan hubungan berbasis psikologi relasi pertama di Indonesia.</p>
          </div>
        </div>
        <p class="mb-2 fw-bold" style="color: #2139f9">Layanan Contact Center AFEKSI</p>
        <div class="d-flex flex-column">
          <div class="mb-2">
            <img src="{{ asset('assets/img/footer/phone.png') }}" class="me-3 contact-img" alt="" />+6282142625552
          </div>
          <div class="mb-2">
            <img src="{{ asset('assets/img/footer/email.png') }}" class="me-3 contact-img" alt="" />afeksidn@gmail.com
          </div>
          <div>
            <img src="{{ asset('assets/img/footer/location.png') }}" class="me-3 contact-img" alt="" />Jl. Gubeng Jaya IX no.1 Surabaya, Indonesia
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="d-flex flex-wrap">
          <div class="text-white mb-4 me-3 flex-fill">
            <h5 class="link-title mb-4 fw-bold">Layanan</h5>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="{{ route('konseling') }}" class="text-white">Konseling</a></li>
              <li class="mb-3"><a href="{{ route('mentoring') }}" class="text-white">Mentoring</a></li>
            </ul>
          </div>

          <div class="text-white mb-4 me-3 flex-fill">
            <h5 class="link-title mb-4 fw-bold">Tentang kami</h5>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="{{ route('tentang-kami') }}" class="text-white">Tentang kami</a></li>
              <li class="mb-3"><a href="{{ route('karir') }}" class="text-white">Karir</a></li>
              <li class="mb-3"><a href="{{ route('campaign') }}" class="text-white">Campaign</a></li>
              <li class="mb-3"><a href="{{ route('webinar') }}" class="text-white">Webinar</a></li>
              <li class="mb-3"><a href="#" class="text-white">Rekap Histori</a></li>
            </ul>
          </div>

          <div class="text-white mb-4 me-3 flex-fill">
            <h5 class="link-title mb-4 fw-bold">Yang lainnya</h5>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="{{ route('kebijakan-privasi') }}" class="text-white">Kebijakan Privasi</a></li>
              <li><a href="{{ route('FAQ') }}" class="text-white">FAQ</a></li>
            </ul>
          </div>

          <div class="text-white mb-4 flex-fill">
            <h5 class="link-title mb-4 fw-bold">Ikuti Kami</h5>
            <ul class="list-unstyled d-flex flex-wrap">
                <a href="https://www.instagram.com/afeksidn/" target="_blank"><img src="{{ asset('assets/img/footer/Vector (1).png') }}" alt="" class="contact-img me-2 mb-3" /></a>
              <a href="https://twitter.com/afeksidn"><img src="{{ asset('assets/img/footer/Vector (2).png') }}" alt="" class="contact-img me-2 mb-3" /></a>
              <a href=""><img src="{{ asset('assets/img/footer/Vector (3).png') }}" alt="" class="contact-img me-2 mb-3" /></a>
              <a href="https://www.tiktok.com/@afeksidn" target="_blank"><img src="{{ asset('assets/img/footer/Vector (4).png') }}" alt="" class="contact-img me-2 mb-3" /></a>
              <a href="https://www.linkedin.com/company/afeksi/mycompany/"  target="_blank"><img src="{{ asset('assets/img/footer/Vector (5).png') }}" alt="" class="contact-img me-2 mb-3" /></a>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="fw-bold bottom">© 2023 AFEKSI IDN | Edukasi & Konsultasi Relasi #1</div>
</footer>
