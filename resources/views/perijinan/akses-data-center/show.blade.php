@section('title', 'Detail TIket')
@section('menu','Tiket')
@section('submenu','Detail Tiket Dan Penugasan')
@extends('layouts/template-admin')
@section('kondisi8','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Tiket</span>
    <span class="breadcrumb-item active">Penugasan</span>
@endsection

@section('container')
    @if(session('status'))
        <div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            {{ session('status') }}
        </div>
    @endif
    <div class="content">

        <!-- CKEditor default -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 >Detail Pemohon</h5>
            </div>

            <div class="card-body">
                {{Form::model($data,['route' => ['tiket:store.petugas', $data->id],'method' => 'patch', 'files' => 'true', ''])}}

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Nama Pemohon</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->name}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mailbox"></span></i> Telepon Contact Person</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->telepon}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Email</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->email}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-home"></span></i> Instansi Asal</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->asal_instansi}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-home"></span></i> Jenis Identitas</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->jenisIdentitas->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-home"></span></i> No Identitas</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->identity_no}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-star-full2"></span></i> Keperluan</div>
                            <div class="col-md-8"><p class="text-uppercase">:
                                  {{$data->keperluan->code_nm??''}}
                                </p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-calendar"></span></i> Tanggal Pengajuan</div>
                            <div class="col-md-8"><p class="text-uppercase">:
                                  {{$data->created_at->isoFormat('D MMMM Y H:m:s')}}
                                </p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-calendar3"></span></i> Tanggal Persetujuan</div>
                            <div class="col-md-8"><p class="text-uppercase">:
                                    @if($data->approval_date != '')
                                        {{$data->approval_date->isoFormat('D MMMM Y H:m:s')}}
                                    @else
                                        -
                                    @endif
                                </p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-file-check"></span></i> Status</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->status->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-folder-check"></span></i> Penanggung Jawab Teknis</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->kategori->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Pemberi Keputusan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->penerima->name??'-'}}</p></div>
                        </div>
                    </div>
                </div>




                @if($data->approval_date == '')
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Persetujuan<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            {{Form::select('status_st', get_code_group('STATUS_ST'), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
                        </div>
                    </div>
                    <div class="devan-asu" style="display: none">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Penanggung Jawab Teknis<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                {{Form::select('petugas_penyelesaian_id', list_user(), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Berlaku Hingga<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                {{Form::date('valid_util', null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
                            </div>
                        </div>
                    </div>
                @endif


                <div class="text-right">
                    <button type="button" class="btn bg-warning-400">Cetak Surat Ijin <i class="icon-printer2 ml-2"></i></button>
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
        $(document).ready(function(){
            $('select[name=status_st]').change(function(){
               let isi = $(this).val();

               if(isi == 'STATUS_ST_02'){
                   $('.devan-asu').show('slow');
               }else{
                   $('.devan-asu').hide('slow');
               }
            });
        });
    </script>

@endpush
