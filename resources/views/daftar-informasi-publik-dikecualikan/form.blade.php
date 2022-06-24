<div class="form-group row">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Tahun<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::number('waktu_pembuatan', null, [ 'class' => 'form-control','placeholder' => 'Tahun','required'])}}
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

<div class="form-group row">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Informasi Yang Dikecualikan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('informasi_dikecualikan', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Dasar Hukum Pengecualian Informasi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('dasar_hukum', null,['class' => 'form-control', 'id' => 'editor-full', ])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Dibuka<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('dibuka', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-6">Ditutup<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::textarea('ditutup', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-6">
        <label class="col-form-label col-lg-6">Jangka Waktu<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group">
                {{Form::text('jangka_waktu', null, [ 'class' => 'form-control','placeholder' => 'Tahun','required'])}}
            </div>
        </div>
    </div>
</div>


<div class="d-flex justify-content-end align-items-center">
    <a href="{{ route('dip-dikecualikan.index') }}" class="btn btn-secondary ml-2 buttonnya">Batal</a></button>
    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
</div>
            