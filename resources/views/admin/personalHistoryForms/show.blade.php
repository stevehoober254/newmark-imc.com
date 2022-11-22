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
                            {{ trans('cruds.personalHistoryForm.fields.award_achieved') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->award_achieved }}
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
                            {{ trans('cruds.personalHistoryForm.fields.practice_area_you_are_interested_in') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->practice_area_you_are_interested_in }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.skills') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->skills }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.type_of_engagement') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->type_of_engagement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.preferred_workstation') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->preferred_workstation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.salary_expectations') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->salary_expectations }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.why_would_you_like_to_join_our_team') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->why_would_you_like_to_join_our_team }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.facebook_url') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->facebook_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.twitter_url') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->twitter_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.linked_in_url') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->linked_in_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.do_you_have_personal_website') }}
                        </th>
                        <td>
                            {{ App\Models\PersonalHistoryForm::DO_YOU_HAVE_PERSONAL_WEBSITE_SELECT[$personalHistoryForm->do_you_have_personal_website] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.portfolio_url') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->portfolio_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.other_links_works') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->other_links_works }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.current_step') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->current_step }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.organization_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->organization_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->number_of_employees_supervised_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.start_date_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->start_date_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.end_date_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->end_date_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->description_of_the_roles_and_responsibilities_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_one') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->reason_for_leaving_one }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.organization_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->organization_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->number_of_employees_supervised_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.start_date_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->start_date_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.end_date_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->end_date_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->description_of_the_roles_and_responsibilities_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_two') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->reason_for_leaving_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.organization_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->organization_three }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->number_of_employees_supervised_three }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.start_date_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->start_date_three }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.end_date_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->end_date_three }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->description_of_the_roles_and_responsibilities_three }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_three') }}
                        </th>
                        <td>
                            {{ $personalHistoryForm->reason_for_leaving_three }}
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