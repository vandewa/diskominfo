@section('title', 'Agenda')
@section('menu','Agenda')
@section('submenu','Tambah Agenda')
@extends('layouts/template-admin')
@section('kondisi10','active')
@section('halaman')
<a class="breadcrumb-item" href="{{ route('agenda:harian.index') }}">Agenda</a>
<span class="breadcrumb-item active">Tambah Agenda</span>
@endsection
@section('container')
<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM TAMBAH AGENDA</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'agenda:harian.store','method' => 'post', 'files' => 'true', ''])}}
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
                <label class="col-form-label col-lg-2">Tanggal<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        {{Form::text('tanggal', null,['class' => 'form-control daterange-basic'
                        ])}}
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
                <label class="col-form-label col-lg-2">Jam Mulai<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::time('jamMulai', null,['class' => 'form-control'.($errors->has('jamMulai') ?
                        ' border-danger' :
                        ''), 'placeholder' =>
                        'Jam Mulai'])}}
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
            <div class="text-right">
                <button type="submit" class="btn bg-teal-400">
                    Submit form <i class="icon-paperplane ml-2"></i>
                </button>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <!-- /CKEditor default -->
</div>
@endsection @push('js')
<script>
    $('#barang_id').on('select2:select', function (e) {
        var data = e.params.data;
        console.log(data);
    });
</script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script> -->
<!-- {{-- {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}} -->
@endpush