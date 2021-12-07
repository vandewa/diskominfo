@section('title', 'Dinas Kominfo Wonosobo | Beranda')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header"
    class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
    data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>

    @endsection

    @section('kondisi2')
    <i class="fas fa-user-circle fa-lg" style="color:blue"></i>
    @endsection
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="position-relative">
            <!-- Main Slider -->
            <div id="heroSlider" class="js-slick-carousel slick" data-hs-slick-carousel-options='{
                "vertical": true,
                "verticalSwiping": true,
                "autoplay": true,
                "autoplaySpeed": 1000,
                "dots": true,
                "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3",
                "asNavFor": "#heroSliderNav",
                "responsive": [
                    {
                    "breakpoint": 576,
                    "settings": {
                        "vertical": false,
                        "verticalSwiping": false
                    }
                    }
                ]
                }'>

                <div class="gradient-x-overlay-sm-dark bg-img-hero min-h-620rem vh-md-70 col-lg col-xl"
                    style="background-image: url({{ asset('front/assets/images/'.$sampul->file_name) }}); background-size: cover;
                        background-position: center center;"
                    data-aos="zoom-out">
                    <!-- News Block -->
                    <div class="container d-flex align-items-center min-h-620rem">
                        <div class="w-lg-40 mr-5">
                            <!-- Author -->
                            <div class="media align-items-center mb-3">
                                <div class="avatar avatar-sm avatar-circle mr-3">
                                    <img class="avatar-img"
                                        src="{{ asset('front/assets/images/diskominfo_ig.jpg') }}"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <a class="text-white" href="">Diskominfo Wonosobo</a>
                                </div>
                            </div>
                            <!-- End Author -->

                            <div class="mb-5">
                                <h2 class="text-white">
                                    <span class=" text-white">
                                        <span class="js-text-animation" data-hs-typed-options='{
                            "strings": ["Spirit Perubahan Menuju Pelayanan Prima.", "Wonosobo Menuju SmartCity."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 44,
                            "backDelay": 2500
                          }'></span>
                                    </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- End News Block -->
                </div>
            </div>
            <!-- End Main Slider -->

            <!-- Slider Nav -->
            <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
                <div class="content-centered-y right-0 mr-3">
                    <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
                        data-hs-slick-carousel-options='{
               "vertical": true,
               "verticalSwiping": true,
               "autoplay": true,
               "autoplaySpeed": 10000,
               "slidesToShow": 3,
               "isThumbs": true,
               "asNavFor": "#heroSlider"
             }'>
                    </div>
                </div>
            </div>
            <!-- End Slider Nav -->
        </div>
        <!-- End Hero Section -->


        <!-- Blogs Section -->
         <div id="de"></div>
        <div class="container space-2 space-lg-2" id="pagenya">
            <div class="row justify-content-lg-between">
                <div class="col-lg-8">

                    <!-- Blog -->
                    <div class="js-slick-carousel slick" data-hs-slick-carousel-options='{
                "autoplay": true,
                "autoplaySpeed": 4000,
                "vertical": true,
                "verticalSwiping": true,
                "dots": true,
                "dotsClass":
                "slick-pagination slick-pagination-white slick-pagination-vertical position-absolute bottom-0 right-0 mb-8 mr-3"
              }'>
                        @foreach($postingg as $highlight)
                            <article>
                                <a class="card align-items-start flex-wrap flex-row h-380rem gradient-x-overlay-sm-dark js-slide bg-img-hero rounded-lg-pseudo transition-3d-hover mb-7"
                                    href="/detail/{{ $highlight->id_posting }}"
                                    style="background-image: url(uploads/{{ $highlight->gambarMuka->file_name??'' }}); height:400px;">
                                    <div class="card-header border-0 bg-transparent w-100">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm avatar-circle mr-3">
                                                <img class="avatar-img "
                                                    src="{{ asset('uploads/'. $highlight->nama->profile_photo_path) }}"
                                                    alt="Image Description">
                                            </span>
                                            <div class="media-body">
                                                <span
                                                    class="d-inline-block text-white font-weight-bold">{{ $highlight->nama->name }}</span>
                                                <small class="d-block text-white"><span
                                                        class="badge bg-dark">{{ Carbon\Carbon::parse($highlight->created_at)->isoFormat('dddd, D MMMM Y') }}</span></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer border-0 bg-transparent mt-auto">
                                        <h3 class="h2 text-white">{{ $highlight->judul_posting }}</h3>
                                        <p class="text-white-70 mb-0">{{ $highlight->keterangan }}</p>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                    </div>

                    <!-- End Blog -->




                    @foreach($posting2 as $post)
                        <!-- Blog -->
                        <article class="row mb-7" data-aos="zoom-out-right">
                            <div class="col-md-5">
                                <a href="/detail/{{ $post->slug }}">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset ('uploads') }}/{{ $post->gambarMuka->file_name??'' }}"
                                        alt="Image Description" style="height:100%">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100 px-0">
                                    <span class="d-block mb-2">
                                        <a class="font-weight-bold"
                                            href="/kategori/{{ $post->id_kategori }}">{{ $post->kategori->nama_kategori }}</a>
                                    </span>
                                    <h3><a class="text-inherit"
                                            href="/detail/{{ $post->id_posting }}">{{ $post->judul_posting }}</a>
                                    </h3>
                                    <p>{{ $post->keterangan }}</p>
                                    <div class="media align-items-center mt-auto">
                                        <a class="avatar avatar-sm avatar-circle mr-3">
                                            <img class="avatar-img"
                                                src="{{ asset('uploads/'. $post->nama->profile_photo_path) }}"
                                                alt="Image Description">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-dark">
                                                <a class="d-inline-block text-inherit font-weight-bold"
                                                    href="/uploadby/{{ $post->created_by }}">{{ $post->nama->name }}</a>
                                            </span>
                                            <!-- isoFormat('dddd, D MMMM Y H') -->
                                            <small
                                                class="d-block">{{ Carbon\Carbon::parse($post->created_at)->isoFormat('LLLL') }}
                                                WIB</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- End Blog -->
                    @endforeach


                    {{ $posting2->links() }}




                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>

                <div class="col-lg-3">
                    <!-- Sticky Block Start Point -->
                    <div id="stickyBlockStartPoint"></div>
                    <div class="js-sticky-block" data-hs-sticky-block-options='{
                        "parentSelector": "#stickyBlockStartPoint",
                        "breakpoint": "lg",
                        "startPoint": "#stickyBlockStartPoint",
                        "endPoint": "#stickyBlockEndPoint",
                        "stickyOffsetTop": 40,
                        "stickyOffsetBottom": 20
                    }'>
                        <div class="mb-7">

                            <div class="mb-3">
                                <a href="/pengajuanizin">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset('front/assets/images/pengajuan.gif') }}"
                                        alt="Girl in a jacket" width="250" height="80">
                                </a>
                            </div>


                            <div class="mb-2">
                                <h3>Cari Berita</h3>
                            </div>

                            <form class="input-group input-group-sm input-group-merge input-group-flush mb-3"
                                action="/search" method="get">

                                <input name="q" type="search" class="form-control" placeholder="Masukkan kata kunci"
                                    aria-label="Search articles" aria-describedby="searchLabel">
                                <div class="input-group-append">
                                    <div class="input-group-text" id="searchLabel">
                                        <button type="submit" class="no-border btn-transparent"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                            <div class="position-relative bg-primary overflow-hidden ignielPelangi">
                                <div class=" text-left position-relative">
                                    <h3 class="container text-white text-center font-weight-semi-bold ">BERITA POPULER
                                    </h3>
                                </div>
                                <!-- SVG Shapes -->
                                <figure class="mb-n1">
                                    <svg class="position-absolute top-0 right-0 bottom-0 h-100"
                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920"
                                        height="100%">
                                        <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                                    </svg>
                                </figure>
                                <!-- End SVG Shapes -->
                            </div>




                            @foreach($populer as $populer)
                                <!-- Blog -->
                                <article class="mb-5 mt-3" data-aos="zoom-out-right">
                                    <div class="media align-items-center text-inherit">
                                        <div class="avatar avatar-lg mr-3">
                                            <a href="/detail/{{ $post->id_posting }}">
                                                <img class="avatar-img transition-zoom-hover"
                                                    src="{{ asset('uploads/'.$populer->gambarMuka->file_name) }}"
                                                    alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit"
                                                    href="/detail/{{ $populer->id_posting }}">{{ $populer->judul_posting }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->

                            @endforeach
                        </div>

                        <div class="position-relative bg-primary overflow-hidden mb-3 ignielPelangi">
                                <div class=" text-left position-relative">
                                    <h3 class="container text-white text-center font-weight-semi-bold ">SOSIAL MEDIA</h3>
                                </div>
                                <!-- SVG Shapes -->
                                <figure class="mb-n1">
                                    <svg class="position-absolute top-0 right-0 bottom-0 h-100"
                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920"
                                        height="100%">
                                        <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                                    </svg>
                                </figure>
                                <!-- End SVG Shapes -->
                            </div>


                        <section id="my-keyboards">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mb-3">
                                        <div class="keyboard-box4">
                                            <img src="front/assets/images/instagram.png" class="keyboard-img" />
                                          <h2 class="keyboard-tulisan">INSTAGRAM</h2>
{{--                                            <a href="#" class="btn btn-light keyboard-detail-button">Show Details</a>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mb-3">
                                        <a href="https://www.youtube.com/c/OfficialWonosoboTV" target="_blank">
                                        <div class="keyboard-box1">
                                            <img src="front/assets/images/youtube.png" class="keyboard-img" />
                                            <h2 class="keyboard-tulisan1 ml-2">YOUTUBE</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mb-3">
                                        <a href="https://www.facebook.com/diskominfo.wsb" target="_blank">
                                        <div class="keyboard-box2">
                                            <img src="front/assets/images/fb.png" class="keyboard-img" />
                                            <h2 class="keyboard-tulisan ml-2">FACEBOOK</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mb-3">
                                        <a href="https://twitter.com/diskominfo_wsb" target="_blank">
                                        <div class="keyboard-box3">
                                            <img src="front/assets/images/twitter.png" class="keyboard-img" />
                                            <h2 class="keyboard-tulisan1 ml-2">TWITTER</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                       {{-- <div class="mb-3">
                                <a href="https://www.youtube.com/c/OfficialWonosoboTV" target="_blank">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset('front/assets/images/instagram.gif') }}"
                                        alt="Girl in a jacket" width="250" height="80">
                                </a>
                            </div>

                         <div class="mb-3">
                                <a href="https://www.youtube.com/c/OfficialWonosoboTV" target="_blank">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset('front/assets/images/youtube.gif') }}"
                                        alt="Girl in a jacket" width="250" height="80">
                                </a>
                            </div>

                            <div class="mb-3">
                                <a href="https://www.facebook.com/diskominfo.wsb" target="_blank">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset('front/assets/images/fb.gif') }}"
                                        alt="Girl in a jacket" width="250" height="80">
                                </a>
                            </div>

                            <div class="mb-3">
                                <a href="https://twitter.com/diskominfo_wsb" target="_blank">
                                    <img class="card-img transition-zoom-hover"
                                        src="{{ asset('front/assets/images/twitter.gif') }}"
                                        alt="Girl in a jacket" width="250" height="80">
                                </a>
                            </div>
