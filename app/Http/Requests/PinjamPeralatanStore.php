<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamPeralatanStore extends FormRequest
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
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_selesai', 
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai', 
            'alat' => 'required',
            'lama_pinjam' => 'required', 
            'nomor' => 'required', 
            'file_name'=>'mimes:pdf',
            // 'captcha' => 'required|captcha',
        ];
    }
}
