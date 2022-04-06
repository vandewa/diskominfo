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
       
              <div class="form-group row mb-3" style="margin-bottom: 0.25rem">
				<div class="col-12">
					<label class="col-form-label col-lg-2">Link Zoom<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                              {{Form::textarea('link_zoom', null,['class' => 'form-control', 'id' => 'editor-full'])}}
                                @error('link_zoom')
                                <div class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                                <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-hour-glass"></i>
                            </div>
                        </div>
                    </div>
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
@endpush
