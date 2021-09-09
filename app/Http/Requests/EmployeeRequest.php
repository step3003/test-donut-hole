<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EmployeeRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
          'first_name' => 'required',
          'last_name' => 'required',
          'patronymic' => 'required',
          'departments' => 'required',
          'gender' => 'nullable|string',
          'salary' => 'required|integer'
        ];
    }


    public function messages()
    {
        return [
            'first_name.required' => 'Поле Имя обязательное',
            'last_name.required' => 'Поле Фамилия обязательное',
            'last_name.required' => 'Поле Отчество обязательное',
            'salary.required' => 'Поле Заработная плата обязательное и должно содержать только цифры',
        ];
    }
}
