@extends('../layout')

@section('title', 'FAQ | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/faq-konseling.css">
@endsection


@section('content')


<section id="Konseling">
      <div class="hero-2 d-flex align-items-center" style="padding-top:94px">
          <div class="container py-5 my-5">
            <h1 class="display-5 fw-semibold">F.A.Q - Pertanyaan yang Sering Ditanyakan</h1>
            <p class="fs-4 mt-5 fw-light">Bagaimana kami bisa membantu Anda?</p>
          </div>
        </div>

      <div>
        <div class="container pe-2 py-5">
          <div class="row">
            <div class="col-sm">
                <button onclick="konseling()" id="btn-konseling" class="tombol-aktif btn px-5 py-3 fw-bold btn-secondary" >FAQ Konseling</button>
                <button onclick="mentoring()" id="btn-mentoring" class="btn px-5 py-3 fw-bold btn-outline-secondary">FAQ Mentoring</button>
            </div>
          </div>
        </div>
      </div>

    <section id="konseling-badge" >
      <div class="accordion mb-5 container" id="accordionExample">
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingOne">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <h2>Apa itu Konseling</h2>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
              Konseling adalah layanan konsultasi one on one maupun berpasangan dalam waktu tertentu dan jadwal yang sudah dipesan dan dijadwalkan di awal pemesanan.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTwo">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h2>Apa saja masalah yang bisa ditangani dalam konseling</h2>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Masalah yang ditangani dalam konseling sangat beragam mulai dari masalah berkaitan dengan overthinking, butuh teman bercerita, masalah kecemasan hingga masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingThree">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h2>Ada berapa macam layanan konseling</h2>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Kami membedakan layanan konseling kami berdasarkan pada kebutuhan Anda serta tingkat permasalahan yang anda alami. Kami memiliki dua layanan yaitu <span class="fst-italic">peers konseling serta professional konseling</span>.
                  </p>
                </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFour">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h2>Apa perbedaan keduanya?</h2> 
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Peers konseling hanya diperuntukkan untuk Anda yang memiliki masalah kecemasan, overthinking, maupun masalah non klinis yang tidak membahayakan Anda serta orang di sekitar anda. Professional konseling diperuntukkan bagi Anda yang memiliki masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>         
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFive">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h2>Siapa saja yang memberikan layanan dalam konseling?</h2> 
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Peers konseling akan dilayani oleh lulusan psikologi dari berbagai kampus kenamaan di seluruh Indonesia yang sudah melewati pelatihan khusus terkait dengan masalah psikologis dan sudah memiliki ilmu serta pemahaman mendalam tentang ilmu psikologi dan selalu dipantau oleh psikolog Afeksi.Professional konseling akan dilayani oleh professional di bidangnya masing-masing sehingga dapat menjawab keresahan dan menyelesaikan permasalahan klinis maupun permasalahan yang membahayakan keselamatan jiwa dengan baik. Kami memiliki psikolog professional dengan keahlian masing-masing, Kami memiliki ahli hukum yang berpengalaman terkait hubungan relasi, Kami juga memiliki ahli kekerasan seksual yang akan membantu menyelesaikan permasalahanmu.

                  </p>   
              </div>
          </div>
        </div>
        
    
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingEight">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <h2>Keamanan Informasi Pribadi Anda</h2> 
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kerahasiaan Informasi Pribadi Anda adalah hal yang terpenting, sehingga kami selalu berusaha menjaga erat Informasi Pribadi Anda. Kami akan memberlakukan upaya terbaik untuk melindungi dan mengamankan data dan Informasi Pribadi Anda dari akses, pengumpulan, penggunaan atau pengungkapan oleh orang-orang yang tidak berwenang dan dari pengolahan yang bertentangan dengan hukum, kehilangan yang tidak disengaja, pemusnahan dan kerusakan atau risiko serupa. Namun, pengiriman informasi melalui internet tidak sepenuhnya aman. Walau kami akan berusaha sebaik mungkin untuk melindungi Informasi Pribadi Anda, Anda mengakui bahwa kami tidak dapat menjamin keutuhan dan keakuratan Informasi Pribadi apa pun yang Anda kirimkan melalui Internet, atau menjamin bahwa Informasi Pribadi tersebut tidak akan dicegat, diakses, diungkapkan, diubah atau dihancurkan oleh pihak ketiga yang tidak berwenang, karena faktor-faktor di luar kendali kami. Anda bertanggung jawab untuk menjaga kerahasiaan detail Akun Anda, termasuk kata sandi Anda dengan siapapun dan harus selalu menjaga dan bertanggung jawab atas keamanan perangkat yang Anda gunakan.
                  </p>      
                </div>
          </div>
        </div>
        
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTen">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <h2>Materi Pemasaran</h2> 
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kami dapat mengirimkan Anda pemasaran langsung, iklan, dan komunikasi promosi melalui iklan, push-notification, email marketing, social media, dan berbagai layanan pesan yang terkait (“Materi Pemasaran”) jika Anda telah setuju untuk menerima materi pemasaran dari kami, Anda dapat memilih untuk tidak menerima komunikasi pemasaran tersebut kapan saja dengan mengklik pilihan “berhenti berlangganan” yang ada dalam pesan yang bersangkutan, atau menghubungi kami melalui detail kontak yang tercantum di bawah ini. Mohon perhatikan bahwa jika Anda memilih untuk keluar, kami masih dapat mengirimi Anda pesan-pesan non-pemasaran, seperti Anda terima atau informasi tentang Akun Anda.
                  </p>
                </div>
          </div>
        </div>
      </div>
    </section>

    {{-- MENTORING BADGE --}}
    <section id="mentoring-badge">
            <div class="accordion mb-5 container" id="accordionExample">
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingOne">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <h2>Apa itu Mentoring</h2>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
              Mentoring adalah layanan konsultasi one on one maupun berpasangan dalam waktu tertentu dan jadwal yang sudah dipesan dan dijadwalkan di awal pemesanan.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTwo">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h2>Apa saja masalah yang bisa ditangani dalam Mentoring</h2>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Masalah yang ditangani dalam konseling sangat beragam mulai dari masalah berkaitan dengan overthinking, butuh teman bercerita, masalah kecemasan hingga masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingThree">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h2>Ada berapa macam layanan mentoring</h2>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Kami membedakan layanan mentoring kami berdasarkan pada kebutuhan Anda serta tingkat permasalahan yang anda alami. Kami memiliki dua layanan yaitu <span class="fst-italic">peers konseling serta professional konseling</span>.
                  </p>
                </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFour">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h2>Apa perbedaan keduanya?</h2> 
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Peers konseling hanya diperuntukkan untuk Anda yang memiliki masalah kecemasan, overthinking, maupun masalah non klinis yang tidak membahayakan Anda serta orang di sekitar anda. Professional konseling diperuntukkan bagi Anda yang memiliki masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>         
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFive">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h2>Siapa saja yang memberikan layanan dalam mentoring?</h2> 
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Peers konseling akan dilayani oleh lulusan psikologi dari berbagai kampus kenamaan di seluruh Indonesia yang sudah melewati pelatihan khusus terkait dengan masalah psikologis dan sudah memiliki ilmu serta pemahaman mendalam tentang ilmu psikologi dan selalu dipantau oleh psikolog Afeksi.Professional konseling akan dilayani oleh professional di bidangnya masing-masing sehingga dapat menjawab keresahan dan menyelesaikan permasalahan klinis maupun permasalahan yang membahayakan keselamatan jiwa dengan baik. Kami memiliki psikolog professional dengan keahlian masing-masing, Kami memiliki ahli hukum yang berpengalaman terkait hubungan relasi, Kami juga memiliki ahli kekerasan seksual yang akan membantu menyelesaikan permasalahanmu.

                  </p>   
              </div>
          </div>
        </div>
        
    
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingEight">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <h2>Keamanan Informasi Pribadi Anda</h2> 
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kerahasiaan Informasi Pribadi Anda adalah hal yang terpenting, sehingga kami selalu berusaha menjaga erat Informasi Pribadi Anda. Kami akan memberlakukan upaya terbaik untuk melindungi dan mengamankan data dan Informasi Pribadi Anda dari akses, pengumpulan, penggunaan atau pengungkapan oleh orang-orang yang tidak berwenang dan dari pengolahan yang bertentangan dengan hukum, kehilangan yang tidak disengaja, pemusnahan dan kerusakan atau risiko serupa. Namun, pengiriman informasi melalui internet tidak sepenuhnya aman. Walau kami akan berusaha sebaik mungkin untuk melindungi Informasi Pribadi Anda, Anda mengakui bahwa kami tidak dapat menjamin keutuhan dan keakuratan Informasi Pribadi apa pun yang Anda kirimkan melalui Internet, atau menjamin bahwa Informasi Pribadi tersebut tidak akan dicegat, diakses, diungkapkan, diubah atau dihancurkan oleh pihak ketiga yang tidak berwenang, karena faktor-faktor di luar kendali kami. Anda bertanggung jawab untuk menjaga kerahasiaan detail Akun Anda, termasuk kata sandi Anda dengan siapapun dan harus selalu menjaga dan bertanggung jawab atas keamanan perangkat yang Anda gunakan.
                  </p>      
                </div>
          </div>
        </div>
        
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTen">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <h2>Materi Pemasaran</h2> 
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kami dapat mengirimkan Anda pemasaran langsung, iklan, dan komunikasi promosi melalui iklan, push-notification, email marketing, social media, dan berbagai layanan pesan yang terkait (“Materi Pemasaran”) jika Anda telah setuju untuk menerima materi pemasaran dari kami, Anda dapat memilih untuk tidak menerima komunikasi pemasaran tersebut kapan saja dengan mengklik pilihan “berhenti berlangganan” yang ada dalam pesan yang bersangkutan, atau menghubungi kami melalui detail kontak yang tercantum di bawah ini. Mohon perhatikan bahwa jika Anda memilih untuk keluar, kami masih dapat mengirimi Anda pesan-pesan non-pemasaran, seperti Anda terima atau informasi tentang Akun Anda.
                  </p>
                </div>
          </div>
        </div>
      </div>
    </section>



      <div class="mb-5">
        <div class="container p-5 rounded" style="background-color: #d3daff">
          <div class="row">
            <div class="col-sm-8 fw-bold mb-3" style="color: #233dff">Memiliki pertanyaan lain atau ingin berdiskusi lebih lanjut?</div>
            <div class="col-sm-4">
              <a href="https://wa.me/6282142625552" target="blank" class="btn-whatsapp" style="color: #ffffff"><i class="bi bi-whatsapp me-3"></i>Whatsapp Kami</a>
            </div>
          </div>
        </div>
      </div>

    

@include('../partials/footer') 

@section('script')
   <script src="assets/js/faq.js"></script>
@endsection

@endsection
