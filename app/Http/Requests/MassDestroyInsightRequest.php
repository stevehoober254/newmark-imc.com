<?php

namespace App\Http\Requests;

use App\Models\Insight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInsightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('insight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:insights,id',
        ];
    }
}
