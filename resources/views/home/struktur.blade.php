
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

@foreach ($posting as $post)
<br>
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
      <div class="w-lg-60 mx-lg-auto">
        <div class="mb-4">
         
        </div>

        <!-- Author -->
        <div class="border-top border-bottom py-4 mb-5">
          <div class="row align-items-md-center">
            <div class="col-md-7 mb-5 mb-md-0">
              <div class="media align-items-center">
                <div class="avatar avatar-circle">
                  <img class="avatar-img" src="front/assets/img/100x100/img11.jpg" alt="Image Description">
                </div>
                <div class="media-body font-size-1 ml-3">
                  <span class="h6"><a href="blog-profile.html">{{ $post->name }}</a> <button type="button" class="btn btn-xs btn-soft-primary font-weight-bold transition-3d-hover py-1 px-2 ml-1">Follow</button></span>
                  <span class="d-block text-muted">{{ Carbon\Carbon::parse($post->created_at)->isoFormat('dddd, D MMMM Y') }}</span>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="d-flex justify-content-md-end align-items-center">
                <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="#">
                  <i class="fab fa-telegram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <center><h1 class="h2">{{ $post->judul_posting}}</h1>
        <br>

        <div class="js-slick-carousel slick "
     data-hs-slick-carousel-options='{
       "fade": true,
       "infinite": true,
       "autoplay": true,
       "autoplaySpeed": 4000,
       "dots": true,
       "dotsAsProgressLine": true,
       "dotsClass": "slick-dots mt-n4"
     }'>
  <div class="js-slide">
    <img class="img-fluid w-100" src="upload/{{$post->file_name}}" alt="Image Description">
  </div>
</div>
</center>
<br>

        <!-- End Author -->
        <div style="
            text-align:justify;  
            text-justify:auto;
        ">
        {!! $post->isi_posting !!}
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

  @endforeach
@endsection