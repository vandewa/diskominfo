@section('title', 'Pengumuman')
@section('menu','Menu Depan')
@section('submenu','Pengumuman ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Pengumuman</span>
@endsection

@section('tambah_data')
<a href="{{route('pengumumans.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Penguman
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
                    <th>Foto</th>
                    <th>Judul</th>
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
        ajax: "{{ route('pengumumans.list') }}",
        "order": [[ 3, "desc" ]],
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: true, searchable: false, className: "text-left"},
                    {data: 'nama_lampiran', },
                    {data: 'judul', },
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
