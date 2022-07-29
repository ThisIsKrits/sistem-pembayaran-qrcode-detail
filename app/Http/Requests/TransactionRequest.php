<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'id_paket'    =>  'required|integer|exists:wifi_packages,id',
            'nama' => 'required|max:100',
            'alamat'=> 'required|max:100',
            'email'=> 'required|max:255',
            'phone'=> 'required|max:15',
            'transaction_total'=>'required'
        ];
    }
}
