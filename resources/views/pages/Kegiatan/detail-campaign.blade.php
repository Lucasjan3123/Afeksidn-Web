@extends('../layout')

@section('title') 
  {{ $data->title_event }} | AFEKSI 
@endsection
<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/detail-kegiatan.css') }}">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')

<div class="hero campaign mt-5" style="background-image: url(../assets/img/kegiatan/Banner.svg)" style="padding-top:94px;">
      <div class="d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
        <div class="left col-lg-8">
          <div class="d-flex dflex gap-2 text-white ">
            <p>Kegiatan</p>
            <p><img src="{{ asset('assets/img/kegiatan/Vector (6).png') }}" class="img-fluid" alt="" /></p>
            <p><a href="{{ route("campaign") }}" class="text-light">Campaign</a></p>
            <p><img src="{{ asset('assets/img/kegiatan/Vector (6).png') }}" class="img-fluid" alt="" /></p>
            <p><a href="/kegiatan-campaign/{{ $data->slug_event  }}" class="text-light">{{ $data->title_event }}</a></p>
          </div>
          <div class="text text-white mt-5">
            <h1 class="mb-4">{{ $data->title_event }}</h1>
            <p>Bersama-sama, mari kita belajar, berbagi, dan tumbuh dalam kualitas hubungan kita, agar hidup kita dipenuhi dengan cinta, kebahagiaan, dan kedamaian batin.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card-daftar-campaign col-lg-3">
      <div class="card border-0 rounded-4 shadow">
        {{-- <img src="{{ Storage::url($data->cover_event) }}" class="card-img-top" alt="Hero " /> --}}
        <img src="{{ asset('/assets/img/kegiatan/'.$data->cover_event) }}" class="card-img-top" alt="Hero " />
        <div class="card-body">
          <h4 class="card-title fw-bold mb-4" style="color: #2139f9">
          @if ($data->pay_category_event != "FREE")
              Rp{{ number_format($data->price_event, 0, ',', '.') }}
          @else
            Gratis
          @endif</h4>
          <form>
          <div class="d-grid gap-2">
              <button type="button" id="daftar-sekarang" class="btn text-white btn-daftar" data-bs-toggle="modal" data-bs-target="#form-pendaftaran-webinar" data-bs-whatever="@getbootstrap" style="background-color: #2139f9">Daftar Sekarang</button>
          </div>
          </form>
          <h6 class="fw-bold mt-3">Keuntungan yang kamu dapetin:</h6>
          <ul class="custom-list list-unstyled m-1 text-muted">
            <li class="mb-1 gap-3"><img src="{{ asset('assets/img/kegiatan-detail-webinar/certificate.svg') }}" alt="E-Certificate" /> E-Certificate</li>
            <li class="mb-1"><img src="{{ asset('assets/img/kegiatan-detail-webinar/knowledge.svg') }}" alt="Knowledge" /> Knowledge</li>
            <li class="mb-1"><img src="{{ asset('assets/img/kegiatan-detail-webinar/diskusi.svg') }}" alt="Diskusi" /> Diskusi</li>
          </ul>
          <h6 class="fw-bold mt-3">Bahasa Pengantar</h6>
          <p class="text-muted">Bahasa Indonesia</p>
        </div>
      </div>
    </div>

    <!-- Tab Bar -->
    <div class="container">
      <div class="d-flex flex-row mb-3">
        <div class="p-2"><a href="#deskripsi">Deskripsi</a></div>
        <div class="p-2"><a href="#detail-kegiatan" class="text-muted">Detail Kegiatan</a></div>
        <div class="p-2"><a href="#cara-ikut-campaign" class="text-muted">Cara Mengikuti Campaign</a></div>
      </div>
    </div>
    <!-- End Tab Bar -->
    <hr class="mt-4" />

    <!-- DESKRIPSI -->
    <div class="container">
      <div class="row" id="deskripsi">
        <div class="col-lg-8">
          <h5 class="fw-bold mt-3">Deskripsi</h5>
          <p style="text-align: justify">
            {!! $data->description_event !!}
          </p>
        </div>
      </div>

      <!-- DETAIL KEGIATAN -->
      <div class="row mt-4" id="detail-kegiatan">
        <div class="col-lg-8">
          <h5 class="fw-bold mb-3">Detail Kegiatan</h5>
          <p>Campaign ini akan dilaksanakan pada :</p>
          <ul class="custom-list list-unstyled m-1 text-muted">
            <li class="mb-2 gap-3"><img src="{{ asset('assets/img/kegiatan-detail-webinar/kalender.svg') }}" width="21" height="23" alt="Tanggal Kegiatan" /> {{ \Carbon\Carbon::parse($data->date_event)->format('l, d M Y') }}</li>
            <li class="mb-2"><img src="{{ asset('assets/img/kegiatan-detail-webinar/location.svg') }}" width="21" height="23" alt="Lokasi Kegiatan" /> 
            @if ( $data->time_category_event != "ONLINE")
              Offline Di {{ $data->is_place }}
            @else
              Online Via {{ $data->is_place }} </li>
            @endif 
            <li class="mb-2"><img src="{{ asset('assets/img/kegiatan-detail-webinar/time.svg') }}" width="21" height="23" alt="Waktu Kegiatan" /> {{ $data->time_start }} - {{ $data->time_finish }} WIB</li>
          </ul>
        </div>
      </div>
      <!-- CARA MENGIKUTI WEBINAR -->
      <div class="row mt-4 mb-5" id="cara-ikut-campaign">
        <div class="col-lg-8">
          <h5 class="fw-bold mb-3">Cara Mengikuti Campaign</h5>
          <ol class="list-daftar-webinar">
            <li class="mb-1">Telah memfollow instagram, twitter,dan tiktok @afeksidn.</li>
            <li class="mb-1">Merepost postingan open recruitment di instagram story dan 2 tag 3 teman.</li>
            <li class="mb-1">Melaksanakan publikasi selama 4 hari sesuai jadwal yang telah ditentukan.</li>
            <li class="mb-1">Postingan merupakan akun utama dan tidak di private.</li>
          </ol>
        </div>
      </div>
    </div>


    <!-- Modals -->
    @auth
    <div class="modal fade modal-lg" id="form-pendaftaran-webinar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
            <div class="modal-header text-center border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="modal-title fw-semibold text-center px-5">Formulir Pendaftaran Webinar</h3>
                <p class="text-center px-4">Silahkan isi data anda dan pastikan data anda sudah sesuai.</p>
                <form action="{{ route('daftar-campaign', ['slug' => $data->slug_event]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama-lengkap" class="col-form-label fw-bold">Nama Lengkap</label>
                        <input type="text" value="{{ auth()->user()->nama }}" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label fw-bold">Email</label>
                        <input type="email" value="{{ auth()->user()->email }}" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="institusi" class="col-form-label fw-bold">Institusi</label>
                        @if (auth()->user()->institusi)
                            <input type="text" value="{{ auth()->user()->institusi }}" readonly class="form-control" id="institusi"name="institusi">
                        @else
                            <input type="text" placeholder="Nama Institusi" class="form-control" id="institusi" name="institusi" required/>
                        @endif
                        @error('institusi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="domisili" class="col-form-label fw-bold">Domisili</label>
                        @if (auth()->user()->domisili)
                            <input type="text" value="{{ auth()->user()->domisili }}" readonly class="form-control" id="domisili"name="domisili">
                        @else
                            <input type="text" placeholder="Nama Tempat" class="form-control" id="domisili" name="domisili" required/>
                        @endif
                        @error('domisili')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="col-form-label fw-bold">No HP</label>
                        @if (auth()->user()->no_whatsapp)
                            <input type="text" value="{{ auth()->user()->no_whatsapp }}" readonly class="form-control" id="hp" name="no_whatsapp">
                        @else
                            <input type="text" placeholder="08xxxxxxxxx" class="form-control" id="hp" name="no_whatsapp" required>
                        @endif
                        @error('no_whatsapp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="info" class="col-form-label fw-bold">Mendapatkan informasi webinar dari mana</label>
                            <select name="info" class="form-select" id="info" required>
                                <option disabled selected>Informasi</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Website">Website</option>
                                <option value="Linkedin">Linkedin</option>
                            </select>
                            @error('info')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 upload-file-wrapper">
                        <label for="follow-ig" class="col-form-label fw-bold">Bukti Follow ig Afeksi</label>
                        <label class="upload-file" for="follow-ig" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload Bukti</label>
                        <input type="file" name="bukti_follow" id="upload-file" class="d-block" onchange="displayFileName(this)" />
                        @error('bukti_follow')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 upload-file-wrapper">
                        <label for="follow-linkedin" class="col-form-label fw-bold">Bukti follow linkedin Afeksi</label>
                        <label class="upload-file" for="follow-linkedin" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload Bukti</label>
                        <input type="file" name="bukti_linkedin" id="upload-file" class="d-block"  onchange="displayFileName(this)"/>
                        @error('bukti_linkedin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 upload-file-wrapper">
                        <label for="poster-webinar" class="col-form-label fw-bold">Bukti share poster webinar</label>
                        <label class="upload-file" for="poster-webinar" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload Bukti</label>
                        <input type="file" name="bukti_share" id="upload-file" class="d-block" onchange="displayFileName(this)" />
                        @error('bukti_share')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-daftar-webinar m-3">Daftar</button>
            </form>
        </div>
        </div>
    </div>
    @else
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#daftar-sekarang').click(function() {
                window.location.href = '{{ route("login") }}';
            });
        });
    </script>
    @endauth
@include('sweetalert::alert')
@section('script')
    <script src="/assets/js/form-file-pendaftaran.js"></script>
@endsection
@include('../partials/footer') 

@endsection
