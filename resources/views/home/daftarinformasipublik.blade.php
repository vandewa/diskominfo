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
                <a class="nav-link  @if(request('waktu_pembuatan') == '') active @endif "
                    id="pills-one-code-features-example2-tab" data-toggle="pill"
                    href="#pills-one-code-features-example2" role="tab"
                    aria-controls="pills-one-code-features-example2" aria-selected="true">Informasi Berkala | Setiap Saat | Serta Merta | Dikecualikan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request('waktu_pembuatan') != '') active @endif"
                    id="pills-two-code-features-example2-tab" data-toggle="pill"
                    href="#pills-two-code-features-example2" role="tab"
                    aria-controls="pills-two-code-features-example2" aria-selected="false">Daftar Informasi Publik (DIP)</a>
            </li>
        </ul>
    </div>
    <!-- End Nav -->

    <!-- Tab Content -->
    <div class="tab-content">
            <!-- TAB 1 -->
        <div class="tab-pane fade @if(request('waktu_pembuatan') == '') show active @endif"
            id="pills-one-code-features-example2" role="tabpanel"
            aria-labelledby="pills-one-code-features-example2-tab">
            <div class="row justify-content-center">
            @include('home.informasipublik')
                
            </div>
        </div>
        <!-- END TAB 1 -->

        <!-- TAB 2 -->
        <div class="tab-pane fade @if(request('waktu_pembuatan') != '') show active @endif"
            id="pills-two-code-features-example2" role="tabpanel"
            aria-labelledby="pills-two-code-features-example2-tab">
            <div class="row d-flex justify-content-center">
            @include('home.informasipublik2')

                
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

