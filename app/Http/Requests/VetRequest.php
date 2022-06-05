<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VetRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:150',
            'firstname' => 'required|max:150',
            'pitomec' => 'required|min:2',
            'pokazatel1' => 'required|max:150',
            'pokazatel2' => 'required|max:150',
            'pokazatel3' => 'required|max:150',
            //
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле имя является обязательным',
            'firstname.required' => 'Поле фамилмя является обязательным',
            'pitomec.required' => 'Поле питомец является обязательным',
            'pokazatel1.required' => 'Поле показатель 1 является обязательным',
            'pokazatel2.required' => 'Поле показатель 2 является обязательным',
            'pokazatel3.required' => 'Поле показатель 3 является обязательным',
        ];
    }
}
