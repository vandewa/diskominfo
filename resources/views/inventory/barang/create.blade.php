@section('title', 'Inventory')
@section('menu','Inventory')
@section('submenu','Tambah Barang')
@extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open')
@section('active-barang','active')

@section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">Tambah Barang</span>
@endsection

@section('container')

<div class="content">

    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM PENAMBAHAN ASSET</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'inventory:barang.store','method' => 'post', 'files' => 'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Kode Barcode<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('barcode', null,['class' => 'form-control'. ($errors->has('barcode') ? '
                        is-invalid' :
                        ''), 'placeholder' =>
                        'Kode Barcode'])}}
                        @error('barcode')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('name', null,['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' :
                        ''), 'placeholder' => 'Nama Barang'])}}
                        @error('name')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tahun Anggaran<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::number('tahun_anggaran', null,['class' => 'form-control'.
                        ($errors->has('tahun_anggaran') ?
                        ' is-invalid' :
                        ''),
                        'placeholder' => 'Tahun Anggaran'])}}
                        @error('tahun_anggaran')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Kategori<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::select('kategori_id',$kategori, null,['class' => 'form-control'.
                    ($errors->has('kategori_id') ?
                    ' is-invalid' :
                    ''), 'placeholder' => 'Pilih
                    Kategori'])}}
                    @error('kategori_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Satuan<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::select('satuan_id',$satuan, null,['class' => 'form-control'. ($errors->has('satuan_id') ?
                    ' is-invalid' :
                    ''), 'placeholder' => 'Pilih
                    Satuan'])}}
                    @error('satuan_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <!-- /CKEditor default -->
</div>
@endsection

@push('js')
<script src=" {{ asset('js/validation/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{{-- {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}}
@endpush