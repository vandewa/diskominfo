@section('title', 'Setting Tanggal')	
@section('menu','Setting Tanggal')
@section('submenu','Laporan Setting Tanggal')
@extends('layouts/template-admin')
@section('kondisi16','nav-item-expanded nav-item-open')
@section('active-setting-tanggal','active')

@section('halaman')
<span class="breadcrumb-item active">Setting Tanggal</span>
@endsection

@section('tambah_data')
<a href="{{route('setting-tanggal.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Setting Tanggal
</a>
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif

<div class="content">
	<!-- Basic datatable -->
	<div class="card">
		<div class="card-body">
			<table class="table datatable-basic devan" width="100%">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Aksi</th>
						<th style="display: none">Aksi</th>
						
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
         "order": [[ 3, "asc" ]],
        columns: [
            { data: 'tanggalnya', nama: 'tanggalnya', orderable: false, searchable: false },
            { data: 'keterangan', name: 'keterangan', defaultContent: '-', orderable: false, searchable: false},
            { data: 'action', name: 'action', orderable: false, searchable: false},
            { data: 'tanggal', nama: 'tanggal', visible:false },


        ]
    });
</script>
@endpush
