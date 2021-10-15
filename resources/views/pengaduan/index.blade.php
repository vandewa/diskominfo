@section('title', 'Pengaduan Masyarakat')
@section('menu','Layanan')
@section('submenu','Pengaduan Masyarakat ')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Pengaduan Masyarakat</span>
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
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Publish</th>
                    <th>Dibaca</th>
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
        ajax: "{{ route('pengaduans.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'created_at', },
                    {data: 'nama', },
                    {data: 'alamat', },
                    {data: 'publish', },
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
