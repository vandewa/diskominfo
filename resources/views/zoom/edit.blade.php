@section('title', 'Agenda')
@section('menu','Agenda')
@section('submenu','Ubah Agenda')
@extends('layouts/template-admin')
@section('kondisi11','active')
@section('halaman')
<a class="breadcrumb-item" href="{{ route('zoom:link_zoom.index') }}">Zoom</a>
<span class="breadcrumb-item active">Ubah Zoom</span>
@endsection
@section('container')
<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM UBAH AGENDA</h5>
        </div>

        <div class="card-body">
            {{Form::model($data, ['route' => ['zoom:link_zoom.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama Instansi / OPD<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('instansi', null,[
                        'class' => 'form-control'.($errors->has('instansi') ? ' border-danger' : ''),
                        'placeholder' => 'Instansi'])}}
                        @error('instansi')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Nama Peminjam<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('peminjam', null,[
                        'class' => 'form-control'.($errors->has('peminjam') ? ' border-danger' : ''),
                        'placeholder' => 'Nama Peminjam'])}}
                        @error('peminjam')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">No Handphone<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::number('no_hp', null,[
                        'class' => 'form-control'.($errors->has('no_hp') ? ' border-danger' : ''),
                        'placeholder' => 'No Handphone', 'min' => '0'])}}
                        @error('no_hp')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
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
                        {{Form::text('tanggal', null,['class' => 'form-control daterange-single'
                        ])}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Topik<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::text('topik', null,['class' => 'form-control'.($errors->has('topik') ?
                        ' border-danger' :
                        ''), 'placeholder' =>
                        'Topik'])}}
                        @error('topik')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Jam Acara<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::time('jam', null,['class' => 'form-control'.($errors->has('jam') ?
                        ' border-danger' :
                        ''), 'placeholder' =>
                        'Jam Acara'])}}
                        @error('jam')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Akun Zoom<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        {{Form::radio('peserta', '100',)}} 100
                        {{Form::radio('peserta', '500',)}} 500
                        @error('peserta')
                        <div class="form-control-feedback text-danger">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Link Zoom</label>
                <div class="col-lg-10">
                    {{Form::textarea('link_zoom', null,['class' => 'form-control', 'id' => 'editor-full'
                    ])}}
                    <!-- {{Form::textarea('link_zoom', null,['class' => 'summernote-height'
                    ])}} -->
                </div>
                @error('link_zoom')
                <div class="form-control-feedback text-danger">
                    <i class="icon-cancel-circle2"></i>
                </div>
                <span class="form-text text-danger">{{ $message }}</span>
                @enderror
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