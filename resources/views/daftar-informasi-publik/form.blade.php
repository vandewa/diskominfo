<div class="row">
    <div class="col-md-6">
        <!-- Left aligned buttons -->
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label class="col-form-label col-lg-6">Pilih Jenis Daftar Informasi Publik<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                                {{Form::select('type',get_daftar_informasi_publik(),null,['class' => 'form-control',])}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-6">Nomor<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {{Form::text('nomor', null, [ 'class' => 'form-control','placeholder' => 'Nomor','required'])}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-6">Jenis Informasi<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {{Form::text('jenis_informasi', null, [ 'class' => 'form-control','placeholder' => 'Jenis Informasi','required'])}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-6">Tahun<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {{Form::number('waktu_pembuatan', null, [ 'class' => 'form-control','placeholder' => 'Tahun','required'])}}
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{ route('daftar-informasi-publik.index') }}" class="btn btn-secondary ml-2 buttonnya">Batal</a></button>
                    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </div>
        </div>
        <!-- /left aligned buttons -->
    </div>
</div>