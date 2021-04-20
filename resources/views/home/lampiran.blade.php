<!DOCTYPE html>
<html lang="en">
<head>

  <meta property="og:url" content="http://localhost:8080">  
  <meta property="og:type" content="website">
  <meta property="og:title" content="Front">
  <meta property="og:description" content="Your description">

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ url('front/assets/images/pemda.ico')}}">
   <!-- Title -->
   <title>@yield('title')</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link href="{{ url ('limitless/Template/global_assets/css/icons/icomoon/styles.css ')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/aos/dist/aos.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css"> -->

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ url('front/assets/css/theme.min.css')}}">
</head>
<body>
<script src="//platform.twitter.com/widgets.js" charset="utf-8" async></script>
<script>
    window.fbAsyncInit = function () {
      FB.init({
        appId: '211814435920978',
        xfbml: true,
        version: 'v2.8'
      });
    };

    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  


  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
          data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
 
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a href="{{ url('/') }}" aria-label="Front">
            <img style="margin-top:4px; width:90px;" src="{{ url('front/assets/images/pemda.png')}}" >
            <img style="margin-top:4px; width:68px;" src="{{ url('front/assets/images/kominfo.png')}}" >
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse">
            <div class="navbar-body header-abs-top-inner">
              <ul class="navbar-nav">

              <!-- Profil -->
              <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" style="color:blue">Beranda</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Profil -->


                <!-- Profil -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/profil" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" style="color:blue">Profil</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Profil -->

                <!-- Visi Misi -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/visimisi" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu"style="color:blue">Visi & Misi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Visi Misi -->

                    <!-- Struktur -->
                    <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/struktur" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" style="color:blue">Struktur Organisasi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Struktur -->

                <!-- Tupoksi -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/tupoksi" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" style="color:blue">Tupoksi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Tupoksi -->

                 <!-- Tupoksi -->
                 <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/lampiran" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" style="color:blue">Lampiran</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Tupoksi -->

                  <!-- Buku Tamu -->
                 <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/hubungikami" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu"style="color:blue">Hubungi Kami</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Tamu -->

                <!-- Blog -->
                <!-- <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle active" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a> -->

                  <!-- Blog - Submenu -->
                  <!-- <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                    <a class="dropdown-item active" href="front/blog-journal.html">Journal</a>
                    <a class="dropdown-item " href="front/blog-metro.html">Metro</a>
                    <a class="dropdown-item " href="front/blog-newsroom.html">Newsroom</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="front/blog-profile.html">Blog Profile</a>
                    <a class="dropdown-item " href="front/blog-single-article.html">Single Article</a>
                  </div> -->
                  <!-- End Submenu -->
                <!-- </li> -->
                <!-- End Blog -->

               <!-- Docs -->
               <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "260px"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false"style="color:blue">Galeri</a>

                  <!-- Docs - Submenu -->
                  <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                    <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="{{ url('front/documentation/index.html')}}">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="{{ url('front/assets/svg/icons/icon-2.svg')}}" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">
                              Documentation
                              <span class="badge badge-primary badge-pill ml-1">v3.3</span>
                            </span>
                            <small class="navbar-promo-text">Development guides</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                    <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="{{ url('front/snippets/index.html')}}">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="{{url('front/assets/svg/icons/icon-1.svg')}}" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">Snippets</span>
                            <small class="navbar-promo-text">Start building</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                    <div class="navbar-promo-footer">
                      <!-- List -->
                      <div class="row no-gutters">
                        <div class="col-6">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Check what's new</span>
                            <a class="navbar-promo-footer-text" href="{{url('front/documentation/changelog.html')}}"> Changelog</a>
                          </div>
                        </div>
                        <div class="col-6 navbar-promo-footer-ver-divider">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Have a question?</span>
                            <a class="navbar-promo-footer-text" href="http://htmlstream.com/contact-us"> Contact us</a>
                          </div>
                        </div>
                      </div>
                      <!-- End List -->
                    </div>
                  </div>
                  <!-- End Docs - Submenu -->
                </li>
                <!-- End Docs -->
                 <!-- Account Login -->
             <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary" href="/login" >
                <i class="fas fa-user-circle fa-lg" style="color:blue"></i>
                </a>
              </div>
            </li>
            <!-- End Account Login -->
              </ul>
            </div>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
   
    
      <div class="w-100 sm-6 mx-lg-auto">
      <h3 class="mb-4 mt-10"><center>Kumpulan file-file lampiran</center></h3>
      <table class="table-light table-striped yajra-datatable w-100" >
        <thead>
            <tr>
                    <th>No</th>
                    <th>Lampiran</th>
                    <!-- <th>File</th> -->
                    <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
        <div class="mb-4">
         
        </div>
      </div>
    </div>

    </main>

  <!-- ========== FOOTER ========== -->
  <footer class="bg-primary">
    <div class="container">
      <div class="space-top-2 space-bottom-lg-1">
        <div class="row justify-content-lg-between">

        <div class="col-12 col-md-6 col-lg">
        <div class="mb-4">
            <h5 class="text-white">Statistik Pengunjung</h5>
            </div>
            <!-- End Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link media">
                    <span class="media">
                      <span class="icon-stats-bars2 mt-1 mr-2"></span>
                      <span class="media-body">
                      Total Pembaca : {{ $key }}
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media">
                    <span class="media">
                      <span class="icon-stats-bars2 mt-1 mr-2"></span>
                      <span class="media-body">
                      Total Pengunjung :
                      </span>
                    </span>
                </a>
              </li>
            </ul>

          </div>

          <div class="col-12 col-md-6 col-lg mb-5 mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
            <h5 class="text-white">Hubungi Kami</h5>
            </div>
            <!-- End Logo -->

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link media">
                    <span class="media">
                      <span class="icon-office mt-1 mr-2"></span>
                      <span class="media-body">
                      Jl. Sabuk Alu No. 2A
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media" href="tel:(0286) 325112">
                    <span class="media">
                      <span class="icon-phone mt-1 mr-2"></span>
                      <span class="media-body">
                      (0286) 325112
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media" href="mailto:diskominfo@wonosobokab.go.id">
                    <span class="media">
                      <span class="icon-mail5 mt-1 mr-2"></span>
                      <span class="media-body">
                      diskominfo@wonosobokab.go.id
                      </span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          

          <div class="col-12 col-md-6 col-lg mb-5 mb-lg-0">
          <div class="mb-4">
            <h5 class="text-white">Lokasi Kantor</h5>
            </div>
            <!-- Nav Link -->
            <iframe frameborder="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.06784745028!2d109.90367091432174!3d-7.356778574425257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1e023aaf2df%3A0x3fa1aea0b0ca3abc!2sDINAS%20KOMINFO!5e1!3m2!1sid!2sid!4v1616939396651!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- End Nav Link -->
         
          </div>
        </div>
      </div>

      <hr class="opacity-xs my-0">

      <div class="space-1">
        <!-- Copyright -->

        <div class="w-md-75 text-lg-center mx-lg-auto">
          <p class="text-white opacity-sm small">&copy; Diskominfo Wonosobo 2012-{{ Carbon\Carbon::now()->isoFormat('Y') }}.</p>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory  -->
  <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ url ('front/assets/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/hs-unfold/dist/hs-unfold.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/appear/dist/appear.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/aos/dist/aos.js')}}"></script>

  <!-- JS Front -->
  <script src="{{ url ('front/assets/js/theme.min.js')}}"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('lampiran.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'keterangan', },
                    // {data: 'nama_lampiran', },
					{
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
            },
        ]
    });
    
  });
