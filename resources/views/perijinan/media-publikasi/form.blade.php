
<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                    {{Form::text('nama', null, [ 'class' => 'form-control', 'placeholder' => 'Masukkan nama','required'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Instansi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('instansi', null, [ 'class' => 'form-control','placeholder' => 'Masukkan nama instansi','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            {{Form::text('informasi', null, [ 'class' => 'form-control', 'placeholder' => 'Masukkan informasi','required'])}}
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Tujuan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('tujuan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100,])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Tanggal<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                @if(!empty($tanggal))
                {{Form::text('tanggal', $tanggal,['class' => 'form-control daterange-single'])}}
                @else
                {{Form::text('tanggal', null,['class' => 'form-control daterange-single'])}}
                @endif
            </div>
        </div>
    </div>
    
    <div class="col-6">
        <label class="col-form-label col-lg-6">Waktu<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                    {{Form::time('waktu', null,['class' => 'form-control', 'placeholder' =>'Waktu'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Tempat<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('tempat', null, [ 'class' => 'form-control','placeholder' => 'Masukkan tempat','required'])}}
            </div>
        </div>  
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Kontak person/ penanggung jawab<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('nomor', null, [ 'class' => 'form-control','placeholder' => 'Masukkan nama kontak person/ penanggung jawab','required'])}}
            </div>
        </div>
    </div>
</div>

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
    <a href="{{route('media-publikasi.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
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
