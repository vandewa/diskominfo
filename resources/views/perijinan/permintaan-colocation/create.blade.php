
@section('title', 'Dinas Kominfo Wonosobo | Lampiran')
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

        <main id="content" role="main">
            <!-- Article Description Section -->
            <div class="container space-top-1 space-bottom-2">
                <div class="w-100 sm-6 mx-lg-auto">
                    <h3 class="mb-4 mt-10"><center>Form Permintaan Colocation Server</center></h3>
                    <div class="w-lg-80 mx-auto">
                        <!-- Contacts Form -->
                        <!-- Card -->
                         @if(!Session::has('keterangan'))
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"> Data Instansi Pemohon</h5>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form -->
                           {{Form::open(['route' => 'perijinan:permintaan.col.post'])}}
                                    <!-- Form Group -->
                                    {{Form::hidden('status_st','STATUS_ST_01')}}
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">OPD</label>
                                        <div class="col-sm-9">
                                        {{Form::text('opd', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Bidang/ Bagian/ UPTD</label>
                                        <div class="col-sm-9">
                                        {{Form::text('bidang', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Alamat</label>
                                        <div class="col-sm-9">
                                        {{Form::text('alamat', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">No. Telepon</label>
                                        <div class="col-sm-9">
                                        {{Form::text('telepon', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Email</label>
                                        <div class="col-sm-9">
                                        {{Form::text('email', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary">Kirim</button>
                                </div>
                            {{Form::close()}}
                            @else
                                <!-- Cookie Alert -->
                                    <div class="container ">
                                        <div class="alert bg-white w-lg-80 border shadow-sm mx-auto" role="alert">
                                            <h4 class="text-success">Berhasil !</h4>
                                            <p class="small">
                                                <span class="font-weight-bold">Selamat</span>
                                                 Permintaan anda berhasil dikirim, informasi selanjutnya akan dikirim melalui email yang anda daftarkan.
                                                <br>
                                                 <strong>Pastikan untuk memeriksa folder spam anda.</strong>
                                            </p>

                                            <div class="row align-items-sm-center">
                                                <div class="col-sm-8 mb-3 mb-sm-0">

                                                </div>

                                                <div class="col-sm-4 text-sm-right">
                                                    <a href="{{route('perijinan:permintaan.col.create')}}" type="button" class="btn btn-sm btn-primary transition-3d-hover">Ok!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Cookie Alert -->

                            @endif

                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                        <!-- End Contacts Form -->
                    </div>
                </div>
            </div>


        </main>

        @endsection

        @push('css')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        @endpush


        @push('js')
            <script>
                <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript">
                $(function () {

                    var table = $('.yajra').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('lampiran.list') }}",
                        columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'keterangan', },
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
    @endpush
