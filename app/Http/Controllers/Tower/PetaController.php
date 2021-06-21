<?php

namespace App\Http\Controllers\Tower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GoogleMaps;

class PetaController extends Controller
{
    public function index()
    {
//        $response = \GoogleMaps::load('geocoding')
//            ->setParam (['address' =>'santa cruz'])
//            ->get();

        return view('tower.peta.index');
    }
}
