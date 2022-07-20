<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaStore extends FormRequest
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
            'tanggalBerangkat' => 'required|before_or_equal:tanggalPulang|date_format:d/m/Y', 
            'tanggalPulang' => 'required|after_or_equal:tanggalBerangkat|date_format:d/m/Y', 
            'jamMulai' => 'required', 
            'nama_id' => 'required', 
            'acara' => 'required', 
            'tempat' => 'required', 
            'surat' => 'required|mimes:pdf', 
        ];
    }
}
