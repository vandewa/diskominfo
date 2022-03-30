@section('title', 'Buku Tamu')
@section('menu','Buku Tamu')
@section('submenu','Tambah Buku Tamu')
@extends('layouts/template-admin')
@section('kondisi12','active')
@section('halaman')
<a class="breadcrumb-item" href="{{ route('zoom:link_zoom.index') }}">Buku Tamu</a>
<span class="breadcrumb-item active">Tambah Buku Tamu</span>
@endsection
@section('container')
<div class="content">
    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5>FORM BUKU TAMU</h5>
        </div>

        <div class="card-body">
            {{Form::open(['route' => 'buku:tamu.store','method' => 'post', 'files' => 'true', ''])}}
            <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
                    <label class="col-form-label col-lg-2">Tanggal<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            {{Form::text('tanggal', null,['class' => 'form-control daterange-single'])}}
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
            @include('tamu.form')
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