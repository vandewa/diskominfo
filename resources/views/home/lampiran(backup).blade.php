
@section('title', 'Dinas Kominfo Wonosobo | Profil')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
          data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
@endsection

@section('kondisi2')
<i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection
 
<main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
   
    
      <div class="w-100 sm-6 mx-lg-auto">
      <h3 class="mb-4 mt-10"><center>Kumpulan file-file lampiran</center></h3>
      <table class="table-light table-striped yajra-datatable w-100" >
        <thead>
            <tr>
                    <th>No</th>
                    <th>Lampiran</th>
                    <!-- <th>File</th> -->
                    <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
        <div class="mb-4">
         
        </div>
      </div>
    </div>

    </main>

@endsection

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush


@push('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('lampiran.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'keterangan', },
                    // {data: 'nama_lampiran', },
					{
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
            },
        ]
    });
    
  });
</script>
@endpush