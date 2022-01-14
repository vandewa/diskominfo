@component('mail::message')
<center> <img src="http://devandewa.wonosobokab.go.id/front/assets/images/kominfo.png"/></center>
<br>
<h1 style="text-align: center;">Laporan Diterima</h1>

<p style="text-align:center">Anda berhasil melaporkan permasalahan dengan nomor tiket sebagai berikut.</p>
@component('mail::button', ['url' => url('pengajuanizin?q='.$no)])
    {{$no}} 
@endcomponent
<p style="color: black; text-align:center">Untuk cek status silahkan klik nomor diatas.</p>
<p style="color: black; text-align:center">
Laporan anda akan segera ditindaklanjuti oleh petugas kami.</p>
<p style="color: black; text-align:center">Terima kasih.</p>

{{-- <p>Untuk cek status silahkan klik link berikut :<br>
http://devandewa.wonosobokab.go.id/pengajuanizin?q={{$no}}</p>
<br> --}}
<center><b>&copy; Diskominfo Kabupaten Wonosobo</b></center>
@endcomponent