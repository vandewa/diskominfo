@section('title', 'Inventory')
@section('menu','Inventory')
@section('submenu','Tambah Kategori')
@extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">Tambah Kategori</span>
@endsection

@section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM INPUT KATEGORI</h5>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'inventory:kategori.store','method' => 'post', 'files' => 'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama Kategori<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{ form::text('name', null,['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' :
                        ''),
                        'placeholder' => 'Nama Satuan']) }}
                        @error('name')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="badge d-block badge-danger form-text">{{ $message }}</span>
                        @enderror
                    </div>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{{-- {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}}
@endpush