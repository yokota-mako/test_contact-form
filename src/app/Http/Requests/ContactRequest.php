<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:10'],
            'email' => ['required', 'email', 'max:255'],
            'first' => ['required', 'string', 'max:255'],
            'second' => ['required', 'string', 'max:255'],
            'third' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string'],
            'content' => ['required', 'string'],
                ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名前を入力してください' ,
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'first.required' => '電話番号を入力してください',
            'first.digits_between' => '電話番号は５桁までの数字で入力してください',
            'second.required' => '電話番号を入力してください',
            'second.digits_between' => '電話番号は5桁までの数字で入力してください',
            'third.required' => '電話番号を入力してください',
            'third.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
