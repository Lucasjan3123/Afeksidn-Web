@extends('../layout')

@section('title', 'Pendaftaran Relationship Konselor | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/detail-pendaftaran-relationship.css">
@endsection


{{-- @include('../partials/navbar')  --}}

@section('content')
<section class="wrapper">
    <div class="banner-wrapper">
    </div>
        <div class="container content">
            <div class="bread-crumbs d-flex gap-2 fw-semibold">
                <p><a href="{{ route('karir') }}" class="text-dark">Karir</a></p>
                <span>&gt;</span>
                <p><a href="{{ route('pendaftaran.konselor') }}" class="text-dark">Konselor</a></p>
                <span>&gt;</span>
                <p><a href="{{ route('pendaftaran-relationship-konselor') }}" class="text-dark">Relationship Konselor</a></p>
            </div>
            <h1 class="mt-3 fw-bold">Relationship Konselor</h1>
            <div class="info-utils d-flex gap-2 mt-4">
              <i class="bi bi-geo-alt-fill me-3"></i>
              <p class="work-type  fw-semibold">Remote - </p>
              <p>Surabaya, Indonesia</p>
              <i class="bi bi-briefcase-fill me-2"></i>
              <p>Fulltime</p>
          </div>
          <p class="afeksi-description">Afeksi merupakan layanan edukasi dan konsultasi hubungan relasi pertama di Indonesia. Kami memiliki ide kecil agar semua orang paham serta dapat merasakan hubungan hubungan relasi yang lebih meaningful, sehat, dan saling memahami. Kami mencari mitra professional yang akan menjadi konselor hubungan di dalam platform kami. Kami mencari psikolog maupun professional lain di bidang hubungan untuk berkolaborasi bersama kami mewujudkan hubungan yang lebih meaningful, sehat, dan saling memahami.</p>
          <h3 class="mt-4">Job Description</h3>
          <ul>
              <li>Melakukan praktik psikologi secara online (waktu fleksibel)</li>
              <li>Melakukan asesmen serta pembuatan laporan</li>
              <li>Bertanggungjawab dalam semua laporan psikologi dan hasil wawancara kepada klien</li>
              <li>Mampu membantu dan mengkoordinir dalam pengembangan alat tes psikologi</li>
          </ul>
          <h3 class="mt-4">Syarat & Ketentuan:</h3>
          <ul>
              <li>Lulusan S2 Profesi Psikologi</li>
              <li>Mempunyai SIPP aktif (tidak dalam proses pengurusan)</li>
              <li>Memahami proses Asesmen psikologi</li>
              <li>Memiliki kemampuan konseling</li>
              <li>Memahami administrasi dan interpretasi alat test psikologi</li>
              <li>Minimal pengalaman 1 tahun</li>
              <li>Bersedia bekerja</li>
              <li>Mampu bersinergi dengan visi misi Afeksi</li>
              <li>Mampu meluangkan waktu</li>
          </ul>
          <h3 class="mt-4">Skills</h3>
          <ul>
              <li>Psychological assessment</li>
              <li>Psychological report</li>
              <li>Counseling</li>
          </ul>
          <button type="button" class="btn btn-primary daftar" data-bs-toggle="modal" data-bs-target="#form-pendaftaran-konselor" data-bs-whatever="@getbootstrap">Daftar Sekarang</button>
          <!-- Modals -->
          <form method="POST" action="/pendaftaran-relationship-konselor/create" enctype="multipart/form-data">
            @csrf
            <div class="modal fade modal-lg" data-bs-backdrop="static" id="form-pendaftaran-konselor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 300000000000">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-center">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <h3 class="modal-title fw-semibold text-center px-5">Formulir Pendaftaran Relationship Konselor</h3>
                      <p class="text-center px-4">Silahkan isi data anda dan pastikan data anda sudah sesuai.</p>
                   
                      <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" placeholder="Masukan Email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap" class="form-control" id="namaLengkap" name="namaLengkap" value="{{ Auth::user()->nama }}" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="jenis-kelamin" class="col-form-label">Jenis Kelamin</label>
                         @if (auth()->user()->jenisKelamin)
                                    <input type="text" value="{{ auth()->user()->jenisKelamin }}" readonly class="form-control" id="jenis-kelamin" name="jenisKelamin">
                                @else
                                    <select name="jenisKelamin" class="form-select" id="jenis_kelamin" required>
                                      <option value="0" selected>Pilih Jenis Kelamin</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                    </select>    
                                @endif
                                @error('jenisKelamin')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                      </div>
                      <div class="mb-3">
                        <label for="hp" class="col-form-label">No HP</label>
                        @if (auth()->user()->no_whatsapp)
                            <input type="text" placeholder="08xxxxxxxxx" class="form-control" id="noHP" name="nohp" readonly  value="{{ Auth::user()->no_whatsapp }}" >
                        @else
                            <input type="text" placeholder="08xxxxxxxxx" class="form-control" id="noHP" name="nohp" >
                        @endif
                      </div>
                      <div class="mb-3">    
                        <label for="pekerjaan" class="col-form-label">Pekerjaan</label>                  
                        <select name="pekerjaan" class="form-select" id="pekerjaan" name="pekerjaan" required>
                          <option selected>Pilih pekerjaan anda sekarang</option>
                          <option value="pelajar">Pelajar</option>
                          <option value="mahasiswa">mahasiswa</option>
                          <option value="bekerja">Sudah Bekerja</option>
                        </select>                                                
                      </div>
                      <div class="mb-3">
                        <label for="instansi" class="col-form-label">Nama Instansi</label>
                        <input type="text" placeholder="Nama Tempat" class="form-control" id="instansi" name="instansi" required>                        
                      </div>
                      <div class="mb-3">
                        <label for="divisi" class="col-form-label">Jurusan/Divisi</label>
                        <input type="text" placeholder="Nama Tempat" class="form-control" id="divisi" name="divisi" required>
                        @error('divisi')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="alasan" class="col-form-label">Alasan Memilih Relationship Konselor</label>
                        <textarea class="form-control"placeholder="Alasan" id="alasan" name="alasan"></textarea required>
                        @error('alasan')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">                    
                        <label for="bukti_follow" class="col-form-label">Bukti Follow ig Afeksi</label>
                        <label class="upload-file" for="follow-ig" class="col-form-label bukti-follow"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload Bukti</label>
                        <input type="file" name="bukti_follow" id="upload-file" class="d-block "  onchange="displayFileName(this)" required>
                        @error('bukti_follow')
                          <span class="text-danger">{{ $message }}</span>
                        @else
                            <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 2MB (jpg , jpeg, png)</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">          
                        <label for="cv" class="col-form-label">CV</label>
                        <label class="upload-file" for="cv" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload CV</label>
                        <input type="file" name="cv" id="upload-file" multiple class="d-block" onchange="displayFileName(this)"  required>
                        @error('cv')
                          <span class="text-danger">{{ $message }}</span>
                        @else
                            <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 10MB (Only PDF)</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">                    
                        <label for="portfolio" class="col-form-label">Portfolio(Optional)</label>
                        <label class="upload-file" for="portfolio" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload bukti</label>
                        <input type="file" name="portofolio" multiple id="upload-file"  onchange="displayFileName(this)" class="d-block" >
                        @error('portofolio')
                              <span class="text-danger">{{ $message }}</span>
                          @else
                              <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 10MB (Only PDF)</span>
                        @enderror
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary m-3">Daftar</button>                
                </div>
              </div>
            </div>
          </form>
          <!-- End Modals -->
      </div>
</section>

@include('sweetalert::alert')
@include('../partials/footer') 

@section('script')
    <script src="/assets/js/form-file-pendaftaran.js"></script>
@endsection

@endsection



