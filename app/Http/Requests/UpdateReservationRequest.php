<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $reservationId = $this->route('reservation');

        return [
            'LieuDepart' => 'required|string|max:50',
            'LieuArriver' => 'required|string|max:250',
            'Date' => 'required|date',
            'Heure' => 'required|date_format:H:i',
        ];
    }
}
