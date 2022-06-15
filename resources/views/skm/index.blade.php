@section('title', 'Rekap Data SKM')
@section('menu','Rekap Data SKM')
@section('submenu','List Rekap Data SKM')
@extends('layouts/template-admin')
@section('kondisi13','active')

@section('halaman')
<span class="breadcrumb-item active">Rekap Data SKM</span>
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif

<div class="container-fluid py-4">
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-info border-radius-lg">
                    <h6 class="text-black text-capitalize ps-3">Rekap Data SKM</h6>
                </div>
            </div>
            <div class="card-body">
               
                <h4 style="text-align: center;">Total Responden = {{ $jumlah_responden }}</h4>
                <h4 style="text-align: center;">&sum; &Umacr; Tertimbang = {{ $total_tertimbang }}</h4>
                <h4 style="text-align: center;">Nilai IKM = {{ $nilai_ikm }}</h4>
            
                @php
                    $sum = 0;
                @endphp 
                
                @foreach ($soal as $index=>$row) 
                    <div class="col-xl-12 col-lg-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p style="text-align: center; color: black;">
                                    <!-- loop soal -->
                                    {{'('.$row->id.') '.$row->soal }}
                                </p>
                                   <div class="chart has-fixed-height" id="pie_basic{{ $index }}"></div>
                                        @php
                                           $jumlah = 0;
                                        @endphp  
                        
                                            @foreach ($row->jawaban as $jawaban)
                                                @php 
                                                    $jumlah = $jumlah + ($jawaban->nilai*$jawaban->responden_jawaban_count);   
                                                @endphp
                                            @endforeach

                                        @php
                                            $tertimbang = round((round( $jumlah / $jumlah_responden, 4) / $jumlah_soal ), 4); 
                                            $rata_rata = round( $jumlah / $jumlah_responden, 4);
                                            $tambah = $sum += $tertimbang;
                                        @endphp

                                     &sum; Total Nilai Soal = {{ $jumlah }}
                                    <br>&Umacr; Rata - Rata = {{ $rata_rata  }}
                                    <br>&Umacr; Rata - Rata Tertimbang = {{ $tertimbang }} 
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
       @foreach ($soal as $index=>$row) 
       var pie_basic_element{{ $index }} = document.getElementById('pie_basic{{ $index }}');
    
            // Initialize chart
            var pie_basic{{ $index }} = echarts.init(pie_basic_element{{ $index }});


            //
            // Chart config
            //

            // Options
            pie_basic{{ $index }}.setOption({

                // Colors
                color: [
                    '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
                    '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
                    '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                    '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                ],

                // Global text styles
                textStyle: {
                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                    fontSize: 13
                },

                // Add title
                title: {
                    // text: 'Browser popularity',
                    // subtext: 'Open source information',
                    left: 'center',
                    textStyle: {
                        fontSize: 17,
                        fontWeight: 500
                    },
                    subtextStyle: {
                        fontSize: 12
                    }
                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0.75)',
                    padding: [10, 15],
                    textStyle: {
                        fontSize: 13,
                        fontFamily: 'Roboto, sans-serif'
                    },
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    top: 'center',
                    left: 0,
                    data: [
                        @foreach ( $row->jawaban as $jawaban )
                            {!! "'" . $jawaban->jawaban . "'," !!}
                        @endforeach
                    ],
                    itemHeight: 8,
                    itemWidth: 8
                },

                // Add series
                series: [{
                    name: '{{ $row->soal}}',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#fff'
                        }
                    },
                    data: [
                        @foreach ($row->jawaban as $jawaban )
                            {!! "{value: " .$jawaban->responden_jawaban_count. ", name: '".$jawaban->jawaban."'}," !!}
                        @endforeach
                    ]
                }]
            });
       
       @endforeach
</script>

@endpush
