<?php


if(!function_exists('get_code_group')){
    function get_code_group($code){
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }
}
if(!function_exists('gen_no_akses_dc')){
    function gen_no_akses_dc(){
        $no = Date('y-m-').str_pad(1, 6, '0', STR_PAD_LEFT );
        $terakhir = \App\Models\AksesDc::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at','desc')->first();
        if($terakhir)
        {
            $no = Date('y-m-').str_pad((int)substr($terakhir->no,-6) + 1,6,0,STR_PAD_LEFT);
        }
        return 'ADC-'.$no;
    }
}
