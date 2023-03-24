<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public mixed $model;
    public mixed $brand;

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
     * @return array<string, Rule|array|string>
     */

    public function rules(): array
    {
        return [
            'model' => 'required|string|max:255',
            'rentPrice' => 'required|numeric',
            'type' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'nbSeats' => 'required|numeric',
            'nbPassengers' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
