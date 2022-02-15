@section('title',$halaman->judul_posting??'' )
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header"
    class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
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
    <div class="container space-top-2 space-bottom-2">
      <div class="w-lg-60 mx-lg-auto">
        <!-- Author -->
        <center><h1 class="h2">{{ ucwords($halaman->judul_posting??'')}}</h1>

        <br>
          @if (!empty($attachment->path) || !empty($attachment->file_name))
          <img class="img-fluid rounded mx-auto d-block width: 100%;height: 100%;object-fit: scale-down" src="{{ asset($attachment->path.$attachment->file_name??'') }}" alt="Image Description">
          @endif 
          <br>
        
        <div style="text-align:justify; text-justify:auto;   color:black;">  <!-- text-indent: 40px;-->
         {!! $halaman->isi_posting??'' !!} 
        </div>
      </div>

            <div class="w-lg-60 mx-lg-auto">
                <div class="w-lg-60 mx-lg-auto">
                    <div class="w-lg-40 mx-lg-auto">

                    </div>
                </div>
                <!-- End Subscribe Section -->
    </main>
    <!-- ========== END MAIN ========== -->


    @endsection

    @push('js')
        <script>
            < script src = "{{ url ('front/assets/vendor/jquery/dist/jquery.min.js') }}" >

        </script>
        <script
            src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}">
        </script>
        <script
            src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
        </script>
        </script>
    @endpush
