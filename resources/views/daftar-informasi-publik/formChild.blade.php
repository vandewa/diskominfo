<input type="hidden" name="root" value="{{ $root->id??$data->root }}">

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Pilih Jenis Daftar Informasi Publik<span class="text-danger">*</span></label>
        <div class="col-lg-12">
        <div class="form-group">
                {{Form::select('type',get_code_group('JENIS_INFORMASI_PUBLIK_TP'),null,['class' => 'form-control',])}}
        </div>
    </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Nomor<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('nomor', null, [ 'class' => 'form-control','placeholder' => 'Nomor','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Jenis Informasi <span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('jenis_informasi', null, [ 'class' => 'form-control','placeholder' => 'Jenis Informasi','required'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Ringkasan Isi Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('ringkasan_informasi', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Pejabat Yang Menguasai Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('pejabat_yg_menguasai', null, [ 'class' => 'form-control','placeholder' => 'Pejabat Yang Menguasai Informasi','required'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Penanggungjawab Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('penanggungjawab_informasi', null, [ 'class' => 'form-control','placeholder' => 'Penanggungjawab Informasi','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Waktu Pembuatan Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::number('waktu_pembuatan', null, [ 'class' => 'form-control','placeholder' => 'Tahun','required'])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Bentuk Informasi Yang Tersedia<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('bentuk_informasi', null, [ 'class' => 'form-control','placeholder' => 'Bentuk Informasi','required'])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Retensi Arsip<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('retensi', null, [ 'class' => 'form-control','placeholder' => 'Retensi Arsip','required'])}}
            </div>
        </div>
    </div>

</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-12">
        <label class="col-form-label col-lg-6">Jenis Media Yang Memuat Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
               {{Form::textarea('link', null,['class' => 'form-control', 'id' => 'editor-full'])}}
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end align-items-center mt-3">
    <a href="{{ route('daftar-informasi-publik.index') }}" class="btn btn-secondary ml-2">Batal</a></button>
    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
</div>
