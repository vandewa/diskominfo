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


    <br>
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Article Description Section -->
        <div class="container space-top-1 space-bottom-2">
            <div class="w-lg-60 mx-lg-auto">
                <div class="mb-4">
                </div>
                <!-- Author -->
                <br>

                <center>
                    <h2>{{ $strukturppid->nama }}</h2>
                </center>
                <br>
                @if($strukturppid->file_name != null)
                    <img class="img-fluid w-100"
                        src="uploads/{{ $strukturppid->file_name??'' }}"
                        alt="Image Description">
                @endif
                </center>
                <br>

                <iframe
                    src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=http://devandewa.wonosobokab.go.id/{{ $strukturppid->url }}"
                    width="100%" height="700px">
                </iframe>

                <!-- End Author -->
                <div style="
                    text-align:justify;  
                    text-justify:auto;
                    color:black;
                    text-indent: 40px;
                ">
                    {!! $strukturppid->isi_posting !!}
                </div>
            </div>

            <div class="w-lg-60 mx-lg-auto">
                <div class="w-lg-60 mx-lg-auto">
                    <div class="w-lg-40 mx-lg-auto">
                    </div>
                </div>
                <!-- End Subscribe Section -->
    </main>
    <!-- ========== END MAIN ========== -->


    @endsection

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
        </script>
    @endpush
