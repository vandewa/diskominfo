@section('title', 'Laporan Kegiatan Harian ')
@section('menu','Laporan Kegiatan Harian')
@section('submenu','List Laporan Kegiatan Harian')
@extends('layouts/template-admin')
@section('kondisi14','active')

@section('halaman')
<span class="breadcrumb-item active">Laporan Kegiatan Harian</span>
@endsection

@section('tambah_data')
@if(auth()->user()->level == 6)
<a href="{{route('daily-work-recap.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Kegiatan
</a>
@endif
@if(!auth()->user()->level == 6)
<a href="{{route('daily-work-recap.cetak')}}" class="btn btn-primary">
<i class="icon-printer2 mr-2"></i>
Cetak Laporan Kegiatan Harian (LKH)
</a>
@endif
@endsection


@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif
<!-- Content area -->
<div class="content">
    <!-- Basic datatable -->
    <div class="card">
    <div class="card-body">
        <table class="table datatable-basic devan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                    <th style="display:none;">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </div>
    <!-- /basic datatable -->
</div>
@endsection
@push('js')
<script type="text/javascript">
			var table = $('.devan').DataTable({
				processing: true,
				serverSide: true,
                ajax: window.location.href,
                "order": [[ 5, "desc" ]],
				columns: [
				    {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
					{data: 'nama.name', name: 'nama.name', defaultContent: '-'},
					{data: 'tanggalnya', name:'tanggalnya'},
					{data: 'description', name:'description'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
					{data: 'date', name:'date', visible: false},
				]
			});

</script>
@endpush

