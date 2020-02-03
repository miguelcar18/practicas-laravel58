<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                Rule::unique('events', 'name')->ignore($this->event->id),
            ],
            'address' => 'required|string',
            'start_date' => 'required',
            'end_date' => 'required',
            'client' => 'required|string',
            'phone' => 'required|string',
            'products' => 'required|array',
            'products.*' => 'string|exists:products,name|distinct',
            'quantities' => 'required|array',
            'quantities.*' => 'numeric|min:1',
            'identification' => 'required|string',
            'email' => 'required|email',
        ];
    }
}
