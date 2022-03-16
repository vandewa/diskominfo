@section('title', 'Link Youtube')
@section('menu','Youtube')
@section('submenu','Link ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Youtube</span>
@endsection

@section('tambah_data')
<a href="{{route('youtube.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Link 
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
                    <th>Youtube</th>
                    <th>Link</th>
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
        ajax: "{{ route('youtube.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'link', },
                    {data: 'url', },
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
