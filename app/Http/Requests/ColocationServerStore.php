<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColocationServerStore extends FormRequest
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
            'instansi' => 'required', 
            'bidang' => 'required', 
            'alamat' => 'required', 
            'nomor' => 'required', 
            'email' => 'required|email', 
            'merk' => 'required', 
            'type' => 'required', 
            'model' => 'required', 
            'cpu' => 'required', 
            'hardisk' => 'required', 
            'ram' => 'required', 
        ];
    }
}
