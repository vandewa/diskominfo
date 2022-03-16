<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoomCreateValidation extends FormRequest
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
            'nama_opd' => 'required',
            'peminjam' => 'required', 
            'no_hp' => 'required', 
            'topik' => 'required', 
            'tanggal' => 'required', 
            'jam_mulai' => 'required', 
            'jam_selesai' => 'required', 
            'peserta' => 'required', 
        ];
    }
}
