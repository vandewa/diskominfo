<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaPublikasiStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'instansi' => 'required',
            'informasi' => 'required', 
            'tujuan' => 'required', 
            'tanggal' => 'required', 
            'waktu' => 'required',
            'tempat' => 'required', 
            'cp' => 'required',
            'nomor' => 'required', 
            'status_st' => 'required',
            'file_name'=>'mimes:pdf',
        ];
    }
}
