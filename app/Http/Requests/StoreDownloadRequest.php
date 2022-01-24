<?php

namespace App\Http\Requests;

use App\Models\Download;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDownloadRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_management_access');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
            'document_file' => [
                'required',
            ],
            'title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
