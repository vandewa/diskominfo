
@section('title', 'Dinas Kominfo Wonosobo | Struktur Organisasi')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
          data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
@endsection

@section('kondisi2')
<i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection

<br>
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
     <div class="w-lg-100 mx-lg-auto">
       <div class="mb-4"></div>
       
            <section id="my-keyboards">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Informatika</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-lg-3 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Kepala Seksi Teknik Komunikasi Jaringan Dan Persandian</h4>
                <img src="front/assets/images/priyo.png" alt="Keychron K3" class="keyboard-image" />
                <!-- <a href="#" class="btn btn-light keyboard-detail-button"><h5>Priyo Cahyono, SSTP</h5></a> -->
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Kepala Seksi Tata Kelola Teknologi Informasi Dan Kemitraan</h4>
                <img src="front/assets/images/ratna.png" alt="Womier RGB" class="keyboard-image" />
                <!-- <a href="#" class="btn btn-light keyboard-detail-button">Ratna Sulistiyani, S.Kom., MM</a> -->
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Plt/Plh. Kepala Seksi Pengembangan Aplikasi dan Telematika</h4>
                <img src="front/assets/images/anita.png" alt="Red Dragon" class="keyboard-image" />
                <a href="#" class="btn btn-light keyboard-detail-button">Anita Martilova, A.Md</a>
              </div>
            </div>
             <div class="col-md-3 col-lg-3 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Analis Sistem Informasi dan Jaringan</h4>
                <img src="front/assets/images/damar.gif" alt="Red Dragon" class="keyboard-image" />
                <a href="#" class="btn btn-light keyboard-detail-button">Damar Wisnu Candra Prabowo, S.Kom</a>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Analis Sistem Informasi</h4>
                <img src="front/assets/images/devan.png" alt="Red Dragon" class="keyboard-image" />
                <a href="#" class="btn btn-light keyboard-detail-button">Devan Dewananta, S.Kom</a>
              </div>
            </div>
          </div>
        </div>
      </section>


     </div>
    </div>
    <!-- End Subscribe Section -->
  </main>
  <!-- ========== END MAIN ========== -->


@endsection

@push('js')
<script>
  <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</script>
@endpush