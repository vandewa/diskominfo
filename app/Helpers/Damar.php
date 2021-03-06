<?php


use App\Models\PinjamTempat;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_code_group')) {
    function get_code_group($code)
    {
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }
}

if (!function_exists('gen_no_akses_dc')) {
    function gen_no_akses_dc()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\AksesDc::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'ADC-' . $no;
    }
}

if (!function_exists('gen_layanan_server')) {
    function gen_layanan_server()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\LayananServer::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'LSV-' . $no;
    }
}

if (!function_exists('gen_penambahan_vps')) {
    function gen_penambahan_vps()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\PenambahanVps::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'VPB-' . $no;
    }
}

if (!function_exists('gen_perubahan_vps')) {
    function gen_perubahan_vps()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\PerubahanVps::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'PVP-' . $no;
    }
}

if (!function_exists('gen_colocation_server')) {
    function gen_colocation_server()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\ColocationServer::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'CSV-' . $no;
    }
}

if (!function_exists('gen_kunjungan_dc')) {
    function gen_kunjungan_dc()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\KunjunganDc::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'KDC-' . $no;
    }
}

if (!function_exists('gen_pengajuan_server')) {
    function gen_pengajuan_server()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\PengajuanServer::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'PSV-' . $no;
    }
}

if (!function_exists('gen_no_tiket')) {
    function gen_no_tiket()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\Tiket::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'TKT-' . $no;
    }
}

if (!function_exists('gen_pinjam_alat')) {
    function gen_pinjam_alat()
    {
        $no = Date('y-m-') . str_pad(1, 3, '0', STR_PAD_LEFT);
        $terakhir = \App\Models\PinjamPeralatan::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at', 'desc')->first();
        if ($terakhir) {
            $no = Date('y-m-') . str_pad((int) substr($terakhir->no, -3) + 1, 3, 0, STR_PAD_LEFT);
        }
        return 'PPE-' . $no;
    }
}

if (!function_exists('list_user')) {
    function list_user()
    {
        return \App\Models\User::pluck('name', 'id');
    }
}

if (!function_exists('label_prioritas')) {
    function label_prioritas($a)
    {
        if ($a == 4) {
            return 'badge badge-danger';
        } elseif ($a == 3) {
            return 'badge badge-warning';
        } elseif ($a == 2) {
            return 'badge badge-primay';
        } else {
            return 'badge badge-purple';
        }
    }

}if (!function_exists('tempat_rapat')) {
    function tempat_rapat()
    {
        $value = Cache::remember('users', 60, function () {
            return PinjamTempat::where('status_st', '=', 'STATUS_ST_01')->count();
        });
        return $value;
    }

}

if (!function_exists('get_daftar_informasi_publik')) {
    function get_daftar_informasi_publik()
    {
        return \App\Models\ComCode::where('code_group', 'JENIS_INFORMASI_PUBLIK_TP')
        ->where('code_cd', '!=', 'JENIS_INFORMASI_PUBLIK_TP_04')
        ->pluck('code_nm', 'code_cd');
    }
}
