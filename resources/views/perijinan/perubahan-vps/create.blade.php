
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
            <i class="fas fa-user-circle fa-lg" style="color:black"></i>
        @endsection

        <main id="content" role="main">
            <!-- Article Description Section -->
            <div class="container space-top-1 space-bottom-2">
                <div class="w-100 sm-6 mx-lg-auto">
                    <h3 class="mb-4 mt-10"><center>Form Perubahan Vps </center></h3>
                    <div class="w-lg-80 mx-auto">
                        <!-- Contacts Form -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"> Data Pemohon</h5>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form -->
                           {{Form::open()}}
                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Nama </label>
                                        <div class="col-sm-9">
                                            {{Form::text('name', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">NIP </label>
                                        <div class="col-sm-9">
                                            {{Form::text('nip', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Instansi</label>
                                        <div class="col-sm-9">
                                            {{Form::text('instansi', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Tujuan Pembuatan Vps</label>
                                        <div class="col-sm-9">
                                            {{Form::text('tujuan', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Processor</label>
                                        <div class="col-sm-9">
                                            {{Form::select('prosesor_tp',get_code_group('PROSESOR_TP'), null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Sistem Operasi</label>
                                        <div class="col-sm-9">
                                            {{Form::text('so', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Hard Disk</label>
                                        <div class="col-sm-9">
                                            {{Form::select('hd_tp',get_code_group('HARDISK_TP'), null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">RAM</label>
                                        <div class="col-sm-9">
                                            {{Form::select('ram_tp',get_code_group('RAM_TP'), null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">IP Address</label>
                                        <div class="col-sm-9">
                                            {{Form::text('ip', null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Akses Non Fisik</label>
                                        <div class="col-sm-9">
                                            {{Form::select('aksesnonfisik_tp',get_code_group('AKSESNONFISIK_TP'), null, ['class' => 'form-control '])}}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-block btn-primary">Kirim</button>
                                    </div>
                            {{Form::close()}}
                                <!-- End Form -->
                            </div>
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