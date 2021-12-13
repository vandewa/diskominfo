@section('title', 'Inventory') @section('menu','Inventory')
@section('submenu','Tambah Peminjaman') @extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open') @section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">Tambah Peminjaman</span>
@endsection @section('container')

<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM PEMINJAMAN ASSET</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'inventory:peminjaman.store','method' => 'post', 'files' => 'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tanggal Peminjaman<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        {{Form::text('tanggal_peminjaman', null,['class' => 'form-control daterange-single',
                        'value'=>'03/18/2013'])}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Tanggal Pengembalian<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        {{Form::text('tanggal_pengembalian', null,['class' => 'form-control daterange-single'
                        ])}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama Peminjam<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::text('peminjam_id', null,['class' => 'form-control', 'placeholder' => 'Nama Peminjam'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Peminjaman Status<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::text('peminjaman_st', null,['class' => 'form-control', 'placeholder' =>
                    'Peminjaman Status'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Petugas<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::select('petugas_id', $userpetugas, null,['class' => 'form-control select-search',
                    'placeholder' => 'Petugas Yang Meminjamkan'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Penerima<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::select('penerima_id', $userpetugas, null,['class' => 'form-control select-search',
                    'placeholder' => 'Petugas Yang Menerima'])}}
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
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script> -->
<!-- {{-- {!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}--}} -->
@endpush