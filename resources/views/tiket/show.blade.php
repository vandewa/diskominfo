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
                <h5 >Detail Tiket</h5>
            </div>

            <div class="card-body">
                {{Form::model($data,['route' => ['tiket:store.petugas', $data->id],'method' => 'patch', 'files' => 'true', ''])}}

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-phone"></span></i> Nama Pelapor</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->pelapor}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-star-full2"></span></i> Prioritas</div>
                            <div class="col-md-8"><p class="text-uppercase">:
                        <span class="{{label_prioritas($data->prioritas->code_value??'')}}">{{$data->prioritas->code_nm??''}}</span>
                            </p></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-mailbox"></span></i> Telepon Contact Person</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->cp}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-folder-check"></span></i> Kategori</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->kategori->code_nm}}</p></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Email</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->email}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-file-check"></span></i> Status</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->status->code_nm??''}}</p></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-home"></span></i> Instansi Asal</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->instansi}}</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><i class="nav-item"><span class="icon-user"></span></i> Penerima Laporan</div>
                            <div class="col-md-8"><p class="text-uppercase">: {{$data->penerima->name??'-'}}</p></div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <hr>
                    <label>Deskripsi Permasalahan <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
                  <p>{!! $data->deskripsi_masalah !!}</p>
                    <hr>
                </div>
                @if($data->petugas_penyelesaian_id == '')
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Petugas Penanganan<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        {{Form::select('petugas_penyelesaian_id', list_user(), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Prioritas Tiket'])}}
                    </div>
                </div>
                @else
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4"><i class="nav-item"><span class="icon-home"></span></i> Petugas Penyelesaian</div>
                                <div class="col-md-8"><p class="text-uppercase">: {{$data->petugas->name??''}}</p></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4"><i class="nav-item"><span class="icon-calendar"></span></i> Tanggal Penyelesaian</div>
                                <div class="col-md-8"><p class="text-uppercase">: @if($data->tanggal_selesai??'' != '') {{date('d F Y H:i:s', strtotime($data->tanggal_selesai))}} @endif</p></div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data->tiket_st == 'TIKET_ST_02')
                    <div class="mb-4">
                        <label>Deskripsi Penyelesaian <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
                        {{Form::textarea('deskripsi_penyelesaian', null, ['id' =>'editor-full'])}}
                    </div>
                @elseif($data->tiket_st == 'TIKET_ST_03')
                    <div class="mb-4">
                        <hr>
                        <label>Deskripsi Penyelesaian <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
                        <p>{!! $data->deskripsi_penyelesaian !!}</p>
                        <hr>
                    </div>
                @endif


                <div class="text-right">
                    <a href="{{route('tiket:cetak.surat.tugas', $data->id)}}" class="btn bg-warning-400">Cetak Surat Tugas <i class="icon-printer2 ml-2"></i></a>
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
