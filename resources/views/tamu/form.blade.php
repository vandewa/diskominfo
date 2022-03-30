    <div class="col-6">
        <label class="col-form-label col-lg-4">Nama Tamu<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                {{Form::text('nama', null,[
                'class' => 'form-control'.($errors->has('nama') ? ' border-danger' : ''),
                'placeholder' => 'Nama Tamu'])}}
                @error('nama')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                <div class="form-control-feedback form-control-feedback-lg">
                    <i class="icon-users"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-4">Keperluan<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                {{Form::text('keperluan', null,[
                'class' => 'form-control'.($errors->has('keperluan') ? ' border-danger' : ''),
                'placeholder' => 'Keperluan'])}}
                @error('keperluan')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                <div class="form-control-feedback form-control-feedback-lg">
                    <i class="icon-book"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <label class="col-form-label col-lg-2">Instansi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                 {{Form::text('instansi', null,[
                'class' => 'form-control'.($errors->has('instansi') ? ' border-danger' : ''),
                'placeholder' => 'Instansi'])}}
                @error('topik')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                <div class="form-control-feedback form-control-feedback-lg">
                    <i class="icon-office"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0.25rem">
    <div class="col-6">
        <label class="col-form-label col-lg-2">Jumlah Tamu<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                 {{Form::text('jumlah', null,[
                'class' => 'form-control'.($errors->has('jumlah') ? ' border-danger' : ''),
                'placeholder' => 'Jumlah Tamu'])}}
                @error('topik')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                <div class="form-control-feedback form-control-feedback-lg">
                    <i class="icon-person"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-right">
    <button type="submit" class="btn bg-teal-400">
        Submit form <i class="icon-paperplane ml-2"></i>
    </button>
</div>