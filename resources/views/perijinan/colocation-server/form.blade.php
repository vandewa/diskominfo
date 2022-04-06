
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama pemohon'])}}
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
                {{Form::text('instansi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama opd'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Bidang/ Bagian/ UPTD<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('bidang', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama bidang'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
     <div class="col-6">
        <label class="col-form-label col-lg-6">Alamat<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('alamat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan alamat'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nomor Telepon<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama telepon / wa'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Email<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{ Form::email('email', null, ['class' => 'form-control ','placeholder' => 'Masukkan email kontak person','required']) }}
            </div>
        </div>
    </div>
</div>

<legend class="text-uppercase font-size-sm font-weight-bold">Spesifikasi Server</legend>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Merk/Brand Server<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('merk', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya asus, hp, dell, dll'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Jenis/Type Server<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('type', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya proliant, TS, EMC, dll'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">CPU Model<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('model', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya intel xeon E5, dll'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">CPU Server<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="input-group">
                 {{Form::text('cpu', null, ['class' => 'form-control '])}}
                <span class="input-group-append">
                    <span class="input-group-text">Core</span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Harddisk Server<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="input-group">
                {{Form::text('hardisk', null, ['class' => 'form-control ', ])}}
                <span class="input-group-append">
                    <span class="input-group-text">GB</span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">RAM Server<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="input-group">
                {{Form::text('ram', null, ['class' => 'form-control ', ])}}
                <span class="input-group-append">
                    <span class="input-group-text">GB</span>
                </span>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="form-group row">
    <label class="col-form-label col-lg-2">Status Permintaan Layanan<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        {{Form::select('status_st',get_code_group('STATUS_ST'),null,['class' => 'form-control',])}}
    </div>
</div>

 @if(!empty($alasan))

<div class="devan-asu">
    <div class="form-group row">
        <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
        <div class="col-lg-10">
            {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa'])}}
        </div>
    </div>
</div>

@else

<div class="devan-asu" style="display: none">
    <div class="form-group row">
        <label class="col-form-label col-lg-2">Alasan<span class="text-danger">*</span></label>
        <div class="col-lg-10">
            {{Form::textarea('alasan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100, 'id' => 'aa2'])}}
        </div>
    </div>
</div>

@endif

<div class="text-right mt-5">
    <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
</div>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
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

            if(isi == 'STATUS_ST_03'){
                $('.devan-asu').show('slow');
            }else{
                $('.devan-asu').hide('slow');
                // $('#aa').val('');
            }
        });
    });
</script>

@endpush
