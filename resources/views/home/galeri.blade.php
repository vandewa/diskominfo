
@section('title', 'Dinas Kominfo Wonosobo | Galeri')
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
    <div class="container space-top-3 space-top-lg-3 space-bottom-2">
     <div class="row">
        <div class="col-lg-12">
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
           }'>\

           @foreach($galeri as $galerinya)
        <!-- Item -->
        <div class="cbp-item rounded-lg branding mb-2">
          <a class="cbp-caption" href="{{ asset ('/uploads') }}/{{ $galerinya->file_name??'' }}" target="_blank">
            <div class="cbp-caption-defaultWrap mb-5">
              <img class="rounded-lg" src="{{ asset ('uploads') }}/{{ $galerinya->file_name??'' }}" alt="Image Description" style="height:200px;">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="d-flex justify-content-end flex-column h-100 p-4">
                <span class="d-block h4 text-white mb-0">{{$galerinya->keterangan}}</span>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->
        @endforeach
        </div>      
      </div>

    
      </div>
        {{ $galeri->links() }}
        
    </div>
    <div>

    
    
       
  </main>
  <!-- ========== END MAIN ========== -->
@endsection
