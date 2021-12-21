<?php

namespace App\Http\Requests;

use App\Models\School;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSchoolRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('school_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'academic_year' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'city' => [
                'string',
                'required',
            ],
            'detailed_location' => [
                'string',
                'nullable',
            ],
            'post_office_box' => [
                'string',
                'nullable',
            ],
            'logo' => [
                'required',
            ],
            'contact_2' => [
                'string',
                'nullable',
            ],
            'contact_4' => [
                'string',
                'nullable',
            ],
            'contact_3' => [
                'string',
                'nullable',
            ],
            'contact_1' => [
                'string',
                'required',
            ],
            'website' => [
                'string',
                'nullable',
            ],
        ];
    }
}
