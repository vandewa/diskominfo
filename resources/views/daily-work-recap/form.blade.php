<input type="hidden" name="name" value="{{ auth()->user()->id }}">
<div class="col-6">
    <label class="col-form-label col-lg-2">Tanggal<span class="text-danger">*</span></label>
    <div class="col-lg-12">
        <div class="form-group form-group-feedback form-group-feedback-left">
             @if(!empty($date))
                {{Form::text('date', $date,['class' => 'form-control daterange-single'])}}
            @else
                {{Form::text('date', null,['class' => 'form-control daterange-single'])}}
            @endif
            <div class="form-control-feedback form-control-feedback-lg">
                <i class="icon-calendar22"></i>
            </div>
        </div>
    </div>
 </div>

<div class="mb-4">
    <div class="form-group row" style="margin-bottom: 0.25rem">
        <div class="col-6">
            <label class="col-form-label col-lg-2">Uraian Kegiatan<span class="text-danger">*</span></label>
            <div class="col-lg-12">
                @if(!empty($date))
                    <textarea name="description" id="editor-full" >{{ $data->description }}</textarea>
                @else
                    <textarea name="description" id="editor-full" ></textarea>
                @endif
            </div>
        </div>
        <div class="col-6">
            <label class="col-form-label col-lg-2">Realisasi Output<span class="text-danger">*</span></label>
            <div class="col-lg-12">
                @if(!empty($date))
                    <textarea name="output" class="form-control" id="editor-readonly">{{ $data->output }}</textarea>
                @else
                    <textarea name="output" class="form-control" id="editor-readonly"></textarea>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="text-right mt-5">
    <a href="{{route('daily-work-recap.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
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
@endpush
