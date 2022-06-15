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
					<th class="th-tengah">NO.</th>
					<th class="th-tengah">JENIS INFORMASI</th>
					<th class="th-tengah">RINGKASAN INFORMASI</th>
					<th class="th-tengah">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="th-tengah">PENANGGUNG JAWAB</th>
					<th class="th-tengah">WAKTU PENERBITAN INFORMASI</th>
					<th class="th-tengah">BENTUK INFORMASI</th>
					<th class="th-tengah">RETENSI ARSIP</th>
					<th class="th-tengah">LINK</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(13)</th>
					<th class="th-tengah">(14)</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($data1 as $row )
			<tr>
				<td style="text-align:left"><b>{{ $row->nomor }}</b></td>
				<td colspan="8"><b>{{ $row->jenis_informasi }}</b></td>
			</tr>
			@foreach ($row->anak as $anakan )
				<td style="text-align:left">{{ $anakan->nomor }}</td>
				<td>{{ $anakan->jenis_informasi }}</td>
				<td><div style="text-align: left;">{{ $anakan->ringkasan_informasi }}</div><small></small></td>
				<td>{{ $anakan->pejabat_yg_menguasai }}</td>
				<td>{{ $anakan->penanggungjawab_informasi }}</td>
				<td>{{ $anakan->waktu_pembuatan }}</td>
				<td>{{ $anakan->bentuk_informasi }}</td>
				<td>{{ $anakan->retensi }}</td>
				<td>{!! $anakan->link !!}</td>
			@endforeach
			@endforeach
		    <tr>
			</tbody>
		</table>

        <h3>II. INFORMASI WAJIB TERSEDIA SETIAP SAAT</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="th-tengah">NO.</th>
					<th class="th-tengah">JENIS INFORMASI</th>
					<th class="th-tengah">RINGKASAN INFORMASI</th>
					<th class="th-tengah">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="th-tengah">PENANGGUNG JAWAB</th>
					<th class="th-tengah">WAKTU PENERBITAN INFORMASI</th>
					<th class="th-tengah">BENTUK INFORMASI</th>
					<th class="th-tengah">RETENSI ARSIP</th>
					<th class="th-tengah">LINK</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(13)</th>
					<th class="th-tengah">(14)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data2 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomor }}</b></td>
						<td colspan="8"><b>{{ $row->jenis_informasi }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomor }}</td>
						<td>{{ $anakan->jenis_informasi }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan_informasi }}</div><small></small></td>
						<td>{{ $anakan->pejabat_yg_menguasai }}</td>
						<td>{{ $anakan->penanggungjawab_informasi }}</td>
						<td>{{ $anakan->waktu_pembuatan }}</td>
						<td>{{ $anakan->bentuk_informasi }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>{!! $anakan->link !!}</td>
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
					<th class="th-tengah">NO.</th>
					<th class="th-tengah">JENIS INFORMASI</th>
					<th class="th-tengah">RINGKASAN INFORMASI</th>
					<th class="th-tengah">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="th-tengah">PENANGGUNG JAWAB</th>
					<th class="th-tengah">WAKTU PENERBITAN INFORMASI</th>
					<th class="th-tengah">BENTUK INFORMASI</th>
					<th class="th-tengah">RETENSI ARSIP</th>
					<th class="th-tengah">LINK</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(13)</th>
					<th class="th-tengah">(14)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data3 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomor }}</b></td>
						<td colspan="8"><b>{{ $row->jenis_informasi }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomor }}</td>
						<td>{{ $anakan->jenis_informasi }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan_informasi }}</div><small></small></td>
						<td>{{ $anakan->pejabat_yg_menguasai }}</td>
						<td>{{ $anakan->penanggungjawab_informasi }}</td>
						<td>{{ $anakan->waktu_pembuatan }}</td>
						<td>{{ $anakan->bentuk_informasi }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>{!! $anakan->link !!}</td>
					</tr>
    
                    @endforeach
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

		<h3>IV. DAFTAR INFORMASI YANG DIKECUALIKAN</h3>
        <table class="table table-bordered">
			<thead>
				{{-- <tr class="active">
					<th class="th-tengah">NO.</th>
					<th class="th-tengah">JENIS INFORMASI</th>
					<th class="th-tengah">RINGKASAN INFORMASI</th>
					<th class="th-tengah">PEJABAT/UNIT/SATKER YANG MENGUASAI INFORMASI</th>
					<th class="th-tengah">PENANGGUNG JAWAB</th>
					<th class="th-tengah">WAKTU PENERBITAN INFORMASI</th>
					<th class="th-tengah">BENTUK INFORMASI</th>
					<th class="th-tengah">RETENSI ARSIP</th>
					<th class="th-tengah">LINK</th>
				</tr> --}}
				{{-- <tr class="active">
						<th class="th-tengah" rowspan="2" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:46px; text-align:center; vertical-align:middle; white-space:normal; width:49px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">NO.</span></span></span></strong></th>
						<th class="th-tengah" rowspan="2" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:normal; width:211px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">INFORMASI YANG DIKECUALIKAN</span></span></span></strong></th>
						<th class="th-tengah" rowspan="2" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:normal; width:236px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">DASAR HUKUM<br />
						PENGECUALIAN INFORMASI</span></span></span></strong></th>
						<th class="th-tengah" colspan="2" style="border-bottom:1px solid black; border-left:none; border-right:.7px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:normal; width:364px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">KONSEKUENSI / PERTIMBANGAN BAGI PUBLIK</span></span></span></strong></th>
						<th class="th-tengah" rowspan="2" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:normal; width:195px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">JANGKA WAKTU</span></span></span></strong></th>
					</tr>
					<tr>
						<th class="th-tengah" style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:23px; text-align:center; vertical-align:middle; white-space:normal; width:182px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">DIBUKA</span></span></span></strong></th>
						<th class="th-tengah" style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:normal; width:182px"><strong><span style="font-size:13px"><span style="font-family:&quot;Bookman Old Style&quot;,serif"><span style="color:black">DITUTUP</span></span></span></strong></th>

					</tr> --}}

					<tr class="active">
						<th class="th-tengah" rowspan="2" style="text-align:center; vertical-align:middle; white-space:normal; width:49px"><strong><span style="font-size:13px">NO.</span></strong></th>
						<th class="th-tengah" rowspan="2" style="text-align:center; vertical-align:middle; white-space:normal; width:211px"><strong><span style="font-size:13px">INFORMASI YANG DIKECUALIKAN</span></strong></th>
						<th class="th-tengah" rowspan="2" style="text-align:center; vertical-align:middle; white-space:normal; width:236px"><strong><span style="font-size:13px">DASAR HUKUM<br />
						PENGECUALIAN INFORMASI</span></strong></th>
						<th class="th-tengah" colspan="2" style="text-align:center; vertical-align:middle; white-space:normal; width:364px"><strong><span style="font-size:13px">KONSEKUENSI / PERTIMBANGAN BAGI PUBLIK</span></strong></th>
						<th class="th-tengah" rowspan="2" style="text-align:center; vertical-align:middle; white-space:normal; width:195px"><strong><span style="font-size:13px">JANGKA WAKTU</span></strong></th>
					</tr>
					<tr>
						<th class="th-tengah" style="text-align:center; vertical-align:middle; white-space:normal; width:182px"><strong><span style="font-size:13px">DIBUKA</span></strong></th>
						<th class="th-tengah" style="text-align:center; vertical-align:middle; white-space:normal; width:182px"><strong><span style="font-size:13px">DITUTUP</span></strong></th>

					</tr>
			</thead>
			<tbody>
                  @foreach ($data4 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomor }}</b></td>
						<td colspan="8"><b>{{ $row->jenis_informasi }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomor }}</td>
						<td>{{ $anakan->jenis_informasi }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan_informasi }}</div><small></small></td>
						<td>{{ $anakan->pejabat_yg_menguasai }}</td>
						<td>{{ $anakan->penanggungjawab_informasi }}</td>
						<td>{{ $anakan->waktu_pembuatan }}</td>
						<td>{{ $anakan->bentuk_informasi }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>{!! $anakan->link !!}</td>
					</tr>
                      
                    @endforeach
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

    </div>
  

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
</script>

@endpush