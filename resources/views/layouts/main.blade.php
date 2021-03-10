<!DOCTYPE html>
<html lang="en">
<head>


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
  <link rel="stylesheet" href="{{ url('front/assets/vendor/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/slick-carousel/slick/slick.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ url('front/assets/css/theme.min.css')}}">
</head>
<body>


  <!-- ========== HEADER ========== -->
  @yield('kondisi')
 
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
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Beranda</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Profil -->


                <!-- Profil -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/profil" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Profil</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Profil -->

                <!-- Visi Misi -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/visimisi" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Visi & Misi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Visi Misi -->

                    <!-- Struktur -->
                    <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/struktur" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Struktur Organisasi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Struktur -->

                <!-- Tupoksi -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="/tupoksi" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Tupoksi</a>

                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">

                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Tupoksi -->

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
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false">Galeri</a>

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
                  @yield('kondisi2')
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

 @yield('isi')

  <!-- ========== FOOTER ========== -->
  <footer class="bg-primary">
    <div class="container">
      <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
          <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
              <a href="index.html" aria-label="Front">
                <img class="brand" src="{{ url ('front/assets/svg/logos/logo-white.svg')}}" alt="Logo">
              </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link media" href="javascript:;">
                    <span class="media">
                      <span class="fas fa-location-arrow mt-1 mr-2"></span>
                      <span class="media-body">
                        153 Williamson Plaza, Maggieberg
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media" href="tel:1-062-109-9222">
                    <span class="media">
                      <span class="fas fa-phone-alt mt-1 mr-2"></span>
                      <span class="media-body">
                        +1 (062) 109-9222
                      </span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white"></h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#"></a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <span class="badge badge-primary ml-1">We're hiring</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#"></a></li>
              <li class="nav-item"><a class="nav-link" href="#"></a></li>
              <li class="nav-item"><a class="nav-link" href="#"></a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white">Features</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">

          </div>

          <div class="col-6 col-md-3 col-lg">
          </div>
        </div>
      </div>

      <hr class="opacity-xs my-0">

      <div class="space-1">
        <div class="row align-items-md-center mb-7">
          <div class="col-md-6 mb-4 mb-md-0">
          </div>

          <div class="col-md-6 text-md-right">
            <ul class="list-inline mb-0">
              <!-- Social Networks -->
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <!-- End Social Networks -->
            </ul>
          </div>
        </div>

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


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ url ('front/assets/vendor/babel-polyfill/dist/polyfill.js')}}"><\/script>');
  </script>
</body>
</html>
