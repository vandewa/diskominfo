
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                    {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Alamat<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                 {{Form::text('alamat', null, ['class' => 'form-control ','placeholder' => 'Masukkan alamat','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Pekerjaan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            {{Form::text('pekerjaan', null, ['class' => 'form-control ','placeholder' => 'Masukkan pekerjaan','required'])}}
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Nomor<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                 {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor Whatsapp','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Email<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::email('email', null, ['class' => 'form-control ','placeholder' => 'Masukkan email','required'])}}
            </div>
        </div>
    </div>
    
    <div class="col-6">
        <label class="col-form-label col-lg-6">Tujuan penggunaan informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('tujuan', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Rincian informasi yang diinginkan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::textarea('rincian', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
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
    <a href="{{route('informasi-publik.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
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
