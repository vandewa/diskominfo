@component('mail::message')
# Laporan Diterima

Anda berhasil melaporkan permasalahan dengan nomor tiket sebagai berikut.
@component('mail::button', ['url' => ''])
    {{$no}}
@endcomponent
Laporan anda akan segera ditindak lanjuti oleh petugas kami.
Terima kasih<br>

Untuk cek status silahkan klik link berikut<br>
http://devandewa.wonosobokab.go.id/pengajuanizin?q={{$no}}
<br>
Diskominfo Kabupaten Wonosobo
@endcomponent
