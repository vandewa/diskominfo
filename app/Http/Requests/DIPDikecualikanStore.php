<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DIPDikecualikanStore extends FormRequest
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
            'waktu_pembuatan' => 'required' ,
            'nomor' => 'required' ,
            'informasi_dikecualikan' => 'required' ,
            'dasar_hukum' => 'required' ,
            'dibuka' => 'required' ,
            'ditutup' => 'required' ,
            'jangka_waktu' => 'required' ,
        ];
    }
}
