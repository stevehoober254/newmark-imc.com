@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.personalHistoryForm.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.personal-history-forms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="full_name">{{ trans('cruds.personalHistoryForm.fields.full_name') }}</label>
                <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text" name="full_name" id="full_name" value="{{ old('full_name', '') }}" required>
                @if($errors->has('full_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('full_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.full_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="age">{{ trans('cruds.personalHistoryForm.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', '') }}" step="1" required>
                @if($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nationality">{{ trans('cruds.personalHistoryForm.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', '') }}" required>
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="gender">{{ trans('cruds.personalHistoryForm.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', '') }}" required>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marital_status">{{ trans('cruds.personalHistoryForm.fields.marital_status') }}</label>
                <input class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" type="text" name="marital_status" id="marital_status" value="{{ old('marital_status', '') }}" required>
                @if($errors->has('marital_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.marital_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_physical_address">{{ trans('cruds.personalHistoryForm.fields.current_physical_address') }}</label>
                <input class="form-control {{ $errors->has('current_physical_address') ? 'is-invalid' : '' }}" type="text" name="current_physical_address" id="current_physical_address" value="{{ old('current_physical_address', '') }}" required>
                @if($errors->has('current_physical_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_physical_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.current_physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email_address">{{ trans('cruds.personalHistoryForm.fields.email_address') }}</label>
                <input class="form-control {{ $errors->has('email_address') ? 'is-invalid' : '' }}" type="email" name="email_address" id="email_address" value="{{ old('email_address') }}" required>
                @if($errors->has('email_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_number">{{ trans('cruds.personalHistoryForm.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" required>
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="highest_level_of_education">{{ trans('cruds.personalHistoryForm.fields.highest_level_of_education') }}</label>
                <input class="form-control {{ $errors->has('highest_level_of_education') ? 'is-invalid' : '' }}" type="text" name="highest_level_of_education" id="highest_level_of_education" value="{{ old('highest_level_of_education', '') }}">
                @if($errors->has('highest_level_of_education'))
                    <div class="invalid-feedback">
                        {{ $errors->first('highest_level_of_education') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.highest_level_of_education_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="field_of_study">{{ trans('cruds.personalHistoryForm.fields.field_of_study') }}</label>
                <input class="form-control {{ $errors->has('field_of_study') ? 'is-invalid' : '' }}" type="text" name="field_of_study" id="field_of_study" value="{{ old('field_of_study', '') }}">
                @if($errors->has('field_of_study'))
                    <div class="invalid-feedback">
                        {{ $errors->first('field_of_study') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.field_of_study_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institution">{{ trans('cruds.personalHistoryForm.fields.institution') }}</label>
                <input class="form-control {{ $errors->has('institution') ? 'is-invalid' : '' }}" type="text" name="institution" id="institution" value="{{ old('institution', '') }}">
                @if($errors->has('institution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.institution_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="award_achieved">{{ trans('cruds.personalHistoryForm.fields.award_achieved') }}</label>
                <textarea class="form-control {{ $errors->has('award_achieved') ? 'is-invalid' : '' }}" name="award_achieved" id="award_achieved">{{ old('award_achieved') }}</textarea>
                @if($errors->has('award_achieved'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_achieved') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.award_achieved_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_graduation">{{ trans('cruds.personalHistoryForm.fields.date_of_graduation') }}</label>
                <input class="form-control {{ $errors->has('date_of_graduation') ? 'is-invalid' : '' }}" type="text" name="date_of_graduation" id="date_of_graduation" value="{{ old('date_of_graduation', '') }}">
                @if($errors->has('date_of_graduation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_graduation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.date_of_graduation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="high_school_grade">{{ trans('cruds.personalHistoryForm.fields.high_school_grade') }}</label>
                <input class="form-control {{ $errors->has('high_school_grade') ? 'is-invalid' : '' }}" type="text" name="high_school_grade" id="high_school_grade" value="{{ old('high_school_grade', '') }}">
                @if($errors->has('high_school_grade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('high_school_grade') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.high_school_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="leadership_quality">{{ trans('cruds.personalHistoryForm.fields.leadership_quality') }}</label>
                <textarea class="form-control {{ $errors->has('leadership_quality') ? 'is-invalid' : '' }}" name="leadership_quality" id="leadership_quality">{{ old('leadership_quality') }}</textarea>
                @if($errors->has('leadership_quality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leadership_quality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.leadership_quality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="practice_area_you_are_interested_in">{{ trans('cruds.personalHistoryForm.fields.practice_area_you_are_interested_in') }}</label>
                <input class="form-control {{ $errors->has('practice_area_you_are_interested_in') ? 'is-invalid' : '' }}" type="text" name="practice_area_you_are_interested_in" id="practice_area_you_are_interested_in" value="{{ old('practice_area_you_are_interested_in', '') }}">
                @if($errors->has('practice_area_you_are_interested_in'))
                    <div class="invalid-feedback">
                        {{ $errors->first('practice_area_you_are_interested_in') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.practice_area_you_are_interested_in_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="skills">{{ trans('cruds.personalHistoryForm.fields.skills') }}</label>
                <input class="form-control {{ $errors->has('skills') ? 'is-invalid' : '' }}" type="text" name="skills" id="skills" value="{{ old('skills', '') }}">
                @if($errors->has('skills'))
                    <div class="invalid-feedback">
                        {{ $errors->first('skills') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.skills_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_of_engagement">{{ trans('cruds.personalHistoryForm.fields.type_of_engagement') }}</label>
                <input class="form-control {{ $errors->has('type_of_engagement') ? 'is-invalid' : '' }}" type="text" name="type_of_engagement" id="type_of_engagement" value="{{ old('type_of_engagement', '') }}">
                @if($errors->has('type_of_engagement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_engagement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.type_of_engagement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="preferred_workstation">{{ trans('cruds.personalHistoryForm.fields.preferred_workstation') }}</label>
                <input class="form-control {{ $errors->has('preferred_workstation') ? 'is-invalid' : '' }}" type="text" name="preferred_workstation" id="preferred_workstation" value="{{ old('preferred_workstation', '') }}">
                @if($errors->has('preferred_workstation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('preferred_workstation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.preferred_workstation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary_expectations">{{ trans('cruds.personalHistoryForm.fields.salary_expectations') }}</label>
                <input class="form-control {{ $errors->has('salary_expectations') ? 'is-invalid' : '' }}" type="number" name="salary_expectations" id="salary_expectations" value="{{ old('salary_expectations', '') }}" step="0.01">
                @if($errors->has('salary_expectations'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary_expectations') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.salary_expectations_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="why_would_you_like_to_join_our_team">{{ trans('cruds.personalHistoryForm.fields.why_would_you_like_to_join_our_team') }}</label>
                <textarea class="form-control {{ $errors->has('why_would_you_like_to_join_our_team') ? 'is-invalid' : '' }}" name="why_would_you_like_to_join_our_team" id="why_would_you_like_to_join_our_team">{{ old('why_would_you_like_to_join_our_team') }}</textarea>
                @if($errors->has('why_would_you_like_to_join_our_team'))
                    <div class="invalid-feedback">
                        {{ $errors->first('why_would_you_like_to_join_our_team') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.why_would_you_like_to_join_our_team_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_url">{{ trans('cruds.personalHistoryForm.fields.facebook_url') }}</label>
                <textarea class="form-control {{ $errors->has('facebook_url') ? 'is-invalid' : '' }}" name="facebook_url" id="facebook_url">{{ old('facebook_url') }}</textarea>
                @if($errors->has('facebook_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.facebook_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_url">{{ trans('cruds.personalHistoryForm.fields.twitter_url') }}</label>
                <textarea class="form-control {{ $errors->has('twitter_url') ? 'is-invalid' : '' }}" name="twitter_url" id="twitter_url">{{ old('twitter_url') }}</textarea>
                @if($errors->has('twitter_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.twitter_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linked_in_url">{{ trans('cruds.personalHistoryForm.fields.linked_in_url') }}</label>
                <textarea class="form-control {{ $errors->has('linked_in_url') ? 'is-invalid' : '' }}" name="linked_in_url" id="linked_in_url">{{ old('linked_in_url') }}</textarea>
                @if($errors->has('linked_in_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linked_in_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.linked_in_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.personalHistoryForm.fields.do_you_have_personal_website') }}</label>
                <select class="form-control {{ $errors->has('do_you_have_personal_website') ? 'is-invalid' : '' }}" name="do_you_have_personal_website" id="do_you_have_personal_website">
                    <option value disabled {{ old('do_you_have_personal_website', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PersonalHistoryForm::DO_YOU_HAVE_PERSONAL_WEBSITE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('do_you_have_personal_website', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('do_you_have_personal_website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('do_you_have_personal_website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.do_you_have_personal_website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="portfolio_url">{{ trans('cruds.personalHistoryForm.fields.portfolio_url') }}</label>
                <textarea class="form-control {{ $errors->has('portfolio_url') ? 'is-invalid' : '' }}" name="portfolio_url" id="portfolio_url">{{ old('portfolio_url') }}</textarea>
                @if($errors->has('portfolio_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('portfolio_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.portfolio_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_links_works">{{ trans('cruds.personalHistoryForm.fields.other_links_works') }}</label>
                <textarea class="form-control {{ $errors->has('other_links_works') ? 'is-invalid' : '' }}" name="other_links_works" id="other_links_works">{{ old('other_links_works') }}</textarea>
                @if($errors->has('other_links_works'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_links_works') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.other_links_works_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organization_one">{{ trans('cruds.personalHistoryForm.fields.organization_one') }}</label>
                <input class="form-control {{ $errors->has('organization_one') ? 'is-invalid' : '' }}" type="text" name="organization_one" id="organization_one" value="{{ old('organization_one', '') }}">
                @if($errors->has('organization_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.organization_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_employees_supervised_one">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_one') }}</label>
                <input class="form-control {{ $errors->has('number_of_employees_supervised_one') ? 'is-invalid' : '' }}" type="number" name="number_of_employees_supervised_one" id="number_of_employees_supervised_one" value="{{ old('number_of_employees_supervised_one', '') }}" step="1">
                @if($errors->has('number_of_employees_supervised_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_employees_supervised_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date_one">{{ trans('cruds.personalHistoryForm.fields.start_date_one') }}</label>
                <input class="form-control {{ $errors->has('start_date_one') ? 'is-invalid' : '' }}" type="text" name="start_date_one" id="start_date_one" value="{{ old('start_date_one', '') }}">
                @if($errors->has('start_date_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.start_date_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date_one">{{ trans('cruds.personalHistoryForm.fields.end_date_one') }}</label>
                <input class="form-control {{ $errors->has('end_date_one') ? 'is-invalid' : '' }}" type="text" name="end_date_one" id="end_date_one" value="{{ old('end_date_one', '') }}">
                @if($errors->has('end_date_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.end_date_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_of_the_roles_and_responsibilities_one">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_one') }}</label>
                <textarea class="form-control {{ $errors->has('description_of_the_roles_and_responsibilities_one') ? 'is-invalid' : '' }}" name="description_of_the_roles_and_responsibilities_one" id="description_of_the_roles_and_responsibilities_one">{{ old('description_of_the_roles_and_responsibilities_one') }}</textarea>
                @if($errors->has('description_of_the_roles_and_responsibilities_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_of_the_roles_and_responsibilities_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reason_for_leaving_one">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_one') }}</label>
                <textarea class="form-control {{ $errors->has('reason_for_leaving_one') ? 'is-invalid' : '' }}" name="reason_for_leaving_one" id="reason_for_leaving_one">{{ old('reason_for_leaving_one') }}</textarea>
                @if($errors->has('reason_for_leaving_one'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reason_for_leaving_one') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_one_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organization_two">{{ trans('cruds.personalHistoryForm.fields.organization_two') }}</label>
                <input class="form-control {{ $errors->has('organization_two') ? 'is-invalid' : '' }}" type="text" name="organization_two" id="organization_two" value="{{ old('organization_two', '') }}">
                @if($errors->has('organization_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.organization_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_employees_supervised_two">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_two') }}</label>
                <input class="form-control {{ $errors->has('number_of_employees_supervised_two') ? 'is-invalid' : '' }}" type="number" name="number_of_employees_supervised_two" id="number_of_employees_supervised_two" value="{{ old('number_of_employees_supervised_two', '') }}" step="1">
                @if($errors->has('number_of_employees_supervised_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_employees_supervised_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date_two">{{ trans('cruds.personalHistoryForm.fields.start_date_two') }}</label>
                <input class="form-control {{ $errors->has('start_date_two') ? 'is-invalid' : '' }}" type="text" name="start_date_two" id="start_date_two" value="{{ old('start_date_two', '') }}">
                @if($errors->has('start_date_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.start_date_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date_two">{{ trans('cruds.personalHistoryForm.fields.end_date_two') }}</label>
                <input class="form-control {{ $errors->has('end_date_two') ? 'is-invalid' : '' }}" type="text" name="end_date_two" id="end_date_two" value="{{ old('end_date_two', '') }}">
                @if($errors->has('end_date_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.end_date_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_of_the_roles_and_responsibilities_two">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_two') }}</label>
                <textarea class="form-control {{ $errors->has('description_of_the_roles_and_responsibilities_two') ? 'is-invalid' : '' }}" name="description_of_the_roles_and_responsibilities_two" id="description_of_the_roles_and_responsibilities_two">{{ old('description_of_the_roles_and_responsibilities_two') }}</textarea>
                @if($errors->has('description_of_the_roles_and_responsibilities_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_of_the_roles_and_responsibilities_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reason_for_leaving_two">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_two') }}</label>
                <textarea class="form-control {{ $errors->has('reason_for_leaving_two') ? 'is-invalid' : '' }}" name="reason_for_leaving_two" id="reason_for_leaving_two">{{ old('reason_for_leaving_two') }}</textarea>
                @if($errors->has('reason_for_leaving_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reason_for_leaving_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organization_three">{{ trans('cruds.personalHistoryForm.fields.organization_three') }}</label>
                <input class="form-control {{ $errors->has('organization_three') ? 'is-invalid' : '' }}" type="text" name="organization_three" id="organization_three" value="{{ old('organization_three', '') }}">
                @if($errors->has('organization_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.organization_three_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_employees_supervised_three">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_three') }}</label>
                <input class="form-control {{ $errors->has('number_of_employees_supervised_three') ? 'is-invalid' : '' }}" type="number" name="number_of_employees_supervised_three" id="number_of_employees_supervised_three" value="{{ old('number_of_employees_supervised_three', '') }}" step="1">
                @if($errors->has('number_of_employees_supervised_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_employees_supervised_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_three_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date_three">{{ trans('cruds.personalHistoryForm.fields.start_date_three') }}</label>
                <input class="form-control {{ $errors->has('start_date_three') ? 'is-invalid' : '' }}" type="text" name="start_date_three" id="start_date_three" value="{{ old('start_date_three', '') }}">
                @if($errors->has('start_date_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.start_date_three_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date_three">{{ trans('cruds.personalHistoryForm.fields.end_date_three') }}</label>
                <input class="form-control {{ $errors->has('end_date_three') ? 'is-invalid' : '' }}" type="text" name="end_date_three" id="end_date_three" value="{{ old('end_date_three', '') }}">
                @if($errors->has('end_date_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.end_date_three_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_of_the_roles_and_responsibilities_three">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_three') }}</label>
                <textarea class="form-control {{ $errors->has('description_of_the_roles_and_responsibilities_three') ? 'is-invalid' : '' }}" name="description_of_the_roles_and_responsibilities_three" id="description_of_the_roles_and_responsibilities_three">{{ old('description_of_the_roles_and_responsibilities_three') }}</textarea>
                @if($errors->has('description_of_the_roles_and_responsibilities_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_of_the_roles_and_responsibilities_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_three_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reason_for_leaving_three">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_three') }}</label>
                <textarea class="form-control {{ $errors->has('reason_for_leaving_three') ? 'is-invalid' : '' }}" name="reason_for_leaving_three" id="reason_for_leaving_three">{{ old('reason_for_leaving_three') }}</textarea>
                @if($errors->has('reason_for_leaving_three'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reason_for_leaving_three') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_three_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection