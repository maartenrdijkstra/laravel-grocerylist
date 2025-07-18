<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() {
        return true;
    }

    public function rules() {
    return [
        'name' => 'required|max:255',
        'description' => 'nullable',
        'category_id' => 'required|exists:categories,id',
    ];
}
}