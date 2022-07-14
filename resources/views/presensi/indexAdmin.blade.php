@section('title', 'Presensi')	
@section('menu','Presensi')
@section('submenu','Laporan Presensi')
@extends('layouts/template-admin')
@section('kondisi16','active')

@section('halaman')
<span class="breadcrumb-item active">Laporan Presensi</span>
@endsection

@section('tambah_data')
<a href="{{route('presensi-admin.create')}}" class="btn btn-primary">
<i class="icon-printer2 mr-2"></i>
Cetak Presensi 
</a>
@endsection

@section('container')

<div class="content">
	<!-- Basic datatable -->
	<div class="card">
		<div class="card-body">
			<table class="table datatable-basic devan" width="100%">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Nama </th>
						<th>Jam</th>
						<th>Keterangan</th>
						<th>Aksi</th>
						<th style="display: none;">Nama Tamu</th>
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
            { data: 'tanggalnya', nama: 'tanggalnya', orderable: false, searchable: false },
            { data: 'nama.name', name: 'nama.name', defaultContent: '-', orderable: false, searchable: false},
            { data: 'jamnya', nama: 'jamnya', orderable: false, searchable: false },
            { data: 'keterangan', name: 'keterangan', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false},
            { data: 'created_at', nama: 'created_at', visible: false },

        ]
    });
</script>
@endpush
