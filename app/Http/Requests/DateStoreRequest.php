<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use Illuminate\Foundation\Http\FormRequest;

class DateStoreRequest extends FormRequest
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
            'date'=> ['required' , 'date', new DateBetween],
            'user_id'=> ['required'],
            // 'status'=> ['required'],
        ];
    }
}
