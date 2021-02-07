<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioStoreRequest extends FormRequest
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
            'client_id' => '',
            'category_id' => '',
            'data' => 'required|string',
            'name' => 'required|string',
            'content' => 'required|string',
            'path_full_img' => 'required',
            'path_img' => 'required',
        ];
    }
}
