@section('title', 'Cetak Presensi')
@section('menu','Laporan Presensi')
@section('submenu','Cetak Presensi')
@extends('layouts/template-admin')
@section('kondisi16','nav-item-expanded nav-item-open')
@section('active-laporan-presensi','active')

@section('halaman')
<span class="breadcrumb-item active">Laporan Presensi</span>
<span class="breadcrumb-item active">Cetak Presensi</span>
@endsection

@section('container')

<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
        <h5>CETAK PRESENSI</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'presensi-admin.store', 'files' => true])}}
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Nama<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                            {{Form::select('id_user', $user, null,['class' => 'form-control select-search','placeholder' => 'Silahkan Pilih Nama'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Bulan<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                            {{Form::select('bulan', $bulan, null,['class' => 'form-control select-search','placeholder' => 'Silahkan Pilih Bulan'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Tahun<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                            {{Form::select('tahun', $tahun, null,['class' => 'form-control select-search','placeholder' => 'Silahkan Pilih Tahun'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Disetujui<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                           {{Form::text('disetujui', null,['class' => 'form-control daterange-single'])}}
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn bg-teal-400">Cetak Presensi<i class="icon-printer ml-2"></i></button>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PresensiAdminStoreValidation') !!}
</script>
@endpush