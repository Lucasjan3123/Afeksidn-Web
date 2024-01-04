@extends('../layout')

@section('title', 'Campaign | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="assets/css/kegiatan.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')

<div class="hero campaign" style="background-image: url(assets/img/kegiatan/Banner.svg)">
      <div class="d-flex pt-5 mt-5 justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
        <div class="left col-lg-5">
          <div class="dflex gap-2 text-white">
            <p>Kegiatan</p>
            <p><img src="assets/img/kegiatan/Vector (6).png" class="img-fluid"  alt="" /></p>
            <p>Campaign</p>
          </div>
          <div class="text text-white mt-5">
            <h1 class="mb-4" >Ayo mulai perubahan positif mulai hari ini!</h1>
            <p>
                Bersama-sama, mari kita belajar, berbagi, dan tumbuh dalam kualitas hubungan kita, agar hidup kita dipenuhi dengan cinta, kebahagiaan, dan kedamaian batin.
            </p>
          </div>
        </div>
        <div class="right col-lg-7 ">
          <img class="campaign-hero" src="assets/img/kegiatan/Hero2.svg" />
        </div>
      </div>
    </div>

    <div class="contents row">
      <div class="side col-lg-3 col-md-4 mb-5">
        <form action="{{ route('campaign') }}" method="get">
        <div class="form-group">
          <p class="side-heading fw-semibold">Filter</p>
          <div class="input-group password-container form-group">
              <input type="text" name="input_search" class="form-control" placeholder="Search">
              <div class="input-group-append button">
                  <button class="btn rounded-0 rounded-end-2 bg-body-secondary" type="submit"><img class="password-icon" src="assets/img/kegiatan/material-symbols_search.png" alt=""></button>
              </div>
          </div>
        </div>
        </form>
    
    <form action="{{ route('campaign') }}" method="get">
      
          <hr class="mt-4">
    
          <div class="form-group">
            <p class="side-heading fw-semibold">Urutkan</p>
            <select class="form-select" name="sort_date" aria-label="Default select example">
              <option selected value="latest">Terbaru</option>
              <option value="oldest">Terlama</option>
            </select>
          </div>
      
          <hr class="mt-4">
  
          <div class="form-group">
            <div class="d-flex justify-content-between">
              <p class="side-heading fw-semibold">Harga</p>
              <!-- <p><img style="height: 22px; margin-right: 9px;" src="assets/img/kegiatan/keyboard_arrow_up.png" alt=""></p> -->
            </div>
  
            <div class=" d-flex align-items-center">
              <div class="p-2 bg-body-secondary rounded-start-2">
                <label for="inputRp" style="font-size: 14px;" >Rp</label>
              </div>
              <input type="text" name="max_price" class="form-control rounded-0 rounded-end-2" id="inputRp" placeholder="Harga Maksimum" />
            </div>
  
            <div class="mt-3 d-flex align-items-center">
              <div class="p-2 bg-body-secondary rounded-start-2">
                <label for="inputRp" style="font-size: 14px;" >Rp</label>
              </div>
              <input type="text" name="min_price" class="form-control rounded-0 rounded-end-2" id="inputRp" placeholder="Harga Minimum" />
            </div>
  
          </div>
  
          <hr class="mt-4">
  
          <div class="form-group">
            <p class="side-heading fw-semibold">Topik</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Relationship" id="relationshipCheckbox">
              <label class="form-check-label" for="relationshipCheckbox">
                Relationship
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Self Love" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Self Love
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Parenting" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Parenting
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Pre-Marriage" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Pre-Marriage
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Emotional Management" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Emotional Management
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category" value="Family Issue" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Family Issue
              </label>
            </div>
          </div>
  
          <hr class="mt-4">
  
          <div class="form-group">
            <p class="side-heading fw-semibold">Kategori</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category_activity" value="Offline" id="relationshipCheckbox">
              <label class="form-check-label" for="relationshipCheckbox">
                Offline
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="category_activity" value="Online" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Online
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pay_category" value="Free" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Gratis
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pay_category" value="Paid" id="selfLoveCheckbox">
              <label class="form-check-label" for="selfLoveCheckbox">
                Berbayar
              </label>
            </div>
          </div>
  
          <div class="d-flex flex-column mt-4">
            <button class="btn side-btn">Terapkan Filter</button>
            <button class="btn side-btn btn-outline" type="reset">Hapus Filter</button>
          </div>
        </form>


      </div>
    
      <div class="content col-lg-9 col-md-8">
        <div class="row d-flex">
          @forelse ($data as $data)
          <div class="col-md-4">
            <a href="{{ route('campaign.detail', $data->slug_event) }}" class="">
            <div class="card mb-4">
              {{-- <img src="{{ Storage::url($data->cover_event) }}" class="card-img-top" alt="{{ $data->title_event }}"> --}}
                <img src="{{ asset('/assets/img/kegiatan/'.$data->cover_event) }}" class="card-img-top" alt="{{ $data->title_event }}">
              <div class="card-body">
                <a href="{{ route('campaign.detail', $data->slug_event) }}" class="card-title fw-semibold">{{ $data->title_event }}</a>
                <div class="mt-3 d-flex flex-wrap gap-2 justify-content-between">
                  <span class="px-2 text-body-tertiary">{{ ucfirst(strtolower($data->activity_category_event)) }}</span>
                  <span class="px-2 text-body-tertiary">E-Certificate</span>
                  <span class="px-2 text-body-tertiary">Diskusi/Konsultasi</span>
                </div>
                <div class="mt-3 d-flex justify-content-between">
                  <div class="d-flex date">
                    <img src="assets/img/kegiatan/material-symbols_date-range.png" class="me-2" alt="">
                    <p class="text-muted">{{ $data->date_event }}</p>
                  </div>
                  {{-- <div class="d-flex date">
                    <img src="assets/img/kegiatan/watch_later.png" class="me-2" alt="">
                    <p class="text-muted">{{ $data->time_start }} - {{ $data->time_finish }} WIB</p>
                  </div> --}}
                </div>
                <p class="fw-semibold lead mt-3 mb-0" style="color: #2139f9;">
                  @if ($data->pay_category_event != "FREE")
                    Rp{{ number_format($data->price_event, 0, ',', '.') }}
                  @else
                    Gratis
                  @endif</p>
              </div>
            </div>
          </a>
          </div>
          @empty
              <h4 class="text-center mt-3">Tidak Ada Campaign</h4>
          @endforelse
          
        </div>
      </div>
    </div>

@include('../partials/footer') 


@endsection
