@section('title', 'Data User')
@section('menu','User')
@section('submenu','Management User')
@extends('layouts/template-admin')
@section('kondisi11','nav-item-expanded nav-item-open')
@section('active-user-diskominfo','active')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
@endsection

@section('tambah_data')
<a href="{{route('user.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah User
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="text-center">Status</th>
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
        ajax: "{{ route('user.list') }}",
        "order": [[ 1, "asc" ]],
        columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
          { data: 'name', },
          { data: 'email', },
          { data: 'role', searchable: false },
					{ data: 'tombol', name: 'tombol', orderable: false, searchable: false },
					{ data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center" },
        ]
    });
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function centang(submenu) {

    
        // e.preventDefault();
        // const { pathname } = window.location;
        // const paths = pathname.split("/").filter(entry => entry !== "");
        // const lastPath = parseInt(paths[paths.length - 1]);
        var url = "{{ url('sendCentang') }}";
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                id: submenu
                // roleId: lastPath
            },
            success: function (response) {
                if (response.success) {
                    // alert(response.message) //Message come from controller
                    demo.showNotification('top', 'center', response.message)
                    location.reload();
                } else {
                    alert("Error")
                }
            },
            error: function (error) {
                console.log(error)
            }
        });
    };
</script>
@endpush
@push('css')
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
@endpush
