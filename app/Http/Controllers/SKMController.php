<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\Responden;
use App\Models\RespondenAnswer;
use App\Models\Jawaban;
use DB;


class SKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        $soal = Soal::with(['jawaban'])->get();

        return view('home.skm', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $soal = Soal::with(['jawaban' => function($a) {
            $a->withCount('respondenJawaban')
            ;
        }])->withSum('jawaban', 'nilai')->get();
        
        $jumlah_responden = Responden::count();
        
        $jumlah_soal = Soal::count();

        $sum =0;

        foreach ($soal as $index=>$row){
            $jumlah = 0;
            foreach ($row->jawaban as $jawaban){
                $jumlah = $jumlah + ($jawaban->nilai*$jawaban->responden_jawaban_count);
            }
                $rata_rata = round( $jumlah / $jumlah_responden, 4); 
                $tertimbang = round((round( $jumlah / $jumlah_responden, 4) / $jumlah_soal ), 4);
                $total_tertimbang = $sum += $tertimbang;
        }

        $nilai_ikm = round($total_tertimbang * 25, 2);

        return view('skm.index', compact('soal', 'jumlah_responden', 'jumlah_soal', 'total_tertimbang', 'nilai_ikm'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $responden = Responden::create([
        'pendidikan' => $request->pendidikan,
        'pekerjaan' => $request->pekerjaan,
        'jkel' => $request->jkel,
        'jenis_layanan' => $request->jenis_layanan,
       ]);

        foreach ($request->pertanyaan as $isam) {
            RespondenAnswer::create([
                'id_responden' =>  $responden->id,
                'id_soal' => $isam['soal'],
                'id_jawaban' => $isam['jawaban'],
            ]);
        }

        return redirect(route('front.skm'))->with('status', 'oke');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
