@section('title', 'Data Menu ')
@section('menu','Menu Depan')
@section('submenu','Menu')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Menu</span>
@endsection

@section('tambah_data')
<a href="{{route('menuberanda.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Menu ( Khusus File )
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
                    <th>Menu</th>
                    <th>URL</th>
                    <th>Sub Menu</th>
                    <th>Lampiran</th>
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
        ajax: "{{ route('menuberanda.list') }}",
        "order": [[ 1, "asc" ]],
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: true, searchable: false, className: "text-left"},
                    { data: 'nama', },
                    { data: 'url', orderable: false},
                    { data: 'parent', orderable: false},
                    { data: 'lampiran', orderable: true, searchable: false},
					{ data: 'action', name: 'action', orderable: false, searchable: false,},
        ]
    });

</script>
@endpush

