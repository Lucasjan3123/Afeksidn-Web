<style>
  * {
    margin: 0;
    padding: 0;
    font-family: "Rubik", sans-serif !important;
    text-decoration: none !important;
  }
  
  /* NAVBAR */
  .navbar {
  box-shadow: 0px 13px 40px 0px rgba(176, 176, 176, 0.3);
  position: relative;
  width: 100%;
  padding:0;
  z-index: 999 !important;
  background-color: white;
  position: fixed !important;
  z-index: 1;
}
.navbar .container-fluid {
  max-width: 1375px;
  margin: auto;
}
.navbar li a {
  color: #94a8be;
  margin-bottom: 0px;
}

.bi {
  color:#233DFF !important;
  font-size: 19px;
}

div .button-daftar {
  border-color: #233dff;
  color: #233dff;
  transition: transform 0.3s ease, border-color 0.3s ease;
}

div .button-login {
  background-color: #233dff;
  color: #fff;
  border: 2px solid transparent;
  width: 93px;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.button-daftar:hover {
  transform: scale(1.1);
}

.button-login:hover {
  transform: scale(1.1);
  background: #233dff;
}

.button-daftar:focus {
  outline: none;
}

.button-login:focus {
  outline: #233dff;
}


@media (max-width:850px) {
  .navbar li a, div .button-login, div .button-daftar{
    font-size: 14px;
  }
}

  /* End Navbar */
</style>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="z-index: 10000000">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="/assets/img/logo-copy.png" alt="Logo" class="d-inline-block align-text-top ms-5 p-1" style="width:60px;"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="navbarOffcanvasLabel">
          <div class="offcanvas-header">
            <img src="/assets/img/logo-copy.png" alt="Logo" class="d-inline-block align-text-top" style="width:60px;"/>
            <h5 class="offcanvas-title fw-semibold text-uppercase" id="navbarOffcanvasLabel">Afeksi</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto my-lg-2 gap-1 mt-2">
              <li class="nav-item">
                <a class="nav-link" href="/" @if ( Route::CurrentRouteName() == "homepage")
                  style="color: #233dff"
                @endif>Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"  
                @if ( Route::CurrentRouteName() == "mentoring" ||  Route::CurrentRouteName() == "konseling" )
                  style="color: #233dff"
                @endif
                  href="#">Layanan & Produk</a>
                <ul class="dropdown-menu">
                  <li class="mb-1"><a class="dropdown-item" href="{{ route('konseling') }}" ><img class="me-3" src="/assets/img/icon/icon-konseling.png" width="20px" style="object-fit:contain">Konseling</a></li>
                  <li class="mb-1"><a class="dropdown-item" href="{{ route('mentoring') }}"> <img class="me-3" src="/assets/img/icon/icon-mentoring.png" width="20px" style="object-fit:contain">Mentoring</a></li>
                  <li class="mb-1"><a class="dropdown-item" href="#"><img class="me-3" src="/assets/img/icon/icon-ebook.png" width="20px" style="object-fit:contain">E-Book</a></li>
                  <li class="mb-1"><a class="dropdown-item" href="#"><img class="me-3" src="/assets/img/icon/icon-ecourse.png" width="20px" style="object-fit:contain">E-Course</a></li>
                  {{-- <li><a class="dropdown-item" href="{{ route('konseling') }}"><img src="/assets/img/konseling.svg" alt=""> Konseling</a></li>
                  <li><a class="dropdown-item" href="{{ route('mentoring') }}"><img src="/assets/img/mentoring.svg" alt=""> Mentoring</a></li>
                  <li><a class="dropdown-item" href="#"><img src="/assets/img/Ebook.svg" alt=""> E-Book</a></li>
                  <li><a class="dropdown-item" href="#"><img src="/assets/img/Ecourse.svg" alt=""> E-Course</a></li> --}}
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#"
                @if ( Route::CurrentRouteName() == "campaign" ||  Route::CurrentRouteName() == "campaign.detail" )
                  style="color: #233dff"
                @elseif ( Route::CurrentRouteName() == "webinar" ||  Route::CurrentRouteName() == "webinar.detail" )
                  style="color: #233dff"
                @endif
                >Kegiatan</a>
                <ul class="dropdown-menu">
                  <li class="mb-1"><a class="dropdown-item" href="{{ route('webinar') }}"><img class="me-3" src="/assets/img/icon/icon-webinar.png" width="20px" style="object-fit:contain"> Webinar</a></li>
                  <li class="mb-1"><a class="dropdown-item" href="{{ route('campaign') }}"><img class="me-3" src="/assets/img/icon/icon-campaign.png" width="20px" style="object-fit:contain">Campaign</a></li>
                  <li class="mb-1"><a class="dropdown-item" href="#"><img class="me-3" src="/assets/img/icon/icon-recap.png" width="20px" style="object-fit:contain"> Rekap History</a></li>  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('artikel') }}" @if ( Route::CurrentRouteName() == "artikel" || Route::CurrentRouteName() == "artikel.detail")
                  style="color: #233dff"
                @endif>Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tentang-kami') }}" @if ( Route::CurrentRouteName() == "tentang-kami")
                  style="color: #233dff"
                @endif>Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('FAQ') }}"  @if ( Route::CurrentRouteName() == "FAQ" )
                  style="color: #233dff"
                @endif>FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('karir') }}" 
                @if ( Route::CurrentRouteName() == "karir" || Route::currentRouteName() == 'pendaftaran.konselor' || 
                      Route::currentRouteName() == 'internship.detail' ||  Route::currentRouteName() == 'pendaftaran-peer-konselor' ||
                      Route::currentRouteName() == 'pendaftaran-relationship-konselor'
                      )
                  style="color: #233dff"
                @endif>Karir</a>
              </li>
            </ul>

            <div class="ms-auto d-flex p-2 mx-lg-3 gap-2">
              @auth
                  <div class="dropdown-center">
                    <button class="btn btn-primary text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ auth()->user()->nama }}
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Riwayat Transaksi</a></li>
                      <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                  </div>
              <div class="me-3"></div>
              @else
                  <a type="button" href="{{ route('register') }}" class="btn button-daftar rounded-3 me-2">Daftar</a>
                  <a type="button" href="{{ route('login') }}" class="btn button-login rounded-3">Masuk</a>
              @endauth
            </div>
          </div>
        </div>
      </div>
    </nav>

