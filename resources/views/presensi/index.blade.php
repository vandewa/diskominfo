@section('title', 'Presensi')	
@extends('layouts/template-admin')
@section('kondisi15','active')

@section('container')

<div class="content">
	<div class="container">
    <h1 class="text-center">Presensi Hari ini</h1>
		<div class="row">
		<div class="col-12 ">
			<div class="jam-digital">
			<div id="jam"></div>
			<div id="unit">
				<span>Jam</span>
				<span>Menit</span>
				<span>Detik</span>
			</div>
			</div>
		</div>
	</div>

		<form name="myForm" method="POST" action="{{ route('presensi.store') }}" onsubmit="return validateForm()">
			@csrf
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2"></div>
                  <div class="col-md-6 col-sm-6">
                     <div id="my_camera"></div><br/>
                     <input type="hidden" name="image" class="image-tag">
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <div id="results">Your captured image will appear here...</div>
                  </div>
                  <div class="col-md-12 text-center">
                     <br/>
                     <div class="d-flex justify-content-center">
                           <input type = button value="Ambil Gambar" onClick="take_snapshot()" class="form-control btn-lg ml-4 mr-4" style="background-color: rgb(51, 88, 244) !important;
                              background-image: linear-gradient(to left bottom, rgb(103, 233, 157), rgb(122, 121, 20), rgb(29, 140, 248)) !important;
                              background-size: 210% 210%;
                              background-position: 100% 0;
                              transition: all .15s ease;
                              box-shadow: none;
                              color: #fff;">

                           <button type="submit" class="form-control btn btn-primary btn-lg ml-4 mr-4" style="background-color: rgb(51, 88, 244) !important;
                                    background-image: linear-gradient(to left bottom, rgb(55, 62, 155), rgb(30, 149, 218), rgb(56, 112, 168)) !important;
                                    background-size: 210% 210%;
                                    background-position: 100% 0;
                                    transition: all .15s ease;
                                    box-shadow: none;
                                    color: #fff;">Presensi Sekarang</button>

                        </div>
                  </div>
            </div>
         </div>
		</form>
		
	</div>
	<!-- Basic datatable -->
	<div class="card mt-4">
		<center><h2 style="color: #000000;" class="mt-2"> History Presensi Terakhir</h2></center>
		<div class="card-body">
			<table class="table datatable-basic devan" width="100%">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Pukul</th>
						<th>Keterangan</th>
						<th style="display: none;">Nama Tamu</th>
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

@push('css')
<style>
body {
   background: #282828;
   font-family: tahoma;
}
h1 {
   font-size: 30px;
   letter-spacing: 10px;
   color: #fff;
}
.jam-digital {
   width: 70%;
   margin: 10% 30%;
   text-align: center;
}
#jam span {
   float: left;
   text-align: center;
   font-size: 70px;
   margin: 0 2.5%;
   padding: 20px;
   width: 15%;
   border-radius: 10px;
   box-sizing: border-box;
   color: #fff;
}
#jam span:nth-child(1) {
   background: #a70c0c;
}
#jam span:nth-child(2) {
   background: #f6ab29;
}
#jam span:nth-child(3) {
   background: #298f19;
}
#jam::after {
   content: "";
   display: block;
   clear: both;
}
#unit span {
   float: left;
   width: 20%;
   margin-top: 20px;
   text-align: center;
   text-transform: uppercase;
   letter-spacing: 2px;
   font-size: 18px;
   color: #fff;
   text-shadow: 1px 1px 1px rgba(10, 10, 10, 0.7)
}
span.turn {
   animation: turn 0.7s ease;
}
@keyframes turn {
   0% {transform: rotateX(0deg)}
   100% {transform: rotateX(360deg)}
}
@media screen and (max-width: 980px){
   #jam span {
      float: left;
      text-align: left;
      font-size: 40px;
      margin: 0 1.0%;
      padding: 10px;
      width: 20%;
   }
   h1 {
      margin: 5px 5%;
   }
   .jam-digital {
      width: 100%;
      margin: 10% 15%;
   }
   #unit span {
      width: 22%;
   }
}
</style>
	
@endpush

@push('js')

<script language="JavaScript">
    Webcam.set({
        width: 320,
		height: 240,
		crop_width: 260,
		crop_height: 260,
        image_format: 'jpeg',
        jpeg_quality: 90,
        fps: 60   
    });
    
    Webcam.attach( '#my_camera' );
    
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>

<script>
	function validateForm() {
	let x = document.forms["myForm"]["image"].value;
	if (x == "") {
		alert("Silahkan klik tombol 'Ambil Gambar' dahulu :)");
		return false;
	}
}
</script>

<script>
	function animation(span) {
   span.className = "turn";
   setTimeout(function () {
      span.className = ""
   }, 700);
}

function jam() {
   setInterval(function () {

      var waktu = new Date();
      var jam   = document.getElementById('jam');
      var hours = waktu.getHours();
      var minutes = waktu.getMinutes();
      var seconds = waktu.getSeconds();

      if (waktu.getHours() < 10)
      {
         hours = '0' + waktu.getHours();
      }
      if (waktu.getMinutes() < 10)
      {
         minutes = '0' + waktu.getMinutes();
      }
      if (waktu.getSeconds() < 10)
      {
         seconds = '0' + waktu.getSeconds();
      }
      jam.innerHTML  = '<span>' + hours + '</span>'
                     + '<span>' + minutes + '</span>'
                     + '<span>' + seconds +'</span>';

      var spans      = jam.getElementsByTagName('span');
      animation(spans[2]);
      if (seconds == 0) animation(spans[1]);
      if (minutes == 0 && seconds == 0) animation(spans[0]);

   }, 1000);
}

jam();
</script>

<script type="text/javascript">
	function sweetAlert() 
	{  
		Swal.fire(
		'Berhasil!',
		'Anda telah melakukan presensi.',
		'success')
	}

	function sweetAlert2() 
	{  
		Swal.fire({
		icon: 'error',
		title: 'Anda sudah absen masuk hari ini!',
		text: 'Terima kasih :)',
		})
	}

	function sweetAlert3() 
	{  
		Swal.fire({
		icon: 'error',
		title: 'Anda sudah absen keluar hari ini!',
		text: 'Terima kasih :)',
		})
	}
	
	@if(session('status'))
	sweetAlert();
	@endif

	@if(session('status_duplicate'))
	sweetAlert2();
	@endif

	@if(session('status_duplicate_keluar'))
	sweetAlert3();
	@endif
</script>

<script type="text/javascript">
    var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        'sDom': 't',
        ajax: window.location.href,
         "order": [[ 3, "desc" ]],
        columns: [
            { data: 'tanggalnya', nama: 'tanggalnya', orderable: false, searchable: false },
            { data: 'jamnya', name: 'jamnya', orderable: false, searchable: false },
            { data: 'keterangan', name: 'keterangan', orderable: false, searchable: false },
            { data: 'created_at', nama: 'created_at', visible: false },
        ]
    });
</script>
	
@endpush
