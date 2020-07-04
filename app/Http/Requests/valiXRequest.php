<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valiXRequest extends FormRequest
{
   public function authorize()
    {

     if ($this->path() == 'fourth/valiX')
     {
             return true;
     }else{
             return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'=>'required',
        'mail'=>'email',
        'age.between'=>'nurmeric|between:0,150',
        ];

    }

    public function messages()
    {
            return [
                    'name.required'=>'名前は必ず入力して下さい',
                    'mail.email'=>'メールアドレスが必要です',
                    'age.between'=>'年齢は0~150の間で入力して下さい',
            ];
    }

}
