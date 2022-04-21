@section('title', 'Link Zoom')
@section('menu','Link Zoom')
@section('submenu','Edit Link Zoom')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('halaman')
<a class="breadcrumb-item" href="{{ route('link_zoom.index') }}">Link Zoom</a>
<span class="breadcrumb-item active">Edit Link Zoom</span>
@endsection
@section('container')
<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM EDIT ZOOM</h5>
        </div>

        <div class="card-body">
            {{Form::model($data, ['route' => ['link_zoom.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

             <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
					<label class="col-form-label col-lg-4">Nama Peminjam<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::text('peminjam', null,[
                            'class' => 'form-control'.($errors->has('peminjam') ? ' border-danger' : ''),
                            'placeholder' => 'Nama Peminjam'])}}
                            @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-6">
					<label class="col-form-label col-lg-4">Instansi<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::text('nama_opd', null,[
                            'class' => 'form-control'.($errors->has('nama_opd') ? ' border-danger' : ''),
                            'placeholder' => 'Nama OPD'])}}
                            @error('nama_opd')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-office"></i>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

            <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
					<label class="col-form-label col-lg-4">No Handphone<span class="text-danger">*</span></label>
					<div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::text('no_hp', null,[
                            'class' => 'form-control'.($errors->has('no_hp') ? ' border-danger' : ''),
                            'placeholder' => 'No HP'])}}
                            @error('no_hp')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-phone2"></i>
                            </div>
                        </div>
                    </div>
			    </div>

				<div class="col-6">
					<label class="col-form-label col-lg-2">Tanggal<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                             {{Form::text('tanggal', $tanggal,['class' => 'form-control daterange-single'])}}
                            @error('tanggal')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-calendar22"></i>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

            <div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-2">Topik<span class="text-danger">*</span></label>
					<div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::text('topik', null,['class' => 'form-control'.($errors->has('topik') ?' border-danger' :''), 'placeholder' =>'Topik'])}}
                            @error('topik')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-bubble-notification"></i>
                            </div>
                        </div>
                    </div>
			    </div>

				<div class="col-6">
					<label class="col-form-label col-lg-2">Akun Zoom<span class="text-danger">*</span></label>
					<div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::radio('peserta', '100')}}100 &nbsp;&nbsp;&nbsp;
                             {{Form::radio('peserta', '500')}}500
    
                            
                            @error('peserta')
                            <div class="form-control-feedback text-danger">
                                <i class="icon-cancel-circle2"></i>
                            </div>
                            <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
			    </div>
            </div>

             <div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-2">Jam Mulai<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                             {{Form::time('jam_mulai', null,['class' => 'form-control'.($errors->has('jam_mulai') ?' border-danger' :''), 'placeholder' =>'Jam Mulai Acara'])}}
                            @error('jam_mulai')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-hour-glass"></i>
                            </div>
                        </div>
                    </div>
				</div>

				<div class="col-6">
					<label class="col-form-label col-lg-2">Jam Selesai<span class="text-danger">*</span></label>
					<div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::time('jam_selesai', null,['class' => 'form-control'.($errors->has('jam_selesai') ?' border-danger' :''), 'placeholder' =>'Jam Selesai Acara'])}}
                            @error('jam_selesai')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-hour-glass3"></i>
                            </div>
                        </div>
                    </div>
			    </div>
            </div>

            @if(!empty($lampiran))
            <div class="form-group row">
                <div class="col-12">
                    <label class="col-form-label col-lg-6">Lampiran<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <iframe height="500" src="{{ asset('uploads/layanan/'.$data->file_name) }}" width="100%"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <hr>

            <div class="form-group row">
                <label class="col-form-label col-lg-2">Status Permintaan Layanan<span class="text-danger">*</span></label>
                <div class="col-lg-10">
                    {{Form::select('status_st',get_code_group('STATUS_ST'),null,['class' => 'form-control',])}}
                </div>
            </div>

            @if(!empty($link_zoom))

            <div class="devan">
                <div class="form-group row mb-3 " style="margin-bottom: 0.25rem" >
                    <label class="col-form-label col-lg-2">Link Zoom<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                                {{Form::textarea('link_zoom', null,['class' => 'form-control', 'id' => 'editor-full'])}}
                        </div>
                    </div>
                </div>
            </div>

            @else
       
            <div class="devan" style="display: none">
                <div class="form-group row mb-3 " style="margin-bottom: 0.25rem" >
                    <label class="col-form-label col-lg-2">Link Zoom<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                                {{Form::textarea('link_zoom', null,['class' => 'form-control', 'id' => 'editor-full'])}}
                        </div>
                    </div>
                </div>
            </div>

            @endif

            @if(!empty($alasan))

            <div class="devandewa">
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa'])}}
                    </div>
                </div>
            </div>

            @else

            <div class="devandewa" style="display: none">
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa2'])}}
                    </div>
                </div>
            </div>

            @endif

            <div class="text-right">
                <a href="{{route('link_zoom.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
                <button type="submit" class="btn bg-teal-400">
                    Submit form <i class="icon-paperplane ml-2"></i>
                </button>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <!-- /CKEditor default -->
</div>
@endsection 

@push('js')
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
  <script>
  flatpickr("input[type=datetime-local]", {
    "locale": "id"
  });
  </script>
  <script>
  flatpickr("input[type=time]", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
  });
  </script>
  <script>
    $(document).ready(function(){
        $('select[name=status_st]').change(function(){
            let isi = $(this).val();

            if(isi == 'STATUS_ST_02'){
                $('.devan').show('slow');
            }else{
                $('.devan').hide('slow');
                // $('#aa').val('');
            }

            if(isi == 'STATUS_ST_03' || isi == 'STATUS_ST_04' ){
                $('.devandewa').show('slow');
            }else{
                $('.devandewa').hide('slow');
                // $('#aa').val('');
            }
        });
    });
</script>
@endpush
