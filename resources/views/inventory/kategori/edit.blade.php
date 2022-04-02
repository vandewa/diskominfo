@section('title', 'Inventory')
@section('menu','Inventory')
@section('submenu','Ubah Kategori')
@extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">Ubah Kategori</span>
@endsection

@section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM UBAH KATEGORI</h5>
        </div>
        <div class="card-body">
            {{Form::model($data, ['route' => ['inventory:kategori.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama Kategori<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
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