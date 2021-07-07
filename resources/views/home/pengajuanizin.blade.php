
@section('title', 'Dinas Kominfo Wonosobo')
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

   <!-- ========== MAIN ========== -->
  <main id="content" role="main" class="ignielPelangi">
    <!-- Contact Form Section -->
    <div class="container space-top-3 space-bottom-2">

      <!-- Nav -->
<div class="d-flex justify-content-center text-center ">
  <ul class="nav nav-pills mb-7" role="tablist">
    <li class="nav-item">
      <a class="nav-link " id="pills-one-code-features-example2-tab" data-toggle="pill" href="#pills-one-code-features-example2" role="tab" aria-controls="pills-one-code-features-example2" aria-selected="true">Daftar Pengajuan Izin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">Lacak Nomor Tiket</a>
    </li>
  </ul>
</div>
<!-- End Nav -->

<!-- Tab Content -->
<div class="tab-content">
  <div class="tab-pane fade " id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
   
     <div class="col-md-12 d-flex justify-content-center mb-5">
      <h2>DAFTAR PENGAJUAN IZIN DISKOMINFO</h2>
      </div>

      <div class="row">

      <div class="col-md-3">
            <a href="{{route('perijinan:akses.dc.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/akses data center.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3">
            <a href="{{route('perijinan:permintaan.col.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/colocation.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3">
            <a href="{{route('perijinan:kunjungan.dc.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/kunjungan.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3 mb-3">
            <a href="{{route('perijinan:layanan.server.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/layanan.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3">
            <a href="{{route('perijinan:vps.baru.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/vps baru.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3">
            <a href="{{route('perijinan:perubahan.vps.create')}}">
            <img class="card-img transition-zoom-hover" src="{{asset('front/assets/images/perubahan.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      <div class="col-md-3">
            <a href="{{route('perijinan:pengajuan.server.create')}}">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/pengantar.jpg')}}" alt="Girl in a jacket" >
            </a>
      </div>

      </div>
  </div>

<!-- TAB 2 -->
  <div class="tab-pane fade show active" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
  <div class="row d-flex justify-content-center">
  <div class="col-md-6 ">
      <form class="input-group input-group-sm input-group-merge input-group-flush mb-3" action="/search" method="get">

      <input name="q" type="search" class="form-control" placeholder="Masukkan Nomor Tiket" aria-label="Search articles" aria-describedby="searchLabel">
      <div class="input-group-append">
            <div class="input-group-text" id="searchLabel">
            <button type="submit" class="no-border btn-transparent"><i class="fas fa-search"></i></button>
            </div>
      </div>
      </form>

      <!-- Step -->
<ul class="step">
  <li class="step-item">
    <div class="step-content-wrapper">
      <span class="step-icon">   <img class="card-img" src="{{asset('front/assets/images/dikirim.png')}}" ></span>
      <div class="step-content">
        <h4>Pengajuan izin berhasil dikirim.</h4>
        <p class="step-text">Sedang dalam tahap pengecekan oleh petugas Diskominfo Wonosobo.</p>
      </div>
    </div>
  </li>

  <li class="step-item">
    <div class="step-content-wrapper">
      <span class="step-icon"><img class="card-img" src="{{asset('front/assets/images/disetujui.png')}}" ></span>
      <div class="step-content">
        <h4>Pengajuan izin disetujui</h4>
        <p class="step-text">Disetujui oleh Wajiran</p>
      </div>
    </div>
  </li>

  <li class="step-item">
    <div class="step-content-wrapper">
      <span class="step-icon"><img class="card-img" src="{{asset('front/assets/images/selesai.png')}}" ></span>
      <div class="step-content">
        <h4>Pengajuan izin selesai</h4>
        <p class="step-text">Berlaku hingga 21 Januari 2022.</p>
      </div>
    </div>
  </li>
</ul>
<!-- End Step -->
</div>
   </div>
  </div>
<!-- END TAB 2 -->
</div>
<!-- End Tab Content -->
    </div>
    <!-- End Contact Form Section -->
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
