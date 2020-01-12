<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\BaseRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends BaseRequest
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
            'code' => [
                'required',
                'string',
                Rule::unique('products', 'code')->ignore($this->product->id),
            ],
            'name' => [
                'required',
                'string',
                Rule::unique('products', 'name')->ignore($this->product->id),
            ],
            'price' => 'required|numeric|min:0|gt:0',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
