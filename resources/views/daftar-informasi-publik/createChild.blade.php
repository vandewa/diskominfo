@section('title', 'Daftar Informasi Publik')
@section('menu','Posting')
@section('submenu','Daftar Informasi Publik')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')
@section('active-berkala','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Daftar Informasi Publik</span>
<span class="breadcrumb-item active">Berkala | Setiap Saat | Serta Merta</span>
<span class="breadcrumb-item active">{{ $root->jenis_informasi }}</span>
@endsection


@section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM CHILD ( {{ $root->jenis_informasi }} ) </h5>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'daftar-informasi-publik.store','method' => 'post', 'files' => 'true', ''])}}
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