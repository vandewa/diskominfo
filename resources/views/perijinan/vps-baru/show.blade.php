@section('title', 'Perijinan')
@section('menu','Perijinan')
@section('submenu','VPS Baru')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Perijinan</span>
    <span class="breadcrumb-item active">VPS Baru</span>
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
                {{Form::model($data,['route' => ['vps-baru.persetujuan', $data->id],'method' => 'patch', 'files' => 'true', ''])}}

               <div class="row mb-2">
                    <div class="form-control mb-2">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Nama</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->nama}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> NIP</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->nip}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Instansi</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->instansi}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Telepon</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->telepon}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> Email</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->email}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> Keperluan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->tujuan}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> Processor</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->prosesor->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> SO</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->so}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i> Hardisk</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->hd->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i>RAM</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->ram->code_nm??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i>IP</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->ip}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mail-read"></span></i>Akses Non Fisik</div>
                              <div class="col-md-8"><p class="text-uppercase">: {{$data->aksesNonfisik->code_nm??''}}</p></div>
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
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-folder-check"></span></i> Penanggung Jawab Teknis</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->penanggungJawab->name??''}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Pemberi Keputusan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->menyetujui->name??'-'}}</p></div>
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
                                {{Form::select('penanggung_jawab_id', list_user(), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
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
                    @if($data->approval_date == '')
                        <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
                    @else
                          <a href="{{route('perijinan:cetak.surat.vps.baru', $data->id)}}" class="btn bg-warning-400">Cetak Surat Tugas <i class="icon-printer2 ml-2"></i></a>
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
