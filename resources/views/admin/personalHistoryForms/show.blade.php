@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.personalHistoryForm.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.personal-history-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.id') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.full_name') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.age') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.nationality') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.gender') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.marital_status') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->marital_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.current_physical_address') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->current_physical_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.email_address') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.highest_level_of_education') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->highest_level_of_education }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.field_of_study') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->field_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.institution') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->institution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.date_of_graduation') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->date_of_graduation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.award_achieved') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->award_achieved }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.high_school_grade') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->high_school_grade }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.leadership_quality') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->leadership_quality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.organization') }}
                        </th>
                        <td>
                            {!! $personalHistoryForm->organization !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->number_of_employees_supervised }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.start_date') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.end_date') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities') }}
                        </th>
                        <td>
                            {!! $personalHistoryForm->description_of_the_roles_and_responsibilities !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.reason_for_leaving') }}
                        </th>
                        <td>
                            {!! $personalHistoryForm->reason_for_leaving !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.company_name') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_pd') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->number_of_employees_supervised_pd }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.personal-history-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection