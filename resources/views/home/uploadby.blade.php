
@section('title', 'Dinas Kominfo Wonosobo | Uploads By')
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
    <div class="container space-top-2 space-top-lg-2 space-bottom-2">
     <div class="row justify-content-lg-between">
        <div class="col-lg-8">
         
              <div class="d-flex justify-content-center">
                <div class="avatar avatar-circle">
                  <img class="avatar-img" src="{{ asset('uploads/'.$upload->nama->profile_photo_path) }}" alt="Image Description">
                </div>
                 <div class=" font-size-1 ml-3">
                  <span class="h4"> {{$upload->nama->name}}</span>
                  <span class="d-block text-muted"><b>{{ $jml_post }}</b> post</span>
                </div>
                 
              </div>
              <hr>
             
      
        
      <!-- Content -->
      <div class="cbp"
           data-hs-cbp-options='{
             "animationType": "quicksand",
             "caption": "zoom",
             "gapHorizontal": 40,
             "gapVertical": 40,
             "mediaQueries": [
               {"width": 1500, "cols": 4},
               {"width": 1100, "cols": 4},
               {"width": 800, "cols": 3},
               {"width": 480, "cols": 2},
               {"width": 380, "cols": 1}
             ]
           }'>

            

           @foreach($uploadby as $yangupload)
        <!-- Item -->
        <div class="cbp-item rounded-lg branding mb-2">
          <a class="cbp-caption" href="/detail/{{$yangupload->id_posting}}">
            <div class="cbp-caption-defaultWrap mb-5">
              <img class="rounded-lg" src="{{ asset ('uploads') }}/{{ $yangupload->gambarMuka->file_name??'' }}" alt="Image Description" style="height:300px;">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="d-flex justify-content-end flex-column h-100 p-4">
                <span class="d-block h3 text-white mb-0">{{$yangupload->judul_posting}}</span>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->
        @endforeach
        </div>      

        {{ $uploadby->links() }}
         <div id="stickyBlockEndPoint"></div>
      </div>

      
       <div class="col-lg-3">
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
            <div class="mb-7">
      
              <div class="mb-2">
                <h3 >Cari Berita</h3>
              </div>

            <form class="input-group input-group-sm input-group-merge input-group-flush mb-3" action="/search" method="get">
            
            <input name="q" type="search" class="form-control" placeholder="Masukkan kata kunci" aria-label="Search articles" aria-describedby="searchLabel">
            <div class="input-group-append">
              <div class="input-group-text" id="searchLabel">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </form>

              <div class="position-relative bg-primary overflow-hidden">
                <div class=" text-left position-relative">
                  <h3 class="container text-white text-center font-weight-semi-bold ">BERITA POPULER</h3>
                </div>
            <!-- SVG Shapes -->
                <figure class="mb-n1">
                  <svg class="position-absolute top-0 right-0 bottom-0 h-100" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="100%">
                    <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z"/>
                  </svg>
                </figure>
                <!-- End SVG Shapes -->
              </div>

              @foreach($populers as $populernya)
              <!-- Blog -->
              <article class="mb-5 mt-3" data-aos="zoom-out-right">
                <div class="media align-items-center text-inherit">
                  <div class="avatar avatar-lg mr-3">
                  <a href="/detail/{{$yangupload->id_posting}}">
                    <img class="avatar-img transition-zoom-hover" src="{{ asset('uploads/'.$populernya->gambarMuka->file_name) }}" alt="Image Description" >
                  </a>
                  </div>
                  <div class="media-body">
                    <h4 class="h6 mb-0"><a class="text-inherit" href="/detail/{{$populernya->id_posting}}">{{ $populernya->judul_posting }}</a></h4>
                  </div>
                </div>
              </article>
              <!-- End Blog -->
             @endforeach
            </div>



            <div class="mb-7">
              <div class="mb-3">
                <h3></h3>
              </div>
            </div>
          </div>
        </div>
      </div>



        
        
    </div>
    <div>

    
    
       
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
