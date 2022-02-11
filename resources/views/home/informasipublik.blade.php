
@section('title', 'Dinas Kominfo Wonosobo | Lampiran')
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
        <form action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="" class="col-md-2">
                           Jenis Informasi Publik
                        </label>
                        <div class="col-md-6">
                            {{Form::select('informasi_st',get_code_group('INFORMASI_ST'),null,['class' => 'name form-control', 'placeholder' => "Semua Data"])}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
      <table class="table table-light table-striped table-bordered table-hover yajra w-100" >
        <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Lampiran</th>
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
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra').DataTable({
       	processing: true,
				serverSide: true,
        sDom: 't',
        ajax: "{{ route('informasi.publik.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
          {data: 'keterangan', },
          {data: 'informasi_st', visible:false },
					  {
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
            },
        ]
    });

        $('select[name=informasi_st]').change(function(){
                table
                    .column(2)
                    .search( this.value )
                    .draw();
            });
    
  });
  
</script>
<script>
<script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</script>

@endpush