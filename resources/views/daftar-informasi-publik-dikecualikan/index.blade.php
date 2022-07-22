@section('title', 'Daftar Informasi Publik Dikecualikan')
@section('menu','Posting')
@section('submenu','Daftar Informasi Publik Dikecualikan')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')
@section('active-dikecualikan','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Daftar Informasi Publik</span>
<span class="breadcrumb-item active">Dikecualikan</span>
@endsection

@section('tambah_data')
<a href="{{route('dip-dikecualikan.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Data
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
                    <th>Tahun</th>
                    <th>Nomor</th>
                    <th>Informasi Yang Dikecualikan</th>
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
                ajax: window.location.href,
				columns: [
					{data: 'waktu_pembuatan', name:'waktu_pembuatan', },
					{data: 'nomor', name:'nomor', },
					{data: 'informasi_dikecualikan', name:'informasi_dikecualikan', },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
				]
			});

</script>
@endpush

