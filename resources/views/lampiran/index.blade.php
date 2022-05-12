@section('title', 'Data Lampiran')
@section('menu','Lampiran')
@section('submenu','Data ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Lampiran</span>
@endsection

@section('tambah_data')
<a href="{{route('lampirans.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Lampiran
</a>
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
                    <th>Keterangan</th>
                    <th>Nama File</th>
                    <th>Tanggal</th>
                    <th style="display:none;">Tanggalnya</th>
                    <th class="text-center">Aksi</th>
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
        ajax: "{{ route('lampirans.list') }}",
        "order": [[ 4, "asc" ]],
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
                    { data: 'keterangan', },
                    { data: 'nama_lampiran', orderable: false, searchable: false},
                    { data: 'tanggal', orderable: false, searchable: false},
                    { data: 'created_at', name:'created_at', visible: false},
					{ data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });

</script>
@endpush
