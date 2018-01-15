<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'accountNo' => 'required|unique:accounts,accNo',
            'accountName' => 'required',
            'initialBalance' => 'required|numeric',
            'openingDate' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'accountNo.required' => 'You must fill up this field',
            'accountNo.unique' => 'This account number is not unique'
        ];
    }
}
