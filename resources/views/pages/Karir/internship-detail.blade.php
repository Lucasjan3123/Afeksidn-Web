@extends('../layout')

@section('title')
  Internship {{ $data->nama_posisi }} | AFEKSI
@endsection

@section('styles')
    <link rel="stylesheet" href="/assets/css/internship.css">
@endsection


{{-- @include('../partials/navbar')  --}}

@section('content')
<section class="wrapper">
    <div class="banner-wrapper">
    </div>
        <div class="container content">
            <div class="bread-crumbs d-flex gap-2 fw-semibold">
                <p class="fw-medium"><a href="{{ route('karir') }}" class="text-dark">Karir</a></p>
                <span>&gt;</span>
                <p class="fw-medium"><a class="text-dark" href="#">Internship</a></p>
                <span>&gt;</span>
                <p><a href="/internship/{{ $data->slug }}" class="fw-bold text-dark">{{ $data->nama_posisi }}</a></p>
            </div>
            <h1 class="mt-3 fw-bold">{{ $data->nama_posisi }}</h1>
            <div class="info-utils d-flex gap-2 mt-4">
              <i class="bi bi-geo-alt-fill me-3"></i>
              <p class="work-type  fw-semibold">Remote - </p>
              <p>Surabaya, Indonesia</p>
              <i class="bi bi-briefcase-fill me-2"></i>
              <p>{{ $data->tipe_kerja }}</p>
          </div>
          <p class="afeksi-description">Afeksi adalah layanan edukasi dan konsultasi kesehatan hubungan berbasis psikologi relasi pertama di Indonesia Afeksi super team adalah program unpaid internship dengan sistem WFH yang mengasah kemampuan kalian dalam simulasi dunia kerja lewat pembelajaran aktif dalam membangun komunitas startup</p>
          <h3 class="mt-4">Job Description</h3>

          {{-- GET DATA JOBDESK --}}
          <div class="list-list-list">
              {!! $data->jobdesc !!}
          </div>
          {{-- ENDGET DATA JOBDESK --}}

          <h3 class="mt-4">Dicari orang yang:</h3>

          {{--GET DATA KUALIFIKASI --}}
          <div class="list-list-list">
            {!! $data->kualifikasi !!}
          </div>  
          {{-- ENDGET DATA KUALIFIKASI --}}

          <button type="button" class="btn btn-primary daftar" data-bs-toggle="modal" data-bs-target="#form-pendaftaran-konselor" data-bs-whatever="@getbootstrap">Daftar Sekarang</button>
          <!-- Modals -->
          <div class="modal fade modal-lg"  data-bs-backdrop="static" id="form-pendaftaran-konselor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 300000000000">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 class="modal-title fw-semibold text-center px-5">Formulir Pendaftaran</h3>
                    <p class="text-center px-4">Silahkan isi data anda dan pastikan data anda sudah sesuai.</p>
                    <form  action={{ route("internship.register") }}  method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" placeholder="Masukan Email" class="form-control"  value="{{ Auth::user()->email }}" readonly  required>
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap" class="form-control" id="nama" value="{{ Auth::user()->nama }}" readonly  required>
                      </div>
                      <div class="mb-3">
                        <label for="jenis-kelamin" class="col-form-label">Jenis Kelamin</label>
                         @if (auth()->user()->jenisKelamin)
                                      <input type="text" value="{{auth()->user()->jenisKelamin }}" readonly class="form-control" id="jenis-kelamin"  required>
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
                        <input type="text" name="nohp" placeholder="08xxxxxxxxx" class="form-control" id="hp" @if (auth()->user()->no_whatsapp)
                            readonly
                        @endif value="{{ Auth::user()->no_whatsapp }}" required>
                        @error('nohp')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                      </div>
  
                      <input type="hidden" name="status" value="SUDAH DAFTAR">
                      <div class="mb-3">
                        <label for="asal_daerah" class="col-form-label">Daerah</label>
                        <input type="text"placeholder="Asal Daerah" class="form-control" name="asal_daerah" id="asal_daerah" required>
                        @error('asal_daerah')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="semester" class="col-form-label">Mahasiswa Semester</label>
                        <input type="text"placeholder="Semester dalam angka" name="semester" class="form-control" id="semester" required>
                        @error('semester')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="universitas" class="col-form-label">Nama Universitas</label>
                        <input type="text" placeholder="Universitas" name="universitas" class="form-control" id="universitas" required>
                        @error('universitas')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="jurusan" class="col-form-label">Jurusan Kuliah</label>
                        <input type="text" placeholder="Jurusan" class="form-control" id="jurusan" name="jurusan" required>
                        @error('jurusan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <div class="mb-3">    
                          <label for="position_id" class="col-form-label">Posisi yang dipilih</label>                  
                          <select class="form-select" id="position_id"  name="position_id" required>
                              {{-- <option value="" disabled selected>Pilih posisi yang diminati</option> --}}
                              {{-- INI JUGA YANG NYEBABIN ERROR GABOLEH DISABLED --}}
                                <option value="{{ $data->id }}" @if($data->slug == request('slug') ) selected readonly @endif>{{ $data->nama_posisi }}</option>                
                          </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="alasan" class="col-form-label">Alasan Memilih Posisi tersebut</label>
                        <textarea class="form-control"placeholder="Alasan" id="alasan" name="alasan" required></textarea>
                        @error('alasan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="kelebihan" class="col-form-label">3 Kelebihan yang kamu miliki</label>
                        <input type="text" placeholder="Kelebihan kamu" class="form-control" id="kelebihan" name="kelebihan" required>
                        @error('kelebihan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="kekurangan" class="col-form-label">3 kekurangan yang kamu miliki</label>
                        <input type="text" placeholder="kekurangan kamu" class="form-control" id="kekurangan" name="kekurangan" required>
                        @error('kekurangan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="harapan" class="col-form-label">Apa harapan kamu gabung bersama Afeksi</label>
                        <textarea class="form-control"placeholder="Harapan kamu" id="harapan" name="harapan" required></textarea>
                        @error('harapan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="one_description" class="col-form-label">Satu kalimat yang mendeskripsikan diri kamu</label>
                        <input type="text" placeholder="Satu kalimat yang mendeskripsikan diri kamu" class="form-control" id="one_description" name="one_description" required>
                        @error('one_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">                    
                        <label for="follow-ig" class="col-form-label">Bukti Follow ig Afeksi</label>
                        <label class="upload-file" for="follow-ig" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3" required></i>Upload Bukti</label>
                        <input type="file" name="bukti_follow" id="upload-file" class="d-block" onchange="displayFileName(this)">
                        @error('bukti_follow')
                            <span class="text-danger">{{ $message }}</span>
                        @else
                            <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 2MB (jpg , jpeg, png)</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">          
                        <label for="cv" class="col-form-label">CV</label>
                        <label class="upload-file" for="cv" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload CV</label>
                        <input type="file" name="cv" id="upload-file" class="d-block" required onchange="displayFileName(this)">
                        @error('cv')
                            <span class="text-danger">{{ $message }}</span>
                              @else
                            <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 10MB (Only PDF)</span>
                        @enderror
                      </div>
                      <div class="mb-3 upload-file-wrapper">                    
                        <label for="portfolio" class="col-form-label">Portfolio(Optional)</label>
                        <label class="upload-file" for="portfolio" class="col-form-label"> <i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload bukti</label>
                        <input type="file" name="portofolio" id="upload-file" class="d-block" onchange="displayFileName(this)">
                        @error('portofolio')
                            <span class="text-danger">{{ $message }}</span>
                            @else
                            <span class="text-muted fst-italic mt-1" style="font-size: 12px;">File Max 10MB (Only PDF)</span>
                        @enderror
                      </div>
                      <div class="row container">
                          <button type="submit" class="btn btn-primary m-3">Daftar</button>   
                      </div>               
                    </form>
                  </div>
              </div>
            </div>
          </div>
          <!-- End Modals -->
      </div>
</section>
@include('sweetalert::alert')
@include('../partials/footer') 

@section('script')
   <script src="/assets/js/form-file-pendaftaran.js"></script>
@endsection

@endsection