</script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {

      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });


      // INITIALIZATION OF SLICK CAROUSEL
      // =======================================================
      $('#heroSliderNav').on('init', function (event, slick) {
        $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function() {
          $(this).css({
            transitionDuration: (slick.options.autoplaySpeed - slick.options.speed) + 'ms'
          });
        });

        setTimeout(function() {
          $(slick.$slider).addClass('slick-dots-ready');
        });
      });

      $('#heroSliderNav').one('beforeChange', function (event, slick) {
        $(slick.$slider).find('.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(function() {
          $(this).css({
            transitionDuration: (slick.options.autoplaySpeed + slick.options.speed) + 'ms'
          });
        });
      });


      // INITIALIZATION OF SLICK CAROUSEL
      // =======================================================
      $('.js-slick-carousel').each(function() {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });

      $(window).on('resize', function() {
        $('#heroSliderNav').slick('setPosition');
      });


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      $('.js-sticky-block').each(function () {
        var stickyBlock = new HSStickyBlock($(this)).init();
      });

       // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      var typed = $.HSCore.components.HSTyped.init(".js-text-animation");

      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });


  </script>

  <!-- IE Support -->
  <script>
    // if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ url ('front/assets/vendor/babel-polyfill/dist/polyfill.js')}}"><\/script>');
  </script>
</body>
</html>
