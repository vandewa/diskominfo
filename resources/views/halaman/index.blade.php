@section('title', 'Halaman Menu')
@section('menu','Posting')
@section('submenu','Halaman Menu')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Halaman Menu</span>
@endsection

@section('tambah_data')
<a href="{{route('halaman.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Halaman Menu
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
                    <th>Halaman Menu (Url)</th>
                    <th>Oleh</th>
                    <th>Tanggal</th>
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
				ajax: "{{ route('halaman.list') }}",
		        "order": [[ 1, "asc" ]],
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: true, searchable: false, className: "text-left"},
					{data: 'halaman',  name: 'slug',},
                    {data: 'nama.name', name: 'nama.name', defaultContent: '-'},
                    {data: 'created_at', },
					{
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
					},
				]
			});
</script>
@endpush

