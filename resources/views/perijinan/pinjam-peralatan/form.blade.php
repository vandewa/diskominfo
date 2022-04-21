<div class="form-group row " style="margin-bottom: 0.25rem">
    <div class="col-12 ">
        <label class="col-form-label col-lg-12 d-flex justify-content-center"><h1>{{ $data->no }}</h1></label>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                    {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required',
                    'readonly' => true])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Instansi/Lembaga<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                    {{Form::text('instansi', null, ['class' => 'form-control ','placeholder' => 'Masukkan
                    instansi/lembaga','required', 'readonly' => true])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Dari Tanggal<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                @if(!empty($tanggal_mulai))
                {{Form::text('tanggal_mulai', $tanggal_mulai,['class' => 'form-control daterange-single', 'disabled' =>
                'disabled',])}}
                @else
                {{Form::text('tanggal_mulai', null,['class' => 'form-control daterange-single', 'disabled' => 'disabled',])}}
                @endif
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Sampai Tanggal<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                @if(!empty($tanggal_selesai))
                {{Form::text('tanggal_selesai', $tanggal_selesai,['class' => 'form-control daterange-single', 'disabled' =>
                'disabled',])}}
                @else
                {{Form::text('tanggal_selesai', null,['class' => 'form-control daterange-single', 'disabled' => 'disabled',])}}
                @endif
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Alat Yang Pipinjam<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('alat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama
                alat','required', 'readonly' => true])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <label class="col-form-label col-lg-6">Kontak Person<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor telepon
                kontak person','required', 'readonly' => true])}}
            </div>
        </div>
    </div>
</div>

@if(!empty($lampiran))
<div class="form-group row">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Lampiran<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                <iframe height="500" src="{{ asset('uploads/layanan/'.$data->file_name) }}" width="100%"></iframe>
            </div>
        </div>
    </div>

    @if(!empty($bukti))
    <div class="col-6">
        <label class="col-form-label col-lg-6">Surat Pernyataan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                <iframe height="500" src="{{ asset('uploads/bukti/'.$data->bukti) }}" width="100%"></iframe>
            </div>
        </div>
    </div>
    @endif


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
    <a href="{{route('pinjam-peralatan.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
    <a href="{{route('perijinan:cetak.surat.alat', $data->id )}}" class="btn bg-warning-400">Cetak Surat <i class="icon-download7 ml-2"></i></a>
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
    $(document).ready(function () {
        $('select[name=status_st]').change(function () {
            let isi = $(this).val();

            if (isi == 'STATUS_ST_03' || isi == 'STATUS_ST_04') {
                $('.devandewa').show('slow');
            } else {
                $('.devandewa').hide('slow');
                // $('#aa').val('');
            }

        });
    });
</script>

@endpush