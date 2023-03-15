<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
	        'name' => 'required|string|max:255',
	        'surname' => 'required|string|max:255',
	        'age' => 'required|numeric',
	        'phone' => 'required|numeric|digits:10',
	        'gender' => 'required|in:male,female',
	        'car_id' => 'required|exists:cars,id',
	        'car_color_id' => 'required|exists:car_colors,id',
	        'car_year'=>'required|integer'
        ];
    }
	public function messages()
	{
		return [
			'name.required' => 'Name is required!',
			'name.string' => 'Name must be string!',
			'surname.required' => 'Surname is required!',
			'surname.string' => 'Surname must be string!',
			'age.required' => 'Age is required!',
			'age.numeric' => 'Age must be numeric!',
			'gender.required' => 'Name is required!',
		];
	}
}
