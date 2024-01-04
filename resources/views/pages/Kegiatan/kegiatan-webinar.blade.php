@extends('../layout')

@section('title', 'Webinar | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="assets/css/kegiatan.css">
@endsection

{{-- @include('../partials/navbar')  --}}

@section('content')


{{-- Banner --}}
<div class="hero mt-5" style="background-image: url(assets/img/kegiatan/Banner.svg)" style="padding-top:94px;">
        <div class="d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
            <div class="left col-lg-6">
                <div class="dflex text-white ">
                    <p>Kegiatan</p>
                    <p><img src="assets/img/kegiatan/Vector (6).png" class="img-fluid"  alt="" /></p>
                    <p><a href="{{ route("webinar") }}" class="text-light">Webinar</a></p>
                </div>
                <div class="text text-white mt-5">
                    <h1 class="mb-4" >Temukan beragam webinar menarik dan bermanfaat dari Afeksi</h1>
                    <p>
                    Jangan lewatkan kesempatan untuk belajar dari para ahli, mendapatkan wawasan baru, dan berinteraksi dengan orang-orang lain yang
                    memiliki minat yang sama. Bersama-sama, mari kita bangun hubungan yang lebih mendalam, intim, dan penuh makna!
                    </p>
                </div>
            </div>
            <div class="right col-lg-6 ">
                <img src="assets/img/kegiatan/Hero.svg" />
            </div>
        </div>
    </div>

    {{-- filter --}}
    <div class="contents row">
      <div class="side col-lg-3 col-md-4 mb-5">
        <div class="form-group">
            <p class="side-heading fw-semibold">Filter</p>
            <form action="{{ route('webinar') }}" method="get">
            <div class="input-group password-container form-group">
                <input type="text" name="input_search" class="form-control" placeholder="Search">
                <div class="input-group-append button">
                    <button class="btn rounded-0 rounded-end-2 bg-body-secondary" type="submit"><img class="password-icon" src="assets/img/kegiatan/material-symbols_search.png" alt=""></button>
                </div>
            </div>
            </form>
        </div>
            
            
            <hr class="mt-4">
            <form action="{{ route('webinar') }}" method="get">
                {{-- Terbaru - Terlama --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Urutkan</p>
                    <select class="form-select" name="sort_date" aria-label="Default select example">
                        <option selected value="latest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                    </select>
                </div>

                <hr class="mt-4">

                {{-- Filter Harga --}}
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

                {{-- Filter Topik --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Topik</p>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="1" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                            Relationship
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="2" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Self Love
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="3" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Parenting
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="4" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Pre-Marriage
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="5" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Emotional Management
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="checkbox" value="6" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Family Issue
                        </label>
                    </div>
                </div>

                <hr class="mt-4">

                {{-- Filter Kategori --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Kategori</p>
                    <div class="form-check">
                        <input name="time_category_event" class="form-check-input" type="checkbox" value="OFFLINE" id="time_category_event">
                        <label class="form-check-label" for="time_category_event">
                        Offline
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="time_category_event" class="form-check-input" type="checkbox" value="ONLINE" id="time_category_event">
                        <label class="form-check-label" for="time_category_event">
                        Online
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pay_category_event" class="form-check-input" type="checkbox" value="FREE" id="pay_category_event">
                        <label class="form-check-label" for="pay_category_event">
                        Gratis
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pay_category_event" class="form-check-input" type="checkbox" value="PAID" id="pay_category_event">
                        <label class="form-check-label" for="pay_category_event">
                        Berbayar
                        </label>
                    </div>
                </div>

                <div class="d-flex flex-column mt-4">
                    <button class="btn side-btn">Terapkan Filter</button>
                    <button type="reset" class="btn side-btn btn-outline">Hapus Filter</button>
                </div>
            </form>
        </div>


        {{-- Daftar Webinar --}}
        <div class="content col-lg-9 col-md-8" id="#Content">
            <div class="row d-flex">
                @forelse ($data as $data)
                <div class="col-md-4">
                    <a href="{{ route('webinar.detail', $data->slug_event) }}" class="card-link" style="text-decoration: none; color: black;">
                    <div class="card mb-4" >
                            <img src="{{ asset('/assets/img/kegiatan/'.$data->cover_event) }}" class="card-img-top" alt="{{ $data->title_event }}">
                            <div class="card-body">
                                <p  class="card-title fw-semibold">{{ $data->title_event }}</p>
                                <div class="row">
                                @foreach ($data->webinar_session as $psikolog)
                                <div class="person d-flex gap-2 mt-3">
                                    <img src="assets/img/kegiatan/Ellipse 216.png" alt="">
                                    <div class="name">
                                        <p>{{ $psikolog->pembicara->nama_psikolog }}</p>
                                        <p class="text-body-tertiary">{{ $psikolog->pembicara->profil }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                                <div class="mt-3 d-flex flex-wrap gap-2 justify-content-between">
                                    <span class="px-2 text-body-tertiary">{{ ucfirst(strtolower($data->activity_category_event)) }}</span>
                                    <span class="px-2 text-body-tertiary">E-Certificate</span>
                                    <span class="px-2 text-body-tertiary">Diskusi/Konsultasi</span>
                                </div>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="d-flex date ">
                                        <img src="assets/img/kegiatan/material-symbols_date-range.png" class="me-2" alt="">
                                        <p class="text-muted">{{ $data->date_event }}</p>
                                    </div>
                                    <div class="d-flex date ">
                                        <img src="assets/img/kegiatan/watch_later.png" class="me-2" alt="">
                                        <p class="text-muted">{{ $data->time_start }} - {{ $data->time_finish }} WIB</p>
                                    </div>
                                </div>
                                <p class="fw-semibold lead mt-3 mb-0" style="color: #2139f9;">
                                    @if ($data->pay_category_event != "FREE")
                                        Rp. {{ number_format($data->price_event, 0, ',', '.') }}
                                    @else
                                        Gratis
                                    @endif</p>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                    <h4 class="text-center mt-3">Tidak Ada Webinar</h4>
                @endforelse
            </div>
        </div>
    </div>

@include('../partials/footer')

@endsection