--}}

                        <div class="mb-0">
                            <div class="mb-3">

                                {{-- <div class="position-relative bg-primary overflow-hidden">
                                    <div class=" text-left position-relative">
                                        <h3 class="container text-white text-center font-weight-semi-bold ">WEB TV </h3>
                                    </div>
                                    <!-- SVG Shapes -->
                                    <figure class="mb-n1">
                                        <svg class="position-absolute top-0 right-0 bottom-0 h-100"
                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920"
                                            height="100%">
                                            <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                                        </svg>
                                    </figure>
                                    <!-- End SVG Shapes -->
                                </div>
 --}}

                                {{-- <div class=" js-slick-carousel slick" data-hs-slick-carousel-options='{
                                    "fade": true,
                                    "autoplay": true,
                                    "autoplaySpeed": 7000,
                                    "infinite": true,
                                    "responsive": [{
                                    "breakpoint": 768,
                                    "settings": {
                                        "arrows": false
                                    }
                                    }]
                                }'>
                                    @foreach($youtube as $yt)
                                        <div class="embed-responsive embed-responsive-21by9 js-slide mb-5">
                                            <iframe src="{{ $yt->link }}" title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </div> --}}



                        {{-- <div class="mb-5">
                            <div class="mb-3">

                                <div class="position-relative bg-primary overflow-hidden">
                                    <div class=" text-left position-relative">
                                        <h3 class="container text-white text-center font-weight-semi-bold ">TWITTER</h3>
                                    </div>
                                    <!-- SVG Shapes -->
                                    <figure class="mb-n1">
                                        <svg class="position-absolute top-0 right-0 bottom-0 h-100"
                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920"
                                            height="100%">
                                            <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                                        </svg>
                                    </figure>
                                    <!-- End SVG Shapes -->
                                </div>


                                <div style="overflow: auto; height:200px;">
                                    <a class="twitter-timeline" href="https://twitter.com/diskominfo_wsb"></a>
                                </div>

                            </div>
                        </div> --}}



                        <div class="mb-5">
                            {{-- <div class="mb-3">

                                <div class="position-relative bg-primary overflow-hidden">
                                    <div class=" text-left position-relative">
                                        <h3 class="container text-white text-center font-weight-semi-bold ">FACEBOOK
                                        </h3>
                                    </div>
                                    <!-- SVG Shapes -->
                                    <figure class="mb-n1">
                                        <svg class="position-absolute top-0 right-0 bottom-0 h-100"
                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920"
                                            height="100%">
                                            <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                                        </svg>
                                    </figure>
                                    <!-- End SVG Shapes -->
                                </div> --}}

                                {{-- <iframe
                                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdiskominfo.wsb&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1681253631890456"
                                    width="255" height="250" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                </iframe> --}}

                                <!-- <div class="fb-page"
            data-href="https://www.facebook.com/diskominfo.wsb"
          data-tabs="timeline"
              data-height="250"

              style="overflow: auto; height:250px;">
          </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Pagination -->
            <!-- End Pagination -->
        </div>
        <!-- End Blogs Section -->

        <div class="text-center mb-3">
            <span class="divider divider-text">INFO GRAFIS</span>
        </div>




        <div class="container space-0 space-lg-0 ">
            <div id="fancyboxGallery" class="js-fancybox" data-hs-fancybox-options='{
             "selector": "#fancyboxGallery .js-fancybox-item"
           }'>
                <div class="row">
                    @foreach($infografis as $grafis)
                        <div class="col-sm-6 col-md-3">
                            <!-- Card Info -->
                            <div class="card" style="max-width: 18rem; max-height: 25rem;">
                                <a class="js-fancybox-item d-block" href="javascript:;"
                                    data-src="{{ asset('uploads/'.$grafis->file_name??'') }}"
                                    data-caption="{{ $grafis->judul }}">
                                    <img style="height: 230px;" class="img-fluid img-thumbnail rounded mx-auto d-block transition-zoom-hover"
                                        src="{{ asset('uploads/'.$grafis->file_name??'') }}"
                                        alt="Image Description">
                                </a>
                                <div class="card-body">
                                    <h5><a>{{ $grafis->judul }}</a></h5>
                                </div>
                            </div>
                            <!-- End Card Info -->
                        </div>

                    @endforeach
                    <div class="container text-right mb-2 mt-3">
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('infografis.detail') }}">Lihat Selengkapnya <i
                                class="fas fa-angle-right fa-sm ml-1"></i></a>
                    </div>

                </div>

            </div>
        </div>


        <div class="text-center mb-3">
            <span class="divider divider-text">INFO HOAX</span>
        </div>

        <div class="container space-0 space-lg-0  ">
            <div id="fancyboxGallery" class="js-fancybox" data-hs-fancybox-options='{
             "selector": "#fancyboxGallery .js-fancybox-item"
           }'>
                <div class="row">

                    @foreach($infohoax as $hoax)
                        <div class="col-sm-6 col-md-3 ">
                            <!-- Card Info -->
                            <div class="card" style="max-width: 18rem; max-height: 25rem;">
                                <a href="/detail/{{ $hoax->id_posting }}">
                                    <img style="height: 230px;" class="img-fluid img-thumbnail rounded mx-auto d-block transition-zoom-hover"
                                        src="{{ asset('uploads/'.$hoax->gambarMuka->file_name??'') }}"
                                        alt="Image Description">
                                </a>
                                <div class="card-body">
                                    <h5><a href="/detail/{{ $hoax->id_posting }}"
                                            class="card-text">{{ $hoax->judul_posting }}</a></h5>
                                </div>
                            </div>
                            <!-- End Card Info -->
                        </div>

                    @endforeach

                    <div class="container text-right mb-2 mt-3">
                        <a class="btn btn-primary btn-sm mb-2" href="{{ route('infohoax.daftar') }}">Lihat
                            Selengkapnya <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                    </div>


                </div>
            </div>
        </div>

    </main>
    <!-- ========== END MAIN ========== -->
    @endsection

    @push('css')
        <style>
            .no-border {
                border: 0;
                box-shadow: none;
                /* You may want to include this as bootstrap applies these styles too */
            }

            .topcorner{
   position:absolute;
   top:0;
   right:0;
  }

.ignielPelangi {
    background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
    background-size: 500% 500%;
    -webkit-animation: ignielGradient 15s ease infinite;
    -moz-animation: ignielGradient 15s ease infinite;
    animation: ignielGradient 15s ease infinite;
}
@-webkit-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}


label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}

}


        </style>
    @endpush

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
        <script src="//platform.twitter.com/widgets.js" charset="utf-8" async></script>
        <script>
            function myFunction() {
                var elmnt = document.getElementById("pagenya");
                elmnt.scrollIntoView();
            }

        </script>

        <script>
            $(document).ready(function () {
                if (window.location.hash == "#moreInfo") {
                    $('html, body').animate({
                        scrollTop: $("#moreInfo").offset().top
                    }, 1000);
                }
            });

        </script>
        </script>
    @endpush
