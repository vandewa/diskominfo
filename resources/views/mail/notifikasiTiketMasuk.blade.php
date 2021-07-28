@component('mail::message')
# Laporan Diterima

Anda berhasil melaporkan permasalahan dengan no tiket sebagai berikut.
@component('mail::button', ['url' => ''])
    {{$no}}
@endcomponent
Laporan anda akan segera ditindak lanjuti oleh petugas kami.



Terimakasih,<br>
Diskomifo Wonosobo
@endcomponent
