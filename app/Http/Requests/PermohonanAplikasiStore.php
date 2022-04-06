<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermohonanAplikasiStore extends FormRequest
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
            'nip' => 'required', 
            'nomor' => 'required', 
            'email' => 'required|email', 
            'latar_belakang' => 'required', 
            'tujuan' => 'required', 
            'file_name'=>'mimes:pdf',
        ];
    }
}
