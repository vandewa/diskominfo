
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama pemohon (ASN)'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">NIP<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::number('nip', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan NIP'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">OPD<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('instansi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan OPD'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Bidang / Bagian / UPTD<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('bidang', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama bidang / bagian / UPTD'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Alamat<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('alamat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan alamat kantor'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">No. Telepon<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::number('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Nomor kontak person pemohon'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Email<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::text('email', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan email OPD'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Jenis Layanan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::select('jenislayanan_tp',get_code_group('JENISLAYANAN_TP'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Layanan -'])}}
            </div>
        </div>
    </div>
</div>

@if($data->jenislayanan_tp == 'JENISLAYANAN_TP_02')
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama Subdomain<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::text('nama_subdomain', null, ['class' => 'form-control ', 'placeholder' => 'Nama Subdomain'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Pilihan Domain<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::select('domain_st',get_code_group('DOMAIN_ST'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Subdomain -'])}}
            </div>
        </div>
    </div>
</div>
<div class="col-6">
    <label class="col-form-label col-lg-2">Hosting<span class="text-danger">*</span></label>
    <div class="col-lg-12">
        <div class="form-group form-group-feedback form-group-feedback-left">
            {{Form::radio('hosting', '0')}} Ya &nbsp;&nbsp;&nbsp;
            {{Form::radio('hosting', '1')}} Tidak
        </div>
    </div>
</div>
@endif

@if($data->jenislayanan_tp == 'JENISLAYANAN_TP_03')
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama Subdomain<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::text('nama_subdomain_cpanel', null, ['class' => 'form-control ', 'placeholder' => 'Nama Subdomain'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Pilihan Domain<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::select('domain_st_cpanel',get_code_group('DOMAIN_ST'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Subdomain -'])}}
            </div>
        </div>
    </div>
</div>
@endif

@if($data->jenislayanan_tp == 'JENISLAYANAN_TP_04')
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama Email<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="input-group">
               {{Form::text('nama_email', null, ['class' => 'form-control ', 'placeholder' => 'Nama email'])}}
               <span class="input-group-append">
                    <span class="input-group-text">@wonosobokab.go.id</span>
                </span>
            </div>
        </div>
    </div>
</div>
@endif

@if(!empty($lampiran))
<div class="form-group row">
    <div class="col-12">
        <label class="col-form-label col-lg-6">Lampiran<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               <iframe height="500" src="{{ asset('uploads/layanan/'.$data->file_name) }}" width="100%"></iframe>
            </div>
        </div>
    </div>
</div>
@endif

<hr>

<div class="form-group row">
    <label class="col-form-label col-lg-2">Status Permintaan Layanan<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        {{Form::select('status_st',get_code_group('STATUS_ST'),null,['class' => 'form-control',])}}
    </div>
</div>

 @if(!empty($alasan))

<div class="devandewa">
    <div class="form-group row">
        <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
        <div class="col-lg-10">
            {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa'])}}
        </div>
    </div>
</div>

@else

<div class="devandewa" style="display: none">
    <div class="form-group row">
        <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
        <div class="col-lg-10">
            {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa2'])}}
        </div>
    </div>
</div>

@endif

<div class="text-right mt-5">
    <a href="{{route('permohonan-subdomain.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
    <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
</div>

@push('js')
<script src="{{ asset ('css/import/flatpickr.js')}}"></script>
<script src="{{ asset ('css/import/flatpickr.min.js')}}"></script>
<script src="{{ asset ('css/import/id.js')}}"></script></script>
<script>
flatpickr("input[type=datetime-local]", {
    "locale": "id"
});
</script>
<script>
flatpickr("input[type=time]", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
});
</script>
<script>
    $(document).ready(function(){
        $('select[name=status_st]').change(function(){
            let isi = $(this).val();

            if(isi == 'STATUS_ST_03' || isi == 'STATUS_ST_04' ){
                $('.devandewa').show('slow');
            }else{
                $('.devandewa').hide('slow');
                // $('#aa').val('');
            }
        });
    });
</script>

@endpush
