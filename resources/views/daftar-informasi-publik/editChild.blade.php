@section('title', 'Daftar Informasi Publik')
@section('menu','Posting')
@section('submenu','Daftar Informasi Publik')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Daftar Informasi Publik</span>
@endsection


@section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM EDIT DAFTAR INFORMASI PUBLIK</h5>
        </div>
        <div class="card-body">
             {{Form::model($data, ['route' => ['daftar-informasi-publik.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}
            @include('daftar-informasi-publik.formChild')
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