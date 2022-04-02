@section('title', 'Dinas Kominfo Wonosobo')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header"
    class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
    data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
    @endsection

    @section('kondisi2')
    <i class="fas fa-user-circle fa-lg" style="color:black"></i>
    @endsection

    <!-- ========== MAIN ========== -->
    <main id="content" role="main" class="ignielPelangi">
        <!-- Contact Form Section -->
        <div class="container space-top-3 space-bottom-2">

            <!-- Nav -->
            <div class="d-flex justify-content-center text-center ">
                <ul class="nav nav-pills mb-7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  @if(request('q') == '') active @endif "
                            id="pills-one-code-features-example2-tab" data-toggle="pill"
                            href="#pills-one-code-features-example2" role="tab"
                            aria-controls="pills-one-code-features-example2" aria-selected="true">Daftar Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request('q') != '') active @endif"
                            id="pills-two-code-features-example2-tab" data-toggle="pill"
                            href="#pills-two-code-features-example2" role="tab"
                            aria-controls="pills-two-code-features-example2" aria-selected="false">Lacak Nomor Tiket</a>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content">
                <div class="tab-pane fade @if(request('q') == '') show active @endif"
                    id="pills-one-code-features-example2" role="tabpanel"
                    aria-labelledby="pills-one-code-features-example2-tab">

                    <div class="col-md-12 d-flex justify-content-center mb-5">
                        <center><h2>DAFTAR LAYANAN DISKOMINFO</h2></center>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 mb-3 ">
                            {{-- <a href="{{ route('perijinan:akses.dc.create') }}"> --}}
                            <a href="{{ route('perijinan:media.publikasi.create') }}">
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/1.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3 ">
                            {{-- <a href="{{ route('perijinan:permintaan.col.create') }}"> --}}
                             <a href="{{ route('perijinan:liputan.create') }}">
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/2.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3 ">
                            {{-- <a href="{{ route('perijinan:kunjungan.dc.create') }}"> --}}
                                <a href="{{ route('perijinan:informasi.publik.create') }}">
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/3.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3 ">
                            {{-- <a href="{{ route('perijinan:layanan.server.create') }}"> --}}
                                <a href="{{ route('perijinan:pengajuan.keberatan.create') }}">
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/4.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:vps.baru.create') }}"> --}}
                                <a href="{{ route('perijinan:pinjam.tempat.create') }}">
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/5.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/6.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/7.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/8.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/9.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/10.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/11.png') }}">
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3">
                            {{-- <a href="{{ route('perijinan:perubahan.vps.create') }}"> --}}
                                <img class="card-img transition-zoom-hover"
                                    src="{{ asset('front/assets/images/layanan/12.png') }}">
                            </a>
                        </div>

                    </div>
                </div>

                <!-- TAB 2 -->
                <div class="tab-pane fade @if(request('q') != '') show active @endif"
                    id="pills-two-code-features-example2" role="tabpanel"
                    aria-labelledby="pills-two-code-features-example2-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 ">
                            <form class="input-group input-group-sm input-group-merge input-group-flush mb-3" action=""
                                method="get">

                                <input name="q" type="search" class="form-control" placeholder="Masukkan Nomor Tiket"
                                    aria-label="Search articles" aria-describedby="searchLabel">
                                <div class="input-group-append">
                                    <div class="input-group-text" id="searchLabel">
                                        <button type="submit" class="no-border btn-transparent"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                            <!-- Step -->
                            <ul class="step">
                                @if(request('q') != '')
                                    <li class="step-item">
                                        <div class="step-content-wrapper">
                                            <span class="step-icon"> <img class="card-img"
                                                    src="{{ asset('front/assets/images/dikirim.png') }}"></span>
                                            <div class="step-content">
                                                <h4>Pengajuan izin berhasil dikirim.</h4>
                                                <p class="step-text">{{ Carbon\Carbon::parse($data->created_at)->isoFormat('LLLL') }} WIB</p>
                                            </div>
                                        </div>
                                    </li>


                                        @if($data->approval_date == '' && $data->status_st == 'STATUS_ST_01' )
                                       <li class="step-item">
                                        <div class="step-content-wrapper">
                                            <span class="step-icon"><img class="card-img"
                                                    src="{{ asset('front/assets/images/menunggu.png') }}"></span>
                                            <div class="step-content">
                                                <h4>{{ $data->status->code_nm??'' }}</h4>
                                                <p class="step-text">
                                                     Sedang dalam tahap pengecekan oleh petugas Diskominfo Wonosobo
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endif

                                    @if($data->approval_date != '' && $data->status_st == 'STATUS_ST_01' || $data->approval_date != '' && $data->status_st == 'STATUS_ST_03' || $data->approval_date != '' && $data->status_st == 'STATUS_ST_02' )
                                    <li class="step-item">
                                        <div class="step-content-wrapper">
                                             @if($data->approval_date != '' && $data->status_st == 'STATUS_ST_01' ||  $data->approval_date != '' && $data->status_st == 'STATUS_ST_02')
                                            <span class="step-icon"><img class="card-img"
                                                    src="{{ asset('front/assets/images/disetujui.png') }}"></span>
                                            @endif
                                            @if($data->approval_date != '' && $data->status_st == 'STATUS_ST_03' )
                                            <span class="step-icon"><img class="card-img"
                                                    src="{{ asset('front/assets/images/ditolak.png') }}"></span>
                                            @endif
                                            <div class="step-content">
                                                <h4>{{ $data->status->code_nm??'' }}</h4>
                                                <p class="step-text">
                                                    @if($data->approval_date != '')
                                                        {{ Carbon\Carbon::parse($data->approval_date)->isoFormat('LLLL') }}
                                                        WIB        
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endif

                                    @if($data->approval_date != '' && $data->status_st == 'STATUS_ST_02' || $data->approval_date != '' && $data->status_st == 'STATUS_ST_03')
                                    <li class="step-item">
                                        <div class="step-content-wrapper">
                                            <span class="step-icon"><img class="card-img"
                                                    src="{{ asset('front/assets/images/selesai.png') }}"></span>
                                            <div class="step-content">
                                               
                                                        <h4>Selesai.</h4>
                                                    @else
                                                        -
                                                    @endif
                                               
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                            <!-- End Step -->
                        </div>
                    </div>
                </div>
                <!-- END TAB 2 -->
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Contact Form Section -->
    </main>
    <!-- ========== END MAIN ========== -->
    @endsection



    @push('js')
        <script>
        <script src = "{{ url ('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src = "{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
        <script src = "{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        </script>
        <script type="text/javascript">
            function sweetAlert() 
            {  


            // Swal.fire(
            // 'Berhasil!',
            // 'Permintaan berhasil dikirim',
            // 'success')
            // }

          Swal.fire({
            title: 'Berhasil!',
            text: 'Silahkan cek WhatsApp / Email untuk notifikasi berikutnya',
            imageWidth: 300,
            imageHeight: 239,
            imageUrl: 'front/assets/images/okk.gif',
            })
            }

            @if(session('status'))
            sweetAlert();
            @endif
        </script>
    @endpush
