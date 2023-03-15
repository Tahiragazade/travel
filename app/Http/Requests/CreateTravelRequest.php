<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTravelRequest extends FormRequest
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
	        'region_id' => 'required|exists:regions,id',
	        'customer_id' => 'required|exists:customers,id',
	        'start_date' => 'required|date',
	        'duration' => 'required|numeric',
	        'distance' => 'required|numeric',

        ];
    }
	public function messages()
	{
		return [

		];
	}
}
