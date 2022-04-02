<div class="form-group row d-flex justify-content-center">
    <div class="col-3">
        <label class="col-form-label col-lg-6">Name<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                    {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama (tanpa ada spasi)'])}}
            </div>
            <div class="form-control-feedback form-control-feedback-lg">
                <i class="icon-vcard"></i>
                </div>
        </div>
    </div>

    <div class="col-3">
        <label class="col-form-label col-lg-6">Alias<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <div class="form-group form-group-feedback form-group-feedback-left">
                    {{Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Alias'])}}
                <div class="form-control-feedback form-control-feedback-lg">
                <i class="icon-vcard"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group row d-flex justify-content-center">
    <div class="col-6">
    <label class="col-form-label col-lg-6">Deskripsi<span class="text-danger">*</span></label>
        <div class="col-lg-12">
                {{Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4, 'cols' => 100, ])}}
        </div>
    </div>
</div>


@push('js')
<script src=" {{ asset('js/validation/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\RoleCreateValidation') !!}
    
@endpush