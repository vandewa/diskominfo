    <div class="w-100 sm-6 mx-lg-auto">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group row">
                        <label for="" class="col-md-2">
                           Tahun
                        </label>
                        <div class="col-md-6">
                            {{Form::number('waktu_pembuatan',request('waktu_pembuatan'),['class' => 'name form-control', 'placeholder' => "Masukkan Tahun"])}}
                        </div>
                        <div class="col-md-3">
                          <button type="submit" class="btn btn-primary"> Cari</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>

        <h3>I. INFORMASI WAJIB DIUMUMKAN SECARA BERKALA</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="text-center">NO.</th>
					<th class="text-center">JENIS INFORMASI</th>
					<th class="text-center">RINGKASAN INFORMASI</th>
					<th class="text-center">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="text-center">PENANGGUNG JAWAB</th>
					<th class="text-center">WAKTU PENERBITAN INFORMASI</th>
					<th class="text-center">BENTUK INFORMASI</th>
					<th class="text-center">RETENSI ARSIP</th>
					<th class="text-center">LINK</th>
				</tr>
				<tr class="active">
					<th class="text-center">(1)</th>
					<th class="text-center">(2)</th>
					<th class="text-center">(3)</th>
					<th class="text-center">(4)</th>
					<th class="text-center">(5)</th>
					<th class="text-center">(6)</th>
					<th class="text-center">(7)</th>
					<th class="text-center">(13)</th>
					<th class="text-center">(14)</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($data1 as $row )
			<tr>
				<td class="besar"><b>{{ $row->nomor }}</b></td>
				<td colspan="8" class="besar"><b>{{ $row->jenis_informasi }}</b></td>
			</tr>
			@foreach ($row->anak as $anakan )
				<td class="kecil">{{ $anakan->nomor }}</td>
				<td class="kecil">{{ $anakan->jenis_informasi }}</td>
				<td class="kecil">{{ $anakan->ringkasan_informasi }}</td>
				<td class="kecil">{{ $anakan->pejabat_yg_menguasai }}</td>
				<td class="kecil">{{ $anakan->penanggungjawab_informasi }}</td>
				<td class="kecil">{{ $anakan->waktu_pembuatan }}</td>
				<td class="kecil">{{ $anakan->bentuk_informasi }}</td>
				<td class="kecil">{{ $anakan->retensi }}</td>
				<td class="kecil">{!! $anakan->link !!}</td>
			@endforeach
			@endforeach
		    <tr>
			</tbody>
		</table>

        <h3>II. INFORMASI WAJIB TERSEDIA SETIAP SAAT</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="text-center">NO.</th>
					<th class="text-center">JENIS INFORMASI</th>
					<th class="text-center">RINGKASAN INFORMASI</th>
					<th class="text-center">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="text-center">PENANGGUNG JAWAB</th>
					<th class="text-center">WAKTU PENERBITAN INFORMASI</th>
					<th class="text-center">BENTUK INFORMASI</th>
					<th class="text-center">RETENSI ARSIP</th>
					<th class="text-center">LINK</th>
				</tr>
				<tr class="active">
					<th class="text-center">(1)</th>
					<th class="text-center">(2)</th>
					<th class="text-center">(3)</th>
					<th class="text-center">(4)</th>
					<th class="text-center">(5)</th>
					<th class="text-center">(6)</th>
					<th class="text-center">(7)</th>
					<th class="text-center">(13)</th>
					<th class="text-center">(14)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data2 as $row )
                  	<tr>
						<td class="besar"><b>{{ $row->nomor }}</b></td>
						<td colspan="8" class="besar"><b>{{ $row->jenis_informasi }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td class="kecil">{{ $anakan->nomor }}</td>
						<td class="kecil">{{ $anakan->jenis_informasi }}</td>
						<td class="kecil">{{ $anakan->ringkasan_informasi }}</td>
						<td class="kecil">{{ $anakan->pejabat_yg_menguasai }}</td>
						<td class="kecil">{{ $anakan->penanggungjawab_informasi }}</td>
						<td class="kecil">{{ $anakan->waktu_pembuatan }}</td>
						<td class="kecil">{{ $anakan->bentuk_informasi }}</td>
						<td class="kecil">{{ $anakan->retensi }}</td>
						<td class="kecil">{!! $anakan->link !!}</td>
					</tr>
                      
                    @endforeach
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

		<h3>III. INFORMASI WAJIB DIUMUMKAN SECARA SERTA MERTA</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="text-center">NO.</th>
					<th class="text-center">JENIS INFORMASI</th>
					<th class="text-center">RINGKASAN INFORMASI</th>
					<th class="text-center">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="text-center">PENANGGUNG JAWAB</th>
					<th class="text-center">WAKTU PENERBITAN INFORMASI</th>
					<th class="text-center">BENTUK INFORMASI</th>
					<th class="text-center">RETENSI ARSIP</th>
					<th class="text-center">LINK</th>
				</tr>
				<tr class="active">
					<th class="text-center">(1)</th>
					<th class="text-center">(2)</th>
					<th class="text-center">(3)</th>
					<th class="text-center">(4)</th>
					<th class="text-center">(5)</th>
					<th class="text-center">(6)</th>
					<th class="text-center">(7)</th>
					<th class="text-center">(13)</th>
					<th class="text-center">(14)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data3 as $row )
                  	<tr>
						<td class="besar"><b>{{ $row->nomor }}</b></td>
						<td colspan="8" class="besar"><b>{{ $row->jenis_informasi }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td class="kecil">{{ $anakan->nomor }}</td>
						<td class="kecil">{{ $anakan->jenis_informasi }}</td>
						<td class="kecil">{{ $anakan->ringkasan_informasi }}</td>
						<td class="kecil">{{ $anakan->pejabat_yg_menguasai }}</td>
						<td class="kecil">{{ $anakan->penanggungjawab_informasi }}</td>
						<td class="kecil">{{ $anakan->waktu_pembuatan }}</td>
						<td class="kecil">{{ $anakan->bentuk_informasi }}</td>
						<td class="kecil">{{ $anakan->retensi }}</td>
						<td class="kecil">{!! $anakan->link !!}</td>
					</tr>
    
                    @endforeach
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

		<h3>IV. DAFTAR INFORMASI YANG DIKECUALIKAN</h3>
        <table class="table table-bordered">
			<thead>
					<tr class="active">
						<th class="text-center" rowspan="2" >NO.</th>
						<th class="text-center" rowspan="2">INFORMASI YANG DIKECUALIKAN</th>
						<th class="text-center" rowspan="2">DASAR HUKUM<br/>
						PENGECUALIAN INFORMASI</th>
						<th class="text-center" colspan="2">KONSEKUENSI / PERTIMBANGAN BAGI PUBLIK</th>
						<th class="text-center" rowspan="2">JANGKA WAKTU</th>
					</tr>
					<tr>
						<th class="text-center">DIBUKA</th>
						<th class="text-center">DITUTUP</th>

					</tr>
					<tr class="active">
						<th class="text-center">(1)</th>
						<th class="text-center">(2)</th>
						<th class="text-center">(3)</th>
						<th class="text-center">(4)</th>
						<th class="text-center">(5)</th>
						<th class="text-center">(6)</th>
					</tr>
			</thead>
			<tbody>
                  @foreach ($data4 as $row )
	                  	<td style="text-align:left" class="kecil">{{ $row->nomor }}</td>
						<td class="kecil">{{ $row->informasi_dikecualikan }}</td>
						<td class="kecil">{!! $row->dasar_hukum !!}</td>
						<td class="kecil">{{ $row->dibuka }}</td>
						<td class="kecil">{{ $row->ditutup }}</td>
						<td class="kecil">{{ $row->jangka_waktu }}</td>
					</tr>
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

    </div>
  

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <style>
	.kecil {
		font-size: 13px;
		}
	.besar {
		font-size: 14px;
		}
  </style>
@endpush

@push('js')
<script>
<script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</script>

@endpush