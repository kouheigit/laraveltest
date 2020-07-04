<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vali2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
     if ($this->path() == 'fourth/vali2')
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
	'age.between'=>'nurmeric|hello',
        ];

    }
   
    public function messages()
    {
	    return [
		    'name.required'=>'名前は必ず入力して下さい',
		    'mail.email'=>'メールアドレスが必要です',
		    'age.between'=>'年齢は0~150の間で入力して下さい',
		    'age.hello'=>'Hello! 入力して下さい',
	    ];
    }
 }
