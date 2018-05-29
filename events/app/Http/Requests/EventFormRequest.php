<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
                'title'=>'required|min:3',
                'description'=>'required|min:5'
        ];
    }
    public function messages()
    {
        return [
          'title.required' => 'Veuillez rentrer un titre',
          'title.min' => 'Veuillez rentrer un titre d\'au minimum :min caractères',

         'description.required'=> 'Veuillez rentrer une :attribute',
          'description.min' => 'Veuillez rentrer une :attribute d\' au minimum :min caractères'
        ];
    }
}
