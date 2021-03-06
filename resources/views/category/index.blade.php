@section('title', 'Data Kategori')
@section('menu','Kategori')
@section('submenu','Data ')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')
@section('active-category','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Kategori</span>
@endsection

@section('tambah_data')
<a href="{{route('category.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Kategori
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
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
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
         "order": [[ 1, "asc" ]],
        ajax: "{{ route('category.list') }}",
        columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
                    { data: 'nama_kategori', },
					{ data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
        ]
    });

</script>
@endpush
