@section('title', 'Tambah Posting')
@section('menu','Posting')
@section('submenu','Tambah Posting')
@extends('layouts/template-admin')
@section('kondisi8','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Tiket</span>
    <span class="breadcrumb-item active">Tambah Tiket</span>
@endsection

@section('container')

    <div class="content">

        <!-- CKEditor default -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 >FORM INPUT TIKET</h5>
            </div>

            <div class="card-body">
                {{Form::open(['route' => 'tiket:tiket.store','method' => 'post', 'files' => 'true', ''])}}



                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Nama Pelapor<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                           {{Form::text('pelapor', null,['class' => 'form-control', 'placeholder' => 'Nama Pelapor'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Telepon Contact Person<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            {{Form::text('cp', null,['class' => 'form-control', 'placeholder' => 'Telepon Contact Person'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            {{Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Instansi Asal<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                           {{Form::text('instansi', null,['class' => 'form-control', 'placeholder' => 'Instansi Asal'])}}
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Prioritas Tiket<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            {{Form::select('priority_tp', get_code_group('PRIORITY_TP'), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Kategori<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            {{Form::select('tiket_tp', get_code_group('TIKET_TP'), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kategori Tiket'])}}
                        </div>
                    </div>
                    <div class="mb-4">
                        <label>Deskripsi Permasalahan <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
                        {{Form::textarea('deskripsi_masalah', null, ['id' =>'editor-full'])}}
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
    <script src=" {{ asset('js/validation/jquery.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{{--    {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}}
    </script>
@endpush
