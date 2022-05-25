    <div class="w-100 sm-6 mx-lg-auto">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group row">
                        <label for="" class="col-md-2">
                           Tahun
                        </label>
                        <div class="col-md-6">
                            {{Form::number('tahun',request('tahun'),['class' => 'name form-control', 'placeholder' => "Masukkan Tahun"])}}
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
					<th class="th-tengah" width="25">No</th>
					<th class="th-tengah" width="15%">Judul Informasi</th>
					<th class="th-tengah" width="15%">Ringkasan Isi Informasi</th>
					<th class="th-tengah" width="10%">Penanggungjawab Pembuat Informasi</th>
					<th class="th-tengah" width="10%">Waktu Pembuatan / Penerbitan Informasi</th>
					<th class="th-tengah" width="10%">Bentuk Informasi Yang Tersedia</th>
					<th class="th-tengah" width="10%">Jangka Waktu Penyimpanan</th>
					<th class="th-tengah" width="30%">Jenis Media Yang Memuat Informasi</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(8)</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($data1 as $row )
			<tr>
				<td style="text-align:left"><b>{{ $row->nomer }}</b></td>
				<td colspan="7"><b>{{ $row->judul }}</b></td>
			</tr>
			@foreach ($row->anak as $anakan )
				<td style="text-align:left">{{ $anakan->nomer }}</td>
				<td>{{ $anakan->judul }}</td>
				<td><div style="text-align: left;">{{ $anakan->ringkasan }}</div><small></small></td>
				<td>{{ $anakan->tg_jawab }}</td>
				<td>{{ $anakan->tahun }}</td>
				<td>{{ $anakan->bentuk }}</td>
				<td>{{ $anakan->retensi }}</td>
				<td>
					Detail : <br><i class="fa fa-link"></i> <a href="?p=31&amp;id=2">https://kominfo.batangkab.go.id/ppid/?p=31&amp;id=2</a><br><br>
					Website : <br><i class="fa fa-link"></i> <a href="https://kominfo.batangkab.go.id/?p=1&amp;id=1" target="_blank">https://kominfo.batangkab.go.id/?p=1&amp;id=1</a><br><br>							
				</td>
			</tr>
			@endforeach
			@endforeach
		    <tr>
			</tbody>
		</table>

        <h3>II. INFORMASI WAJIB DIUMUMKAN SECARA SERTA MERTA</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="th-tengah" width="25">No</th>
					<th class="th-tengah" width="15%">Judul Informasi</th>
					<th class="th-tengah" width="15%">Ringkasan Isi Informasi</th>
					<th class="th-tengah" width="10%">Penanggungjawab Pembuat Informasi</th>
					<th class="th-tengah" width="10%">Waktu Pembuatan / Penerbitan Informasi</th>
					<th class="th-tengah" width="10%">Bentuk Informasi Yang Tersedia</th>
					<th class="th-tengah" width="10%">Jangka Waktu Penyimpanan</th>
					<th class="th-tengah" width="30%">Jenis Media Yang Memuat Informasi</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(8)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data2 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomer }}</b></td>
						<td colspan="7"><b>{{ $row->judul }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomer }}</td>
						<td>{{ $anakan->judul }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan }}</div><small></small></td>
						<td>{{ $anakan->tg_jawab }}</td>
						<td>{{ $anakan->tahun }}</td>
						<td>{{ $anakan->bentuk }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>
							Detail : <br><i class="fa fa-link"></i> <a href="?p=31&amp;id=2">https://kominfo.batangkab.go.id/ppid/?p=31&amp;id=2</a><br><br>
							Website : <br><i class="fa fa-link"></i> <a href="https://kominfo.batangkab.go.id/?p=1&amp;id=1" target="_blank">https://kominfo.batangkab.go.id/?p=1&amp;id=1</a><br><br>							
						</td>
					</tr>
                      
                    @endforeach
                 	@endforeach
		                           									
					<tr>
			</tbody>
		</table>

		<h3>III. INFORMASI WAJIB TERSEDIA SETIAP SAAT</h3>
        <table class="table table-bordered">
			<thead>
				<tr class="active">
					<th class="th-tengah" width="25">No</th>
					<th class="th-tengah" width="15%">Judul Informasi</th>
					<th class="th-tengah" width="15%">Ringkasan Isi Informasi</th>
					<th class="th-tengah" width="10%">Penanggungjawab Pembuat Informasi</th>
					<th class="th-tengah" width="10%">Waktu Pembuatan / Penerbitan Informasi</th>
					<th class="th-tengah" width="10%">Bentuk Informasi Yang Tersedia</th>
					<th class="th-tengah" width="10%">Jangka Waktu Penyimpanan</th>
					<th class="th-tengah" width="30%">Jenis Media Yang Memuat Informasi</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(8)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data2 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomer }}</b></td>
						<td colspan="7"><b>{{ $row->judul }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomer }}</td>
						<td>{{ $anakan->judul }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan }}</div><small></small></td>
						<td>{{ $anakan->tg_jawab }}</td>
						<td>{{ $anakan->tahun }}</td>
						<td>{{ $anakan->bentuk }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>
							Detail : <br><i class="fa fa-link"></i> <a href="?p=31&amp;id=2">https://kominfo.batangkab.go.id/ppid/?p=31&amp;id=2</a><br><br>
							Website : <br><i class="fa fa-link"></i> <a href="https://kominfo.batangkab.go.id/?p=1&amp;id=1" target="_blank">https://kominfo.batangkab.go.id/?p=1&amp;id=1</a><br><br>							
						</td>
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
					<th class="th-tengah" width="25">No</th>
					<th class="th-tengah" width="15%">Judul Informasi</th>
					<th class="th-tengah" width="15%">Ringkasan Isi Informasi</th>
					<th class="th-tengah" width="10%">Penanggungjawab Pembuat Informasi</th>
					<th class="th-tengah" width="10%">Waktu Pembuatan / Penerbitan Informasi</th>
					<th class="th-tengah" width="10%">Bentuk Informasi Yang Tersedia</th>
					<th class="th-tengah" width="10%">Jangka Waktu Penyimpanan</th>
					<th class="th-tengah" width="30%">Jenis Media Yang Memuat Informasi</th>
				</tr>
				<tr class="active">
					<th class="th-tengah">(1)</th>
					<th class="th-tengah">(2)</th>
					<th class="th-tengah">(3)</th>
					<th class="th-tengah">(4)</th>
					<th class="th-tengah">(5)</th>
					<th class="th-tengah">(6)</th>
					<th class="th-tengah">(7)</th>
					<th class="th-tengah">(8)</th>
				</tr>
			</thead>
			<tbody>
                  @foreach ($data2 as $row )
                  	<tr>
						<td style="text-align:left"><b>{{ $row->nomer }}</b></td>
						<td colspan="7"><b>{{ $row->judul }}</b></td>
					</tr>
              
                    @foreach ($row->anak as $anakan )
	                  	<td style="text-align:left">{{ $anakan->nomer }}</td>
						<td>{{ $anakan->judul }}</td>
						<td><div style="text-align: left;">{{ $anakan->ringkasan }}</div><small></small></td>
						<td>{{ $anakan->tg_jawab }}</td>
						<td>{{ $anakan->tahun }}</td>
						<td>{{ $anakan->bentuk }}</td>
						<td>{{ $anakan->retensi }}</td>
						<td>
							Detail : <br><i class="fa fa-link"></i> <a href="?p=31&amp;id=2">https://kominfo.batangkab.go.id/ppid/?p=31&amp;id=2</a><br><br>
							Website : <br><i class="fa fa-link"></i> <a href="https://kominfo.batangkab.go.id/?p=1&amp;id=1" target="_blank">https://kominfo.batangkab.go.id/?p=1&amp;id=1</a><br><br>							
						</td>
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