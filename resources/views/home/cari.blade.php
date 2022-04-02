
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
<i class="fas fa-user-circle fa-lg" style="color:grey"></i>
@endsection

 <!-- ========== MAIN ========== -->
 <main id="content" role="main">
    <div class="container space-2 space-lg-2 mt-5">
        <h3>Hasil Pencarian : "{{ $cari }}" ({{ $jumlah}}) found.</h3> 
      <div class="row justify-content-lg-between mt-4">
        <div class="col-lg-8">
          @foreach ($posting as $post)
          <article class="row mb-7" data-aos="zoom-out-left">
            <div class="col-md-5">
              <a href="/detail/{{$post->slug}}">
                <img class="card-img transition-zoom-hover" src="{{ asset($post->gambarMuka->path.$post->gambarMuka->file_name??'') }}" alt="Image Description" style="height:100%">
              </a>
            </div>
            <div class="col-md-7">
              <div class="card-body d-flex flex-column h-100 px-0">
                  <span class="d-block mb-2">
                    <a class="font-weight-bold" href="/kategori/{{$post->kategori->slug}}">{{ $post->kategori->nama_kategori }}</a>
                  </span>
                    <h3><a class="text-inherit" href="/detail/{{$post->slug}}">{{ $post->judul_posting }}</a></h3>
                    <p>{{ $post->keterangan }}</p>
                <div class="media align-items-center mt-auto">
                  <a class="avatar avatar-sm avatar-circle mt-2">
                    <img class="avatar-img" src="{{ asset('uploads/'.$post->nama->profile_photo_path) }}" alt="Image Description" style="max-width: 80%; height: 80%;">
                  </a>
                  <div class="media-body">
                    <span class="text-dark">
                       <a class="d-inline-block text-inherit font-weight-bold small" href="/uploadby/{{$post->created_by}}">{{ $post->nama->name }}</a>
                    </span>
                    <small class="d-block">{{  Carbon\Carbon::parse($post->created_at)->isoFormat('LLLL') }} WIB </small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          @endforeach

          {{ $posting->links() }}
        
          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint">
          </div>
        </div>

        <div class="col-lg-3">
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
                <div class="mb-3">
                  <h3>Cari Berita</h3>
                </div>
                <form class="input-group input-group-sm input-group-merge input-group-flush mb-3 " action="/search" method="get">
                  <input name="q" type="search" class="form-control" placeholder="Masukkan kata kunci" aria-label="Search articles" aria-describedby="searchLabel">
                  <div class="input-group-append">
                    <div class="input-group-text" id="searchLabel">
                      <button type="submit" class="no-border btn-transparent"><i class="fas fa-search"></i></button>
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

                @foreach($posting_samping as $populer)
                  <article class="mb-5 mt-3" data-aos="zoom-out-right">
                    <div class="media align-items-center text-inherit">
                      <div class="avatar avatar-lg mr-3">
                        <a href="/detail/{{ $populer->slug }}">
                            @if (!empty($populer->gambarMuka->path) || !empty($populer->gambarMuka->file_name))
                            <img class="card-img transition-zoom-hover"
                                  src="{{ asset($populer->gambarMuka->path.$populer->gambarMuka->file_name??'') }}"
                                  alt="Image Description" style="height:100%;width:100%;object-fit:cover"> 
                                    @else
                                    <img class="card-img transition-zoom-hover"
                                    src="{{ asset('uploads/diskominfowonosobo.jpg') }}"
                                    alt="Image Description" style="height:100%;width:100%;object-fit:cover"> 
                                    @endif
                          </a>
                        </div>
                        <div class="media-body">
                            <h4 class="h6 mb-0"><a class="text-inherit"
                                    href="/detail/{{ $populer->slug }}">{{ $populer->judul_posting }}</a>
                            </h4>
                        </div>
                      </div>
                  </article>
                @endforeach
            </div>
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
    box-shadow: none; /* You may want to include this as bootstrap applies these styles too */
}
</style>
@endpush

@push('js')
<script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</script>
@endpush


