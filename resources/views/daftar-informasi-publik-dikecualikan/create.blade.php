@section('title', 'Daftar Informasi Publik Dikecualikan')
@section('menu','Posting')
@section('submenu','Daftar Informasi Publik Dikecualikan')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')
@section('active-dikecualikan','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Daftar Informasi Publik</span>
<span class="breadcrumb-item active">Dikecualikan</span>
@endsection


@section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM INPUT DAFTAR INFORMASI PUBLIK DIKECUALIKAN</h5>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'dip-dikecualikan.store','method' => 'post', 'files' => 'true', ''])}}
                @include('daftar-informasi-publik-dikecualikan.form')
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
{!! JsValidator::formRequest('App\Http\Requests\DIPDikecualikanStore') !!}
@endpush