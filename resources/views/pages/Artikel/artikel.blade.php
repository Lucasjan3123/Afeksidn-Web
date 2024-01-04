@extends('../layout')

@section('title', 'Artikel | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/artikel.css">
@endsection


{{-- @include('../partials/navbar')  --}}

@section('content')
<div class="contents row" style="padding-top:94px;">
      <h1 style="color: #233dff">Article</h1>
        <div class="side col-lg-3 col-md-4 mb-5">
          <div class="form-group">
            <p class="side-heading fw-semibold">Filter</p>
            <form action="{{ route('artikel') }}" method="get">
              <div class="input-group password-container form-group">
                  <input type="text" name="input_search" class="form-control" placeholder="Search">
                  <div class="input-group-append button">
                      <button class="btn rounded-0 rounded-end-2 bg-body-secondary" type="submit"><img class="password-icon" src="assets/img/kegiatan/material-symbols_search.png" alt=""></button>
                  </div>
              </div>
              </form>
          </div>
  
          <hr class="mt-4" />
          <form action="{{ route('artikel') }}" method="get">
            <div class="form-group">
              <p class="side-heading fw-semibold">Urutkan</p>
              <select class="form-select" name="sort_date" aria-label="Default select example">
                  <option selected value="latest">Terbaru</option>
                  <option value="oldest">Terlama</option>
              </select>
            </div>
    
            <hr class="mt-4" />
    
            <div class="form-group">
              <p class="side-heading fw-semibold">Topik</p>
              <div class="form-check">
                <input name="topik" class="form-check-input" type="checkbox" value="RELATIONSHIP" id="relationshipCheckbox" />
                <label class="form-check-label" for="relationshipCheckbox"> Relationship </label>
              </div>
              <div class="form-check">
                <input name="topik" class="form-check-input" type="checkbox" value="selfLove" id="selfLoveCheckbox" />
                <label class="form-check-label" for="selfLoveCheckbox"> Self Love </label>
              </div>
              <div class="form-check">
                <input name="topik" class="form-check-input" type="checkbox" value="KESETARAAN" id="kesetaraanCheckbox" />
                <label class="form-check-label" for="kesetaraanCheckbox"> Kesetaraan </label>
              </div>
              <div class="form-check">
                <input name="topik" class="form-check-input" type="checkbox" value="KESEHATAN" id="kesehatanCheckbox" />
                <label class="form-check-label" for="kesehatanCheckbox"> Kesehatan </label>
              </div>
              <div class="form-check">
                <input name="topik" class="form-check-input" type="checkbox" value="FAMILY ISSUE" id="familyCheckbox" />
                <label class="form-check-label" for="familyCheckbox"> Family Issue </label>
              </div>
            </div>
    
            <hr class="mt-4" />
    
            <div class="d-flex flex-column mt-4">
              <button class="btn side-btn">Terapkan Filter</button>
              <button type="reset" class="btn side-btn btn-outline">Hapus Filter</button>
            </div>
          </form>
        </div>

      <div class="content col-lg-9 col-md-8">
        <div class="d-flex flex-column align-content-center justify-content-center">
          @forelse ($data as $data)
              <div class="article-card row px-3 py-5 rounded-4 gap-3 gap-lg-0 mb-4">
                <img class="col-lg-5" src="{{ $data->gambar ? $data->gambar : 'assets/img/article/cardImg.png' }}" alt="{{ $data->judul_artikel }}" />
                <div class="article-content d-flex flex-column col-lg-7">
                  <h3 class="fw-bold m-0" style="color: #233dff">{{ $data->judul_artikel }}</h3>
                  <p class="m-0">
                    {{ Str::substr($data->isi_artikel, 0, 150). "..." }}
                  </p>
                  <span class="text-secondary">{{ $data->created_at->format('d M Y') }}</span>
                  <div class="px-3 align-self-end">
                  <a href="{{ route('artikel.detail', $data->slug) }}"><div class="btn card-btn">Selengkapnya</div></a>
                  </div>
                </div>
              </div>
          @empty
              <h4 class="text-center mt-3">Tidak Ada Artikel</h4>
          @endforelse
        </div>
      </div>
    </div>

@include('../partials/footer') 
@endsection

