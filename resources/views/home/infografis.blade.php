
@section('title', 'Dinas Kominfo Wonosobo | Infografis')
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
      <div class="row">
        <div class="col-lg-12">
        <!-- Content -->
            @php
                $angka = 1;
            @endphp
            <div class="row">
                @foreach($infografis as $grafis)
                <div class="col-sm-6 col-md-3 mb-3">
                    <div id="fancyboxGallery{{ $angka }}" class="js-fancybox" data-hs-fancybox-options='{
                    "selector": "#fancyboxGallery{{ $angka }} .js-fancybox-item"}'>
                        <div class="card" style="max-width: 18rem; max-height: 25rem;">
                         
                            <a class="js-fancybox-item media-viewer mb-3 d-block" href="javascript:;"
                                data-src="{{ asset($grafis->gambarMuka->file_name??'') }}"
                                data-caption="{{ $grafis->judul }}">
                                <img  style="height:230px;object-fit:cover" class="img-fluid img-thumbnail rounded mx-auto d-block transition-zoom-hover" src="{{ asset($grafis->gambarMuka->file_name??'') }}" alt="Image Description">
                            </a>
                             
                            @foreach($grafis->attachments as $picture)
                            @if ($loop->first)
                            @else
                            <img class="js-fancybox-item d-none" alt="Image Description"
                                data-src="{{ asset($picture->file_name??'') }}"
                                data-caption="{{ $grafis->judul }}">
                            @endif
                            @endforeach
                            <div class="card-body">
                                <h5><a>{{ $grafis->judul }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @php ($angka++) @endphp
                @endforeach
            </div>
        </div>       
      </div>
     <div class="d-flex justify-content-center mt-3">
    {{ $infografis->links() }}
    </div>
  </div>       
</main>
  <!-- ========== END MAIN ========== -->
@endsection

@push('css')
<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   right:0;
  }
</style>
@endpush

@push('js')
<script>
  <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</script>
@endpush
