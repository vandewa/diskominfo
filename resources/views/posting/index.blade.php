@section('title', 'Data Posting')
@section('menu','Posting')
@section('submenu','Data Posting')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')


@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Data Posting</span>
@endsection

@section('container')



<!-- Content area -->
<center><a href="/posting/create" class="btn btn-primary mt-2">Tambah Data Posting</a></center>
<div class="content">

    <!-- Basic datatable -->

    <div class="card">
    <div class="card-body">
    
    <table class="table  damar">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Posting</th>
                    <th>Kata Kunci</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
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
	
			
			var table = $('.damar').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('posting.list') }}",
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
					{data: 'judul_posting'},
                    {data: 'kata_kunci', },
					{data: 'keterangan', },
					{data: 'created_at', },
					{data: 'status', },
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

