
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

<br>
   <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Contact Form Section -->
    <div class="container space-top-3 space-top-lg-3 space-bottom-2">
      <div class="row">
        <div class="col-lg-6 col-sm-6 mb-9 mb-lg-0">
          <div class="col-sm-6 ml-lg-5 mb-5">
            <h2>Lokasi Kantor</h2>
          </div>
          <div class="embed-responsive embed-responsive-16by9 mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.974287430464!2d109.90367091432174!3d-7.356778574425257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1e023aaf2df%3A0x3fa1aea0b0ca3abc!2sDINAS%20KOMINFO!5e0!3m2!1sid!2sid!4v1618815033657!5m2!1sid!2sid" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

            <div class="row mt-5">
            <div class="col-sm-6">
              <div class="mb-3">
                <span class="d-block h5 mb-1">Telephone:</span>
                <span class="d-block text-body font-size-1"> (0286) 325112</span>
              </div>

              <div class="mb-3">
                <span class="d-block h5 mb-1">Email:</span>
                <span class="d-block text-body font-size-1">diskominfo@wonosobokab.go.id</span>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="mb-3">
                <span class="d-block h5 mb-1">Alamat:</span>
                <span class="d-block text-body font-size-1">Jl. Sabuk Alu No. 2A, Wonosobo, Jawa Tengah</span>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col-lg-6">
          <div class="ml-lg-5">
            <!-- Form -->
            <form method="POST" action="/hubungikami/simpan" class="js-validate card shadow-lg mb-4">
              <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                <h2 class="h4 mb-0">Hubungi Kami</h2>
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
                      <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Contoh: diskominfo@gmail.com" aria-label="emailanda@gmail.com"" required
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
  </main>
  <!-- ========== END MAIN ========== -->
@endsection

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

