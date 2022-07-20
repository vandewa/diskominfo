@section('title', 'Agenda')
@section('menu','Agenda')
@section('submenu','Ubah Agenda')
@extends('layouts/template-admin')
@section('kondisi10','active')
@section('halaman')
<a class="breadcrumb-item" href="{{ route('agenda:harian.index') }}">Agenda</a>
<span class="breadcrumb-item active">Ubah Agenda</span>
@endsection
@section('container')
<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM UBAH AGENDA</h5>
        </div>

        <div class="card-body">
            {{Form::model($data, ['route' => ['agenda:harian.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::select('nama_id', $user, null,['class' => 'form-control select-search',
                        'data-container-css-class' => ($errors->has('nama_id') ?
                        ' border-danger' :
                        ''),
                        'placeholder' => 'Silahkan Pilih Nama'])}}
                        @error('nama_id')
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Acara<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('acara', null,[
                        'class' => 'form-control'.($errors->has('acara') ? ' border-danger' : ''),
                        'placeholder' => 'Acara'])}}
                        @error('acara')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tanggal Berangkat<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        {{Form::text('tanggalBerangkat', $tanggalBerangkat,['class' => 'form-control daterange-single'
                        ])}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tanggal Pulang<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        {{Form::text('tanggalPulang', $tanggalPulang,['class' => 'form-control daterange-single'
                        ])}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Jam Mulai<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::time('jamMulai', null,['class' => 'form-control'.($errors->has('jamMulai') ?' border-danger' :''), 'placeholder' =>'Jam Mulai'])}}
                        @error('jamMulai')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tempat<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('tempat', null,['class' => 'form-control'.($errors->has('tempat') ?
                        ' border-danger' :
                        ''), 'placeholder' =>
                        'Tempat'])}}
                        @error('tempat')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Keterangan<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('keterangan', null,['class' => 'form-control'.($errors->has('keterangan') ?
                        ' border-danger' :
                        ''), 'placeholder' =>
                        'Keterangan'])}}
                        @error('keterangan')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Surat <span class="text-danger">*<small>(pdf)</small></span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        @if (!is_null($data->surat))
                            <iframe height="500" src="{{ asset('uploads/agenda/'.$data->surat) }}" width="100%"></iframe>
                        @else
                            <iframe height="500" src="{{ asset('uploads/agenda/notfound.pdf') }}" width="100%"></iframe>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-right">
                <a href="{{route('agenda:harian.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
                <button type="submit" class="btn bg-teal-400">
                    Submit form <i class="icon-paperplane ml-2"></i>
                </button>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <!-- /CKEditor default -->
</div>
@endsection

@push('js')
<script>
    $('#barang_id').on('select2:select', function (e) {
        var data = e.params.data;
        console.log(data);
    });
</script>
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
@endpush