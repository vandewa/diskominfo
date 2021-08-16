@section('title', 'Tambah Posting')
@section('menu','Posting')
@section('submenu','Inventori')
@extends('layouts/template-admin')
@section('kondisi8','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Inventori</span>
    <span class="breadcrumb-item active">Tambah Satuan</span>
@endsection

@section('container')

    <div class="content">

        <!-- CKEditor default -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 >FORM INPUT SATUAN</h5>
            </div>

            <div class="card-body">
                {{Form::open(['route' => 'inventory:satuan.store','method' => 'post', 'files' => 'true', ''])}}



                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Nama Pelapor<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        {{Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nama Satuan'])}}
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
    <script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {{--    {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}}
    </script>
@endpush
