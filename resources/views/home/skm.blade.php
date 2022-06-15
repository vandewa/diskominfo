@section('title', 'Dinas Kominfo Wonosobo')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header"
class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
    data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
    }'>
@endsection

@section('kondisi2')
    <i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection



<!-- ========== MAIN ========== -->
<main id="content" role="main" style="background-image:url({{ asset('front/assets/images/arjuna.jpg') }}); background-size: cover; background-repeat:   no-repeat; background-position: center center; object-fit:cover">
    <!-- Content Section -->
    <div class="">
        <div class="container space-2">
            <form action="{{route('front.skm.post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="card mt-6">
                    <div class="card-body p-4">
                        <div class="row mt-3">
                            <div class="col">
                                <p class="font-size-3" style="text-transform: uppercase; text-align: center; color: black;">kuesioner survei kepuasan masyarakat<br>
                                    pada unit layanan diskominfo kabupaten wonosobo</p>
                                <hr style="border: 2px solid black;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="font-size-1" style="text-transform: capitalize; color: black;">tanggal survei : <b>{{ Carbon\Carbon::now()->isoFormat('dddd,D MMMM Y') }}</b>
                                     </p>
                                <input type="hidden" name="tanggal_responden" value="<?= date('Y-m-d H:i:s'); ?>">
                            </div>
                            <div class="col">
                                <p class="font-size-1" style="text-transform: capitalize; color: black; text-align: end;">jam survei : <b>{{ Carbon\Carbon::now()->format('H : i') }} WIB</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="font-size-2" style="color: black; text-transform: uppercase; text-align: center;">profil</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table style="width: 100%;">
                                    <tr>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;">jenis kelamin</p>
                                        </td>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;"> : </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="jkel" id="laki" class="custom-control-input 1" value="laki - laki" required autofocus>
                                                        <label class="custom-control-label" for="laki">Laki - Laki</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="jkel" id="perempuan" class="custom-control-input 1" value="perempuan" required>
                                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;">pendidikan</p>
                                        </td>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;"> : </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="sd" class="custom-control-input 2" value="sd" required>
                                                        <label class="custom-control-label" for="sd">SD</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="smp" class="custom-control-input 2" value="smp" required>
                                                        <label class="custom-control-label" for="smp">SMP</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="sma" class="custom-control-input 2" value="sma" required>
                                                        <label class="custom-control-label" for="sma">SMA</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="d3" class="custom-control-input 2" value="d3" required>
                                                        <label class="custom-control-label" for="d3">D3</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="s1" class="custom-control-input 2" value="s1" required>
                                                        <label class="custom-control-label" for="s1">S1</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="s2" class="custom-control-input 2" value="s2" required>
                                                        <label class="custom-control-label" for="s2">S2</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pendidikan" type="checkbox" id="s3" class="custom-control-input 2" value="s3" required>
                                                        <label class="custom-control-label" for="s3">S3</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;">pekerjaan</p>
                                        </td>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;"> : </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="pns" class="custom-control-input 3" value="pns" required>
                                                        <label class="custom-control-label" for="pns">PNS</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="tni" class="custom-control-input 3" value="tni" required>
                                                        <label class="custom-control-label" for="tni">TNI</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="polri" class="custom-control-input 3" value="polri" required>
                                                        <label class="custom-control-label" for="polri">POLRI</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="swasta" class="custom-control-input 3" value="swasta" required>
                                                        <label class="custom-control-label" for="swasta">SWASTA</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="wirausaha" class="custom-control-input 3" value="wirausaha" required>
                                                        <label class="custom-control-label" for="wirausaha">WIRAUSAHA</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="pekerjaan" type="checkbox" id="lainnya" class="custom-control-input 3" value="lainnya">
                                                        <label class="custom-control-label" for="lainnya">Lainnya</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="p-lainnya" hidden>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="pekerjaan" disabled id="exampleFormControlInput1" class="form-control form-control-xs">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;">jenis layanan yang diterima </p>
                                        </td>
                                        <td>
                                            <p class="font-size-1" style="color: black; text-transform: capitalize;"> : </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input name="jenis_layanan" type="text" id="exampleFormControlInput1" class="form-control form-control-xs" required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="font-size-2" style="color: black; text-transform: uppercase; text-align: center;">pendapat responden tentang pelayanan</p>
                                <p class="font-size-1" style="color: black; text-transform: capitalize; font-style: italic; text-align: center;">(lingkari kode huruf sesuai jawaban masyarakat/responden)</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-6"> -->
                           @php
                               $no = 0;
                               $nomernya = 0;
                           @endphp
                            @foreach ($soal as $value) 
                                <div class="col-6">
                                {{ $value->id . ". " . $value->soal }}
                                <br>
                                <input type="hidden" name="pertanyaan[{{ $no }}][soal]" value="{{ $value->id }}">
                                
                        
                                @foreach ($value->jawaban as $qw) 
                                
                                    <label class="form-control" for="formControlRadioEg{{ $nomernya }}">
                                        <span class="form-check">
                                            <input name="pertanyaan[{{ $no }}][jawaban]" type="radio" class="form-check-input"   id="formControlRadioEg{{ $nomernya }}" value="{{ $qw->id }}">
                                            <span class="form-check-label">{{ $qw->jawaban }}</span>
                                        </span>
                                    </label>
                                

                                    {{-- <div class="form-check">
                                        {!! str_repeat('&nbsp;', 3) !!}
                                        <input class="form-check-input" type="radio" name="pertanyaan[{{ $no }}][jawaban]" id="flexRadioDefault1" value="{{ $qw->id }}" required>
                                        <label class="form-check-label" for="flexRadioDefault1"> {{ $qw->jawaban }} </label>
                                    </div> --}}
                                   
                                 @php
                                    $nomernya = $nomernya + 1;
                                @endphp

                                @endforeach
                                @php
                                    $no = $no + 1;
                                @endphp
                                <br>
                             </div>
                            @endforeach            
                        </div>
                        <div class="row">
                            <div class="col">
                                <input style="float: right;" type="submit" class="btn btn-primary" value="KIRIM">
                            </div>
                        </div>
            </form>
        </div>
</main>
<!-- ========== END MAIN ========== -->
@endsection

@push('js')

<script type="text/javascript">
    function sweetAlert() 
    {  
        Swal.fire(
        'Berhasil!',
        'Terima kasih sudah mengisi survey :) ',
        'success')
    }

    @if(session('status'))
    sweetAlert();
    @endif
</script>

<script>
      $('[class="custom-control-input 1"]').change(function() {
            if (this.checked) {
                $('[class="custom-control-input 1"]').not(this).prop('checked', false);
                $('[class="custom-control-input 1"]').prop('required', false);
            }
        });

        $('[class="custom-control-input 2"]').change(function() {
            if (this.checked) {
                $('[class="custom-control-input 2"]').not(this).prop('checked', false);
                $('[class="custom-control-input 2"]').prop('required', false);
            }
        });
        $('[class="custom-control-input 3"]').change(function() {
            if (this.checked) {
                $('[class="custom-control-input 3"]').not(this).prop('checked', false);
                $('[class="custom-control-input 3"]').prop('required', false);
                $("#p-lainnya").attr('hidden', true);
            }
        });

        $('[id="lainnya"]').change(function() {
        $('#p-lainnya').removeAttr('hidden');
        if (!this.checked) {
            $("#p-lainnya").attr('hidden', true);
            $("#exampleFormControlInput1").prop('disabled', true);
        } else {
            $("#exampleFormControlInput1").prop('disabled', false);
        }
    });
</script>
    
@endpush

