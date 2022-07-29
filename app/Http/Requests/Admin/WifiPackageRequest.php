<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class WifiPackageRequest extends FormRequest
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
            
            'nama_paket' => 'required|max:25',
            'speed' => 'required|max:15',
            'informasi_paket' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'harga_paket'=> 'required|integer|',
        ];
    }
}
