@section('title', 'Setting Tanggal')
@section('menu','Laporan Presensi')
@section('submenu','Setting Tanggal')
@extends('layouts/template-admin')
@section('kondisi16','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Laporan Presensi</span>
<span class="breadcrumb-item active">Setting Tanggal</span>
@endsection

@section('container')

<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
        <h5>SETTING TANGGAL</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'setting-tanggal.store', 'files' => true])}}
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Tanggal<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                            {{Form::text('tanggal', null,['class' => 'form-control daterange-single'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Keterangan<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <div class="form-group-feedback form-group-feedback-right">
                            {{Form::text('keterangan', null, [ 'class' => 'form-control', 'placeholder' => 'Masukkan keterangan','required'])}}
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <a href="{{route('setting-tanggal.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
                    <button type="submit" class="btn bg-teal-400">Submit<i class="icon-paperplane ml-2"></i></button>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection


