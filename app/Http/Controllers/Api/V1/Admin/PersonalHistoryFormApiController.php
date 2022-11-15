<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\Admin\PersonalHistoryFormResource;
use App\Models\PersonalHistoryForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonalHistoryFormApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('personal_history_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PersonalHistoryFormResource(PersonalHistoryForm::with(['team'])->get());
    }

    public function show(PersonalHistoryForm $personalHistoryForm)
    {
        abort_if(Gate::denies('personal_history_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PersonalHistoryFormResource($personalHistoryForm->load(['team']));
    }

    public function destroy(PersonalHistoryForm $personalHistoryForm)
    {
        abort_if(Gate::denies('personal_history_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personalHistoryForm->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
