<?php

namespace App\Http\Requests;

use App\Models\PersonalHistoryForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPersonalHistoryFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('personal_history_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:personal_history_forms,id',
        ];
    }
}
