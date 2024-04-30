<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'long_description' => 'required|string|max:255',
        ];
    }
}
