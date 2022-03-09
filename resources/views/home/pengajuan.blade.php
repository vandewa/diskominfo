
@section('title', 'Dinas Kominfo Wonosobo | Hubungi Kami')
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

   <!-- ========== MAIN ========== -->
  <body style="background-image:url({{ asset('front/assets/images/bg_pengaduan.jpg') }}); background-size: cover; background-repeat:   no-repeat; background-position: center center; object-fit:cover" >
    <!-- Contact Form Section -->
    <div class="container space-top-3 space-bottom-2">
      <div class="row">
        
        <div class="col-lg-6" style="margin:auto;">
          <div class="ml-lg-5">
            <!-- Form -->
            <form method="POST" action="{{ route('pengajuan.simpan')}}" class="js-validate card shadow-lg mb-4" id="basic-form">
              <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                <h2 class="h4 mb-0">Pengajuan Informasi</h2>
              </div>
                @csrf
              <div class="card-body p-4 p-md-6">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label for="firstName" class="input-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" id="firstName" placeholder="Nama Lengkap Anda" aria-label="Nataly" required
                             data-msg="Masukkan nama Anda">
                    </div>
                    <!-- End Form Group -->
                  </div>

                   <div class="col-sm-12">
                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label for="lastName" class="input-label">Nomor Telepon</label>
                      <input type="text" class="form-control" name="nomor" id="lastName" placeholder="Contoh: 081xxxxxxxxx" aria-label="081xxxxxxxxx" required
                             data-msg="Masukkan nomor telepon">
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-12">
                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label for="emailAddress" class="input-label">Email</label>
                      <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Contoh: diskominfo@gmail.com" aria-label="emailanda@gmail.com" required
                             data-msg="Please enter a valid email address">
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-12">
                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label for="message" class="input-label">Rincian informasi yang diinginkan:</label>
                      <div class="input-group">
                        <textarea class="form-control" rows="4" name="isi" id="message" placeholder="Masukkan informasi yang diinginkan" aria-label="Hi there, I would like to ..." required
                                  data-msg="Masukkan informasi yang diinginkan"></textarea>
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <button type="submit" class="btn btn-block btn-primary transition-3d-hover">Kirim</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Form Section -->
  </body>
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
<script>
  <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  
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
 <script>
{!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}

</script>

<script type="text/javascript">
$(document).ready(function() {
$("#basic-form").validate({
rules: {
nama : {
required: true,
},
nomor: {
required: true,
},
email: {
required: true,
},
isi: {
required: true,
},
}
});
});
</script>

</script>
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
  
@if(session('status'))
sweetAlert();
@endif
</script>

@endpush

