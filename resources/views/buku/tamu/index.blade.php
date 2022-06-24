
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
<meta http-equiv="refresh" content="1800" >
<main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
   
    
      <div class="w-100 sm-6 mx-lg-auto">
      <h3 class="mb-4 mt-10"><center>Buku Tamu Diskominfo</center></h3>
      <div class="mb-4">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <span class="fas fa-plus mr-2"></span>
               Tambah Data Tamu
                </button>  
            </div>
      <table class="table table-light table-striped devan w-100" >
        <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama Tamu</th>
              <th>Keperluan</th>
              <th>Instansi</th>
              <th>Jumlah Tamu</th>
              <th style="display: none">Jumlah Tamu</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
        <div class="mb-4">
        </div>
      </div>
    </div>
      <!-- =============FORM============= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="card-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{route('buku_tamu.store')}}" id="basic-form">
                    @csrf
                    <div class="card-body p-3">
                      <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label class="h6 small d-block text-uppercase mb-0">
                                    Tanggal
                                </label>
                            </div>
                            <div class="col-8">
                                <!-- Datepicker -->
                                <div id="datepickerWrapperFrom" class="u-datepicker input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fas fa-calendar"></span>
                                        </span>
                                    </div>
                                    <input class="js-range-datepicker form-control bg-transparent rounded-right" type="datetime-local" name="tanggal" placeholder="Masukkan Tanggal" aria-label="From" data-rp-wrapper="#datepickerWrapperFrom" required />
                                </div>
                                <!-- End Datepicker -->
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    Nama Tamu
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" type="text" name="nama" required placeholder="Masukkan Nama Tamu" aria-describedby="amountLabelExample1"  data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    Keperluan
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" type="text" name="keperluan" required placeholder="Masukkan Keperluan" aria-label="$ 0.00" aria-describedby="amountLabelExample1" data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                         <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="cardNumberLabel" class="h6 small d-block text-uppercase mb-0">
                                    Instansi
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" name="instansi" type="text" required placeholder="Masukkan Instansi" aria-label="Card number" aria-describedby="cardNumberLabel"  data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    Jumlah Tamu
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <!-- <div class="input-group-prepend">
                                            <span class="input-group-text">+628</span>
                                        </div> -->
                                        <input class="form-control" type="number" min="0" name="jumlah" required placeholder="Masukkan Jumlah Tamu" aria-describedby="amountLabelExample1" data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        
                      <!-- Buttons -->
                      <div class="card-footer py-3 px-5">
                          <div class="d-flex justify-content-end">
                              <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Tambah Data Tamu</button>
                              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                      <!-- End Buttons -->
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>    
    <!-- ============= END FORM ================== -->

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
  function sweetAlert() 
  {  
  Swal.fire(
  'Berhasil!',
  'Tamu berhasil ditambahhkan',
  'success')
  }

@if(session('status'))
sweetAlert();
@endif
</script>
<script type="text/javascript">
  $(function () {
    
   var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.location.href,
         "order": [[ 6, "desc" ]],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'tanggalnya', nama: 'tanggalnya', orderable: false, searchable: false },
            { data: 'nama', name: 'nama' },
            { data: 'keperluan', name: 'keperluan' },
            { data: 'instansi', name: 'instansi' },
            { data: 'jumlah', name: 'jumlah' },
            { data: 'tanggal', nama: 'tanggal', visible: false },
        ]
    });
    
  });
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#basic-form").validate({
rules: {
tanggal : {
required: true,
},
nama: {
required: true,
},
keperluan: {
required: true,
},
instansi: {
required: true,
},
jumlah: {
required: true,
},

}
});
});
</script>

</script>
@endpush