<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'address' => ['required'],
            'max_capacity' => ['required'],
            'description' => ['required'],
            'type' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'image' => ['required','image'],
            'difficulty' => ['required'],
            'id_room' => ['required']
        ];
    }
}
