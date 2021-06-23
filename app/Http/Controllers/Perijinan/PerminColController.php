<?php

namespace App\Http\Controllers\Perijinan;

use App\Http\Controllers\Controller;
use App\Models\PermintaanColoctn;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;
use Session;
Class PerminColController extends Controller{
    public function index(){

    }
    public function create()
    {
        return view('perijinan.permintaan-colocation.create');
    }

    public function store(Request $request)
    {
        $data = PermintaanColoctn::create($request->all());
        if($data){
            Session::flush('keterangan', 'Data berhasil di simpan');
        }
        return redirect()->to('/pengajuanizin');
    }
}
