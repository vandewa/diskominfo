
@section('title', 'Dinas Kominfo Wonosobo | Pengaduan Masyarakat')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
          data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
@endsection

@section('kondisi2')
<i class="fas fa-user-circle fa-lg" style="color:white"></i>
@endsection
  <!-- ========== MAIN ========== -->
  <main id="content" role="main" class="ignielPelangi">
    <div class="container space-top-2 space-top-lg-2 space-bottom-2" >

    <!-- =============FORM============= -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengaduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form method="POST" action="{{route('pengaduans.store')}}" id="basic-form">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>

            <div class="form-group">
                <label for="telp">No Telp</label>
                <input type="text" class="form-control" id="telp" name="telp">
            </div>

             <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  id="email" class="form-control" name="email">
            </div>

             <div class="form-group">
               <label for="isi_aduan" class="col-form-label">Aduan:</label>
                <textarea name="isi_aduan" class="form-control" id="isi_aduan"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>    

<!-- ============= END FORM ================== -->

    
    <div class="col-lg-9 " style="margin: auto;">
          <!-- Title and Sort -->
          <div class="row align-items-sm-center">
            <div class="col-sm mb-3 mb-sm-0 mt-4">
              <center><h3 class="mb-0" style="color:white;">PENGADUAN MASYARAKAT</h3></center>
              <br>
            </div>
          </div>
           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Formulir Pengaduan</button>            
          <!-- End Title and Sort -->
           <hr class="my-4">

         @foreach($pengaduan as $dataaduan)

        <!-- Card -->
          <div class="card card-bordered card-hover-shadow mb-5">
            <div class="card-body">
              <!-- Media -->
              <div class="d-sm-flex">
                <div class="media align-items-center align-items-sm-start mb-3">
                  <img class="avatar avatar-sm mr-3" src="{{ asset('front/assets/images/icon-anonymous.png')}}" alt="Image Description">
                  <div class="media-body d-sm-none">
                    <h6 class="mb-0">
                      <a class="text-dark" href="employer.html">Mailchimp</a>
                      <img class="avatar avatar-xss ml-1" src="../assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                    </h6>
                  </div>
                </div>
                
                <div class="media-body"  style="color:black; text-align:justify;">
                  <div class="row">
                    <div class="col col-md-8">
                      <h4 class="mb-0">
                        <span class="text-dark">{{ucwords($dataaduan->nama)}}</span>
                      </h4>
                      <div class="d-none d-sm-inline-block">
                          <p style="font-size:80%;" class="badge badge-pill badge-primary">{{  Carbon\Carbon::parse($dataaduan->created_at)->isoFormat('dddd, D MMMM Y') }}</p>
                      </div>
                    </div>
                  </div>
                   {{$dataaduan->isi_aduan}}
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Media -->
            </div>

           <div class="card-footer">
              <ul class="list-inline small text-body">
                <li class="list-inline-item">Dipost {{  Carbon\Carbon::parse($dataaduan->created_at)->diffForHumans() }}</li>
                <span class="float-right text-muted">
                <i class="fa fa-comment mr-1 text-warning"></i> {{count($dataaduan->childs)}} Komentar
                </span>
              </ul>
            </div>

            <!-- ============KOMENTARNYA============== -->

            @if(count($dataaduan->childs))
            @foreach($dataaduan->childs as $child)
            
            <div class="card-footer">
             <!-- Media -->
              <div class="d-sm-flex">
                <div class="media align-items-center align-items-sm-start mb-3">
                  <img class="avatar avatar-sm mr-3" src="{{ asset ('uploads/'.$child->namanya->profile_photo_path)}}">
                  <div class="media-body d-sm-none">
                    <h6 class="mb-0">
                      <a class="text-dark" href="employer.html">Mailchimp</a>
                      <img class="avatar avatar-xss ml-1" src="front/assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                    </h6>
                  </div>
                </div>
                
                <div class="media-body" style="color:black; text-align:justify;  ">
                  <div class="row">
                    <div class="col col-md-12">
                    <span style="font-size:80%;" class="badge badge-pill badge-primary float-right mr-1 mt-2 ">{{  Carbon\Carbon::parse($child->created_at)->isoFormat('dddd, D MMMM Y') }}</span>
                      <h4 class="mb-1 mt-1">
                        <span class="text-dark" >{{$child->namanya->name}}</span>
                          
                      </h4>
                      <div class="d-none d-sm-inline-block">
                          {{$child->isi_aduan}}
                      </div>
                    </div>
                   
                  </div>

                  <!-- End Row -->
                </div>
               </div>
              <!-- End Media -->
              </div>
    
             @endforeach
             @endif

             
            <!-- ===============AKHIR KOMENTAR============ -->
          </div>
          <!-- End Card -->
          @endforeach

           {{ $pengaduan->links() }}
          
    <div>
  </main>
  
  <!-- ========== END MAIN ========== -->
@endsection

@push('css')
<style>
.topcorner{
   position:absolute;
   top:0;
   right:0;
  }

.ignielPelangi {
    background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
    background-size: 500% 500%;
    -webkit-animation: ignielGradient 15s ease infinite;
    -moz-animation: ignielGradient 15s ease infinite;
    animation: ignielGradient 15s ease infinite;
}
@-webkit-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}


label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}

}




</style>
@endpush

@push('js')
<script type="text/javascript">
function callbackThen(response){
    // read HTTP status
    console.log(response.status);
 
    // read Promise object
    response.json().then(function(data){
        console.log(data);
    });
}
function callbackCatch(error){
    console.error('Error:', error)
}
</script>
 
{!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}
@endpush


@push('js')
 <script type="text/javascript">
  function sweetAlert() 
  {  
  Swal.fire(
  'Berhasil!',
  'Pesan Anda telah dikirim.',
  'success')
  }

@if(session('statuss'))
sweetAlert();
@endif
</script>


<script type="text/javascript">
$(document).ready(function() {
$("#basic-form").validate({
rules: {
nama : {
required: true,
},
alamat: {
required: true,
},
pekerjaan: {
required: true,
},
telp: {
required: true,
},
email: {
required: true,
email: true
},
isi_aduan: {
required: true,
},

}
});
});
</script>



@endpush

