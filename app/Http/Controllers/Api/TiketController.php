<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function getTiket()
    {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])
            ->where('petugas_penyelesaian_id', auth('api')->user()->id)->paginate(20);

        return response()->json([
            "status" => "success",
            "data" => $data,
        ], 200);
    }

    public function getTiketBelumSelesai()
    {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])
            ->where('petugas_penyelesaian_id', auth('api')->user()->id)
            ->where('tiket_st', 'TIKET_ST_02')
            ->paginate(20);

        return response()->json([
            "status" => "success",
            "data" => $data,
        ], 200);
    }

    public function getTiketSudahSelesai()
    {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])
            ->where('petugas_penyelesaian_id', auth('api')->user()->id)
            ->where('tiket_st', 'TIKET_ST_03')
            ->paginate(20);

        return response()->json([
            "status" => "success",
            "data" => $data,
        ], 200);
    }

    public function tiketDetail($id)
    {
        $data = Tiket::with(['prioritas', 'kategori', 'status', 'penerima', 'petugas'])->find($id);

        return response()->json([
            "status" => "success",
            "data" => $data,
        ], 200);
    }

    public function tiketUpdate(Request $request, $id)
    {
        $data = Tiket::find($id)->update(
            [
                'deskripsi_penyelesaian' => $request->deskripsi_penyelesaian,
                'tanggal_selesai' => now(),
                'tiket_st' => 'TIKET_ST_03'
            ]
        );

        return response()->json([
            "status" => "success",
            "data" => $data,
        ], 200);
    }
}
