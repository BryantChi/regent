<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\ActivityInfo;
use Illuminate\Foundation\Http\FormRequest;

class UpdateActivityInfoRequest extends FormRequest
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
        $rules = ActivityInfo::$rules;
        
        return $rules;
    }
}
