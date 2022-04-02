<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermohonanMagangStoreRequest extends FormRequest
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
            'asal' => 'required',
            'jurusan' => 'required',
            'lama_magang' => 'required',
            'nomor_surat' => 'required',
            'nomor' => 'required',
            'file_name'=>'mimes:pdf',

        ];
    }
}
