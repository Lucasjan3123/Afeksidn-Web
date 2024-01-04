@extends('../layout')

@section('title', 'Pembayaran Webinar | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/pembayaran.css">
    <link rel="stylesheet" href="/assets/css/stepper.css">
@endsection


{{-- @include('../partials/navbar')  --}}

@section('content')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 Library JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


<!-- PEMBAYARAN -->
<div class="container" style="padding-top:calc(70px + 94px);">
    <div class="row mb-5">
        <div class="col-lg-7">
            <div class="card mb-4" style="border-color: #2139f9; z-index: 0">
                <div class="card-body">
                <form action="/{{ request('ref_transaction_event') }}/checkout/webinar" method="post">
                    @csrf
                    <input type="hidden" name="ref" value="{{ request('ref_transaction_event') }}">
                    <h5 class="fw-bolder" style="color: #2139f9">Pembayaran</h5>
                    <!-- Metode Pembayaran -->
                    <p class="fw-medium">Pilih Metode Pembayaran yang bisa anda pilih</p>
                    @if (session()->has('message'))
                        <span class="text-danger fst-italic">{{ session('message') }}</span>
                    @endif
                    <select id="myDropdown" class="form-select" name="bank" style="width: 100%">
                        <!-- option on Pembayaran.js -->
                        <option value="" selected>Pilih Metode Pembayaran</option>
                    </select>

                    <!-- Voucher -->
                    <h6 class="fw-bold">Voucher
                        @if (session()->has('error'))
                        <span class="text-danger fst-italic">({{ session('error') }})</span>
                        @elseif(session()->has('apply'))
                        <span class="text-success fst-italic">({{ session('apply')['pesan'] }})</span>
                        @endif
                    </h6>
                    <div class="input-group mb-3">
                        @if (session()->has('apply'))
                        <input type="text" id="input_code"  class="form-control p-3" placeholder="Masukkan Kode" name="input_code" aria-label="Masukkan Kode" value="{{ session('apply')['kode'] }}" aria-describedby="button-addon2" readonly/>
                        <input class="btn bg-danger btn-voucher btnBatalVoucher" type="submit" id="button-addon2" name="btnBatalVoucher" value="Batal">
                        @else
                        <input type="text" id="input_code"  class="form-control p-3" placeholder="Masukkan Kode" name="input_code" aria-label="Masukkan Kode" aria-describedby="button-addon2" />
                        <input class="btn btn-voucher btnApplyVoucher" type="submit" id="button-addon2" name="btnApplyVoucher" value="Pilih">
                        @endif
                    </div>

                    <!-- Rincian Pembayaran -->
                    <h6 class="fw-bold">Rincian Pembayaran</h6>
                    <div class="card p-1 mb-5">
                        <div class="container mt-4">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td class="text-muted fw-bold">Sub Total</td>
                                    <td class="text-end fw-bold">Rp {{ number_format($data->event->price_event, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted fw-bold">Voucher Diskon</td>
                                    <td class="text-end fw-bold">- Rp.
                                        @if (session()->has('apply'))
                                        {{ number_format(session('apply')['diskon'], 0, ',', '.') }}
                                        @else
                                        {{ number_format(0, 0, ',', '.') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    <div class="horinzontal">
                                        <hr />
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-5 fw-bold text-muted">Total Pembayaran</td>
                                    <td class="text-end fw-bold fs-5">Rp.
                                        @if (session()->has('apply'))
                                            {{ number_format($data->event->price_event - session('apply')['diskon'], 0, ',', '.') }}
                                        @else
                                            {{ number_format($data->event->price_event, 0, ',', '.') }}
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Total Pembayaran -->
                    <div class="horizontal-line"></div>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col">
                                <h5 class="text-muted">Total Pembayaran</h5>
                                <h5 class="fw-bold" style="color: #2139f9">Rp
                                    @if (session()->has('apply'))
                                        {{ number_format($data->event->price_event - session('apply')['diskon'], 0, ',', '.') }}
                                    @else
                                        {{ number_format($data->event->price_event, 0, ',', '.') }}
                                    @endif
                                </h5>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn button-next" style="background-color: #2139f9; color: #fff; width: 10rem">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!-- INFORMASI PAKET -->
        <div class="col-lg-4 info mb-4">
            <div class="card" style="border-color: #2139f9">
                <div class="card-body">
                    <h5 class="fw-bolder" style="color: #2139f9">Informasi Webinar</h5>
                    <div class="card border-3 mb-4" id="plus-counseling">
                        <div class="container custom-flex">
                            <div class="image-container">
                                <img src="{{ asset('/assets/img/kegiatan/'.$data->event->cover_event) }}" alt="{{ $data->event->title_event }}" class="img-fluid" width="110"  />
                            </div>
                            <div class="text-container px-2">
                                <h6 class="mt-3 mb-0 fw-bold" style="color: #2139f9">{{ $data->event->title_event }}</h6>
                                <p style="font-size: 10px">{!! $data->event->description_event !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-3 mb-4">
                        <div class="row">
                            <div class="col-lg-12 p-4">
                                @foreach ($data->event->webinar_session as $psikolog)
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/img/pembayaran/plus-counseling.png" alt="Profil" class="rounded-circle mx-2" width="110" height="110" />
                                    </div>
                                    <div class="flex-grow-1 ms-1 m-3">
                                        <h6 class="fw-bold">{{ $psikolog->pembicara->nama_psikolog }}</h6>
                                        <p class="text-muted">Psikolog</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Detail Informasi Paket -->
                        <div class="container detail-table">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Topik</td>
                                            <td>:</td>
                                            <td>{{ $data->event->event_categories->category_event_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>:</td>
                                            <td> {{ $data->event->date_event }}</td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td>:</td>
                                            <td>{{ $data->event->time_start }} - {{ $data->event->time_finish }} WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat</td>
                                            <td>:</td>
                                            <td>
                                                @if ( $data->event->time_category_event != "ONLINE")
                                                Offline Di {{ $data->event->is_place }}
                                                @else
                                                Online Via {{ $data->event->is_place }} </li>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-line"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-muted">Harga</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <h5 class="fw-bold" style="color: #2139f9">Rp {{ number_format($data->event->price_event, 0, ',', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('../partials/footer')


@section('script')
<script src="/assets/js/pembayaran.js"></script>
@endsection


@endsection
