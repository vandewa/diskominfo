<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamTempatStoreRequest extends FormRequest
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
            'tanggal' => 'required', 
            'waktu' => 'required',
            'acara' => 'required', 
            'peserta' => 'required', 
            'cp' => 'required',
            'file_name'=>'mimes:pdf',
        ];
    }
}
