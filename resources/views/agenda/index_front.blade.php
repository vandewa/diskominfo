
@section('title', 'Dinas Kominfo Wonosobo | Agenda Harian Diskominfo')
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
        <h3 class="mb-4 mt-10"><center>Agenda Harian Diskominfo</center></h3>
        <table class="table table-light table-striped devan w-100" >
          <thead class="thead-dark">
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Acara</th>
                  <th>Tempat</th>
                  <th>Jam</th>
                  <th>Keterangan</th>
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
<script>
<script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
   var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.location.href,
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'user.name', nama: 'user.name' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'acara', name: 'acara' },
            { data: 'tempat', name: 'tempat' },
            { data: 'jamMulai', name: 'jamMulai' },
            { data: 'keterangan', name: 'keterangan' },
        ]
    });
    
  });
</script>
</script>
@endpush