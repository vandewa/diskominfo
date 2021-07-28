<!DOCTYPE html>
<html lang="en">
<head>

  <meta property="og:url" content="http://localhost:8080">  
  <meta property="og:type" content="website">
  <meta property="og:title" content="Dinas Kominfo Wonosobo">
  <meta property="og:description" content="Website Resmi Dinas Komunikasi dan Informatika Kabupaten Wonosobo">

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
  <link rel="stylesheet" href="{{ url ('front/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ url ('front/assets/vendor/leaflet/dist/leaflet.css')}}">
  <link rel="stylesheet" href="{{ url ('front/assets/vendor/slick-carousel/slick/slick.css')}}">


  <link rel="stylesheet" href="{{ url('front/assets/vendor/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/aos/dist/aos.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link rel="stylesheet" href="{{ url('front/assets/vendor/ion-rangeslider/css/ion.rangeSlider.css')}}">

  @stack('css')

  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ url('front/assets/css/theme.min.css')}}">
 <script src="https://www.google.com/recaptcha/api.js"></script>
 <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

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

  <!-- ========== HEADER ========== -->
  @yield('kondisi')
 
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a href="{{ url('/') }}" aria-label="Front">
            <img style="margin-top:4px; width:80px;" src="{{ url('front/assets/images/pemda.png')}}" >
            <img style="margin-top:4px; width:58px;" src="{{ url('front/assets/images/kominfo.png')}}" >
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle collapsed" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"></path>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"></path>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
        <div id="navBar" class="navbar-collapse collapse" style="">
            <div class="navbar-body header-abs-top-inner">
              <ul class="navbar-nav">


                   <!-- Profil -->
              <li class="hs-has-sub-menu navbar-nav-item">
              
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('index')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Beranda</a>
                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Profil -->


              <!-- Pages -->
                <li class="hs-has-sub-menu navbar-nav-item">

                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Profil</a>
                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                    <!-- Company -->
                     
                       @foreach($menu_categories as $category)
                      <div class="hs-has-sub-menu"> 
                     <a 
                     @if(count($category->childs))href="#"
                     @else href="/kominfo/{{$category->id}}"
                     @endif

                      id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($category->childs))dropdown-item-toggle @endif ">{{ $category->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($category->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                      @if(count($category->childs))
                      @foreach($category->childs as $child)
                      <div class="hs-has-sub-menu">
                      <a
                       @if(count($child->childs))href="#"
                     @else href="/kominfo/{{$child->id}}"
                     @endif
                      
                       id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child->childs))dropdown-item-toggle @endif" >{{ $child->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($child->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany">
                      @if(count($child->childs))
                      @foreach($child->childs as $child1)
                      <a 
                      @if(count($child1->childs))href="#"
                     @else href="/kominfo/{{$child1->id}}"
                     @endif
                       id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child1->childs))dropdown-item-toggle @endif " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">{{ $child1->nama }}</a>
                      @endforeach
                      @endif
                      </div>
                      </div> 
                      @endforeach 
                      @endif
                      </div>
                    </div>
                    <!-- Company -->
                     @endforeach

                      <a class="dropdown-item " href="{{ route('galeri')}}">Galeri</a>
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                 <!-- Pages -->
                <li class="hs-has-sub-menu navbar-nav-item">

                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>PPID</a>
                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                    <!-- Company -->
                    
                       @foreach($ppid as $ppids)
                      <div class="hs-has-sub-menu">
                      <a href="{{ url($ppids->url??'#') }}" @if($ppids->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($ppids->childs))dropdown-item-toggle @endif">{{ $ppids->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($ppids->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                      @if(count($ppids->childs))
                      @foreach($ppids->childs as $child)
                      <div class="hs-has-sub-menu">
                      <a href="{{ url($child->url??'#') }}" @if($child->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child->childs))dropdown-item-toggle @endif" >{{ $child->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($child->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany">
                      @if(count($child->childs))
                      @foreach($child->childs as $child1)
                      <a href="{{ url($child1->url??'#') }}" @if($child1->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child1->childs))dropdown-item-toggle @endif " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">{{ $child1->nama }}</a>
                      @endforeach
                      @endif
                      </div>
                      </div> 
                      @endforeach 
                      @endif
                      </div>
                    </div>
                    <!-- Company -->
                     @endforeach
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                 <!-- Pages -->
                <li class="hs-has-sub-menu navbar-nav-item">

                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Transparansi</a>
                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                    <!-- Company -->
                    
                       @foreach($menu_categoriess as $category)
                      <div class="hs-has-sub-menu">
                      <a href="{{ url($category->url??'#') }}" @if($category->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($category->childs))dropdown-item-toggle @endif">{{ $category->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($category->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                      @if(count($category->childs))
                      @foreach($category->childs as $child)
                      <div class="hs-has-sub-menu">
                      <a href="{{ url($child->url??'#') }}" @if($child->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child->childs))dropdown-item-toggle @endif" >{{ $child->nama }}</a>
                      <div id="navSubmenuPagesCompany" class="hs-sub-menu @if(count($child->childs)) dropdown-menu @endif" aria-labelledby="navLinkPagesCompany">
                      @if(count($child->childs))
                      @foreach($child->childs as $child1)
                      <a href="{{ url($child1->url??'#') }}" @if($child1->lampiran == 'y') target="_blank" @endif id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item @if(count($child1->childs))dropdown-item-toggle @endif " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">{{ $child1->nama }}</a>
                      @endforeach
                      @endif
                      </div>
                      </div> 
                      @endforeach 
                      @endif
                      </div>
                    </div>
                    <!-- Company -->
                     @endforeach
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                <!-- default supaya bisa dropdown -->
                  <!-- <div class="hs-has-sub-menu">
                  <a id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">api</a>
                  <div id="navSubmenuPagesCompany" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                  <a id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">apaa</a>
                  </div>
                  </div> -->

         

                <!-- Profil -->
                <!-- <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('profil')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Profil</a> -->
                  <!-- Pages - Submenu -->
                  <!-- <div class="hs-sub-menu ">
                  </div> -->
                  <!-- End Pages - Submenu -->
                <!-- </li> -->
                <!-- End Profil -->

                <!-- Visi Misi -->
                <!-- <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('visimisi')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Visi & Misi</a> -->
                  <!-- Pages - Submenu -->
                  <!-- <div class="hs-sub-menu ">
                  </div> -->
                  <!-- End Pages - Submenu -->
                <!-- </li> -->
                <!-- End Visi Misi -->

                <!-- Tupoksi -->
                <!-- <li class="hs-has-sub-menu navbar-nav-item"> -->
                  <!-- <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('tupoksi')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Tupoksi</a> -->
                  <!-- Pages - Submenu -->
                  <!-- <div class="hs-sub-menu ">
                  </div> -->
                  <!-- End Pages - Submenu -->
                <!-- </li> -->
                <!-- End Tupoksi -->

                  <!-- Blog -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu" @yield('warna')>Layanan</a>

                  <!-- Blog - Submenu -->
                  <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                    <a class="dropdown-item " href="{{ route('pengaduan')}}">Pengaduan Masyarakat</a>
                    <a class="dropdown-item " href="{{ route('pengajuan')}}">Pengajuan Informasi</a>
                    <a class="dropdown-item " href="{{ route('website.list')}}">Website Kelurahan</a>
                  </div>
                  <!-- End Submenu -->
                </li>
                <!-- End Blog -->

                <!-- Pengumuman -->
                 <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('pengumuman')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Pengumuman</a>
                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pengumuman -->

                 <!-- Lampiran -->
                 <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('lampiran')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Lampiran</a>
                  <!-- Pages - Submenu -->
                  <div class="hs-sub-menu ">
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Lampiran -->

               
                 <!-- Lampiran -->
                 <!-- <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="{{ route('lampiran')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Sitemap</a> -->
                  <!-- Pages - Submenu -->
                  <!-- <div class="hs-sub-menu ">
                  </div> -->
                  <!-- End Pages - Submenu -->
                <!-- </li> -->
                <!-- End Lampiran -->

                <!-- Buku Tamu -->
                 <!-- <li class="hs-has-sub-menu navbar-nav-item"> -->
                  <!-- <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold" href="" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu" @yield('warna')>Hubungi Kami</a> -->
                  <!-- Pages - Submenu -->
                  <!-- <div class="hs-sub-menu ">
                  </div> -->
                  <!-- End Pages - Submenu -->
                <!-- </li> -->
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
                <!-- <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "200px"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold" href="javascript:;" aria-haspopup="true" aria-expanded="false" @yield('warna')>Galeri</a> -->

                  <!-- Docs - Submenu -->
                  <!-- <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 250px;"> -->
                    <!-- Promo Item -->
                    <!-- <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="{{ route('galeri')}}">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="{{ url('front/assets/svg/icons/icon-2.svg')}}" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">
                              Documentation
                            </span>
                          </div>
                        </div>
                      </a>
                    </div> -->
                    <!-- End Promo Item -->
                  <!-- </div> -->
                  <!-- End Docs - Submenu -->
                <!-- </li> -->
                <!-- End Docs -->


                 <!-- Account Login -->
                 
             <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary" href="{{ route('login')}}" >
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

  <!-- ========== END HEADER ========== -->

 @yield('isi')

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
                      <span class="icon-stats-growth mt-1 mr-2"></span>
                      <span class="media-body">
                       Total Pengunjung
                      <div class="d-flex justify-content-left ml-3 mb-4">
                     <a href='https://www.stat-counter.org/'></a> 
                      <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/829214/t/5"></script>
                      </div>
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
                <a class="nav-link media" href="https://goo.gl/maps/RsvwzMW5eVoMygx69" target="_blank">
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
            <h5 class="text-white">Link Terkait</h5>
            </div>
            
              <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                <li class="nav-item">
                  <a class="nav-link media" href="https://dashboard-smartcity.wonosobokab.go.id" target="_blank">
                      <span class="media">
                        <span class="icon-seven-segment-1 mt-1 mr-2"></span>
                        <span class="media-body">
                      Dashboard Smartcity
                        </span>
                      </span>
                  </a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link media" href="https://website.wonosobokab.go.id/"  target="_blank">
                      <span class="media">
                        <span class="icon-seven-segment-2 mt-1 mr-2"></span>
                        <span class="media-body">
                      Website Wonosobo
                        </span>
                      </span>
                  </a>
                  <li class="nav-item">
                  <a class="nav-link media" href="https://satudata.wonosobokab.go.id/"  target="_blank">
                      <span class="media">
                        <span class="icon-seven-segment-3 mt-1 mr-2"></span>
                        <span class="media-body">
                     Satu Data Wonosobo
                        </span>
                      </span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link media" href="https://www.kominfo.go.id/"  target="_blank">
                      <span class="media">
                        <span class="icon-seven-segment-4 mt-1 mr-2"></span>
                        <span class="media-body">
                      Kementerian Komunikasi dan Informatika
                        </span>
                      </span>
                  </a>
                </li>
              </ul>
                </li>
                 
                

          </div>
        </div>
      </div>

      <hr class="opacity-xs my-0">

      <div class="space-1">
        <!-- Copyright -->

        <div class="w-md-75 text-lg-center mx-lg-auto">
          <p class="text-white opacity-sm small">&copy; Diskominfo Wonosobo 2017-{{ Carbon\Carbon::now()->isoFormat('Y') }}.</p>
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
  <script src="{{ url ('front/assets/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <script src="{{ url ('front/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/leaflet/dist/leaflet.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/slick-carousel/slick/slick.js')}}"></script>


  <!-- ====validator==== -->


  <!-- JS Front -->
  <script src="{{ url ('front/assets/js/theme.min.js')}}"></script>


  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {

      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();

       // INITIALIZATION OF FANCYBOX
      // =======================================================
      $('.js-fancybox').each(function () {
        var fancybox = $.HSCore.components.HSFancyBox.init($(this));
      });


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

       // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });

       // INITIALIZATION OF CUBEPORTFOLIO
      // =======================================================
      $('.cbp').each(function () {
        var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
          layoutMode: 'grid',
          filters: '#filterControls',
          displayTypeSpeed: 0
        });
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
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ asset ('front/assets/vendor/babel-polyfill/dist/polyfill.js')}}"><\/script>');
  </script>
  @stack('js')

</body>
</html>
