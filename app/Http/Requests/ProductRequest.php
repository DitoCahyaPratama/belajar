<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:50',
            'stock' => 'required|numeric',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Nama harus bertipe string',
            'name.min' => 'Input minimal untuk nama adalah 4',
            'name.max' => 'Input maksimal untuk nama adalah 50',

            'stock.required' => 'Stock harus diisi',
            'stock.numeric' => 'Stock harus bertipe angka',
        ];
    }
}
