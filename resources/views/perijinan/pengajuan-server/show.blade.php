@section('title', 'Pengantar Pengajuan Server')
@section('menu','Perijinan')
@section('submenu','Pengantar Pengajuan Server')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Perijinan</span>
    <span class="breadcrumb-item active">Pengantar Pengajuan Server</span>
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
                {{Form::model($data,['route' => ['pengajuan-server.persetujuan', $data->id],'method' => 'patch', 'files' => 'true', ''])}}

                <div class="row mb-2">
                    <div class="form-control mb-2">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Nama Instansi</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->instansi}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Nama Kepala Dinas</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->nama_kadin}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> NIP</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->nip}}</p></div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Keperluan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->keperluan}}</p></div>
                        </div>
                         <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Tujuan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->tujuan}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Nama CP</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->nama_cp}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Nomor CP</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->no_cp}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> Email</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->email}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                                        {{ Carbon\Carbon::parse($data->approval_date)->isoFormat('LLLL')}} WIB
                                    @else
                                        -
                                    @endif
                                </p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-file-check"></span></i> Status</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->status->code_nm??''}}</p></div>
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
                @endif


                <div class="text-right">
                    @if($data->approval_date == '')
                        <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
                    @else
                       <a href="{{route('perijinan:cetak.surat.pengajuan.server', $data->id)}}" class="btn bg-warning-400">Cetak Surat Tugas <i class="icon-printer2 ml-2"></i></a>
                    @endif
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
