<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //ini untuk hak akses
        //contoh
        //return auth()->user()->isAdmin();
        //maka yang boleh mengakses request ini adalah admin

        //karena ini hanya contoh, jadi return true
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
            'list' => ['required', 'min:3']
        ];
    }
}
