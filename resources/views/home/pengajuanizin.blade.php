
@section('title', 'Dinas Kominfo Wonosobo | Hubungi Kami')
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
      <div class="row">

            <div class="col-md-12 d-flex justify-content-center mb-5">
      <h2>DAFTAR PENGAJUAN IZIN DISKOMINFO</h2>
      </div>

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

      <a href="/pengajuanizin">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/kunjungan.jpg')}}" alt="Girl in a jacket" >
            </a>
</div>

<div class="col-md-3 mb-3">

      <a href="/pengajuanizin">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/layanan.jpg')}}" alt="Girl in a jacket" >
            </a>
</div>

<div class="col-md-3">

      <a href="/pengajuanizin">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/vps baru.jpg')}}" alt="Girl in a jacket" >
            </a>
</div>


<div class="col-md-3">

      <a href="/pengajuanizin">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/perubahan.jpg')}}" alt="Girl in a jacket" >
            </a>
</div>

<div class="col-md-3">

      <a href="/pengajuanizin">
            <img  class="card-img transition-zoom-hover" src="{{asset('front/assets/images/pengantar.jpg')}}" alt="Girl in a jacket" >
            </a>
</div>

</div>
    </div>
    <!-- End Contact Form Section -->
  </main>
  <!-- ========== END MAIN ========== -->
@endsection

