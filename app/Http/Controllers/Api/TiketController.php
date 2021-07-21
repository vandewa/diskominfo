<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function getTiket() {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])->paginate(20);

        return response()->json([
            "status" => "success",
            "data" => $data,
        ],200);
    }
}

