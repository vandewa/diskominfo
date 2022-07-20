@section('title', 'Detail Presensi')
@section('menu','Laporan Presensi')
@section('submenu','Detail Presensi')
@extends('layouts/template-admin')
@section('kondisi16','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Laporan Presensi</span>
<span class="breadcrumb-item active">Detail Presensi</span>
@endsection

@section('container')

<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
        <h5>DETAIL PRESENSI <b>{{ strtoupper($user->name) }}</b></h5>
        </div>

        <div class="card-body">
            {{Form::model($data, ['route' => ['presensi-admin.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}
                <div class="form-group row" style="margin-bottom: 0.25rem">
                    <div class="col-6">
                        <label class="col-form-label col-lg-4">Nama<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                {{Form::text('id_user', $user->name,['class' => 'form-control', 'placeholder' => 'Nama', 'disabled' => 'disabled',])}}
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label class="col-form-label col-lg-4">Tanggal<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                               {{Form::text('tanggal', $tanggal,['class' => 'form-control daterange-single', 'disabled' => 'disabled',])}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 0.25rem">
                    <div class="col-6">
                        <label class="col-form-label col-lg-4">Jam<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                {{Form::time('jam', null,['class' => 'form-control', 'placeholder' =>'Jam', 'disabled' => 'disabled'])}}
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label class="col-form-label col-lg-4">Keterangan<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                               {{Form::text('keterangan', null,['class' => 'form-control', 'disabled' => 'disabled'])}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card-body">
                            <center><h4 class="card-title" >Foto</h4></center>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{asset('storage/presensi/'.$data->foto) }}" target="_blank">
                                <img src="{{asset('storage/presensi/'.$data->foto) }}" class="d-block w-70 ">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <a href="{{route('presensi-admin.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection

@push('js')
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
  <script>
  flatpickr("input[type=datetime-local]", {
    "locale": "id"
  });
  </script>
  <script>
  flatpickr("input[type=time]", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
  });
  </script>
<script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PresensiAdminStoreValidation') !!}
</script>
@endpush