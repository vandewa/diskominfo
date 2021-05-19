
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
 <main id="content" role="main">
    <!-- Blogs Section -->
    <div class="container space-3 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8 mt-2">
        


         <center><h1 class="h2">{{ $details->judul}}</h1>

         <div class="js-slick-carousel mb-3 slick "
          data-hs-slick-carousel-options='{
            "fade": true,
            "infinite": true,
            "autoplay": true,
            "autoplaySpeed": 4000,
            "dots": true,
            "dotsAsProgressLine": true,
            "dotsClass": "slick-dots mt-n4"
          }' >
           
              @foreach($details->attachments as $slide)
            <div class="js-slide">
            <a href="{{ asset ('/uploads') }}/{{ $slide->file_name??'' }}" target="_blank">
                <img class="img-fluid transition-zoom-hover width: 100%;height: 100%;object-fit: scale-down" src="{{ asset ('/uploads') }}/{{ $slide->file_name??'' }}" alt="Image Description" height="150px;">
                </a>
            </div>
            @endforeach
            </div>
         <!-- End Author -->
        <div class="mt-5" style="text-align:justify; text-justify:auto;text-indent: 40px;  color:black;">
        {!! $details->isi !!}
         </div>

   
          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
        </div>

        <div class="col-lg-4">
          <!-- Sticky Block Start Point -->
          <div id="stickyBlockStartPoint"></div>
          <div class="js-sticky-block"
               data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 40,
                 "stickyOffsetBottom": 20
               }'>
            <div class="mb-7 mt-3">

           <div class="mb-1 mt-4">
              <div class="position-relative bg-info overflow-hidden space-0">
                <div class=" text-left position-relative">
                  <h3 class="container text-white text-center font-weight-semi-bold ">Pengumuman</h3>
                </div>
            <!-- SVG Shapes -->
                <figure class="position-absolute right-0 bottom-0 left-0 mb-n1">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
        </svg>
      </figure>
                <!-- End SVG Shapes -->
          </div>

            @foreach($pengumuman as $pengumumanya)
           <div class="card-body p-4" data-aos="zoom-out-right">
            <!-- Project -->
            <a class="card text-body transition-3d-hover mb-2 bg-info" href="/details/{{$pengumumanya->id}}">
            <img class="card-img-top" src="/uploads/{{$pengumumanya->gambarmuka->file_name??''}}" style="width:100%;height:200px;object-fit:cover" alt="Image Description">
            <div class="card-body text-left">
            <small>
            <p class="mb-0 text-white text-left" style="font-size:11px;"><b>{{ Carbon\Carbon::parse($pengumumanya->created_at)->isoFormat('LLLL') }} WIB</b></p>
            <p class="mb-0 text-white">{{ $pengumumanya->judul }}</p>
            </small>
            </div>
            </a>
            <!-- End Project -->
            </div>
            @endforeach


            <div class="mb-7">
              <div class="mb-3">
                <h3></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <!-- End Pagination -->
    </div>
    <!-- End Blogs Section -->

    <div class="container">
      <div class="row mb-5">
        
        </div>
        </div>

  </main>
  
  <!-- ========== END MAIN ========== -->

@endsection