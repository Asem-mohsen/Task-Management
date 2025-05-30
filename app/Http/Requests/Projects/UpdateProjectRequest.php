<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
}
