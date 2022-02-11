<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostingcreateValidation extends FormRequest
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
            'judul_posting' => 'required',
            'slug' => 'required',
            'posisi' => 'required',
            'id_kategori' => 'required',
            'kata_kunci' => 'required',
            'keterangan' => 'required',
            'file_name[]'=>'max:2048|mimes:jpeg,png,jpg'
        ];
    }
}
