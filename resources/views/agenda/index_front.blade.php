
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
        <table class="table table-light devan w-100" >
          <thead class="thead-dark">
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Acara</th>
                  <th>Tempat</th>
                  <th>Jam</th>
                  <th>Keterangan</th>
                  <th>Detail</th>
                  <th style="display: none">Keterangan</th>
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

<div class="modal fade" id="modalZoomLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masukkan PIN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          {{-- <form action="{{ route('usernya.list') }}" method="post"> --}}
              @csrf
              <input name="nip" id="nip" class="form-control" autocomplete="off" type="number" required  placeholder="Masukkan PIN">
              <input type="hidden" name="agenda_id" id="agenda_id" class="form-control">
                {{-- <button type="submit" class="btn btn-sm btn-primary">Cari</button> --}}
          {{-- </form> --}}
        </div>
        <div class="modal-footer">
            <button type="submit" id="kirim" class="btn btn-sm btn-primary">Submit</button>
            {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button> --}}
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPDF" tabindex="-1" aria-labelledby="modalPDF" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="card-header">
              <h5 class="modal-title" id="modalPDF">Surat Agenda Diskominfo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="card-body ">
              <object data="" type="application/pdf" width="100%" height="600" style="border: solid 1px #ccc;"  id="penampil"></object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal" id="btn_tutup">Close</button>
            </div>
        </div>
    </div>
</div>    

@endsection

@push('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css"/>
@endpush


@push('js')
<script>
<script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
// <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {

    var id_agenda = "";
    
    $(document).on('click', '.ambil-data', function(){
      var data = table.row($(this).parents('tr')).data();
     id_agenda  = data.id
    });
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
     $('#kirim').click(function(){
        var nip = $('#nip').val();
        $.ajax({
          type: "POST",
          url: "{{ route('usernya.list') }}",
          data: {'nip': nip, 'id_agenda': id_agenda},
          success: function(a){
             if(a != "tidak ditemukan"){
              // tutup modal 
              // $('#modalZoomLink').attr('hidden', true);
               $('#modalZoomLink').modal('hide');

              $('#penampil').attr('data', a);

              $("#modalPDF").modal('show');

             } else {
              alert('PIN Salah');
             }
          },
      });
    });
    
   var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.location.href,
        "order": [[ 7, "desc" ]],
        responsive: true,
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'user.name', nama: 'user.name' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'acara', name: 'acara' },
            { data: 'tempat', name: 'tempat' },
            { data: 'jamMulai', name: 'jamMulai' },
            { data: 'keterangan', name: 'keterangan' },
            { data: 'action', name: 'action', orderable: false, searchable: false,},
            { data: 'tanggalBerangkat', name: 'tanggalBerangkat', visible: false },
        ]
    });
   
    

    
  });
</script>
</script>
@endpush