@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.personalHistoryForm.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.personal-history-forms.update", [$personalHistoryForm->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="full_name">{{ trans('cruds.personalHistoryForm.fields.full_name') }}</label>
                <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text" name="full_name" id="full_name" value="{{ old('full_name', $personalHistoryForm->full_name) }}" required>
                @if($errors->has('full_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('full_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.full_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="age">{{ trans('cruds.personalHistoryForm.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', $personalHistoryForm->age) }}" step="1" required>
                @if($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nationality">{{ trans('cruds.personalHistoryForm.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', $personalHistoryForm->nationality) }}" required>
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="gender">{{ trans('cruds.personalHistoryForm.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $personalHistoryForm->gender) }}" required>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marital_status">{{ trans('cruds.personalHistoryForm.fields.marital_status') }}</label>
                <input class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" type="text" name="marital_status" id="marital_status" value="{{ old('marital_status', $personalHistoryForm->marital_status) }}" required>
                @if($errors->has('marital_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.marital_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_physical_address">{{ trans('cruds.personalHistoryForm.fields.current_physical_address') }}</label>
                <input class="form-control {{ $errors->has('current_physical_address') ? 'is-invalid' : '' }}" type="text" name="current_physical_address" id="current_physical_address" value="{{ old('current_physical_address', $personalHistoryForm->current_physical_address) }}" required>
                @if($errors->has('current_physical_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_physical_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.current_physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email_address">{{ trans('cruds.personalHistoryForm.fields.email_address') }}</label>
                <input class="form-control {{ $errors->has('email_address') ? 'is-invalid' : '' }}" type="email" name="email_address" id="email_address" value="{{ old('email_address', $personalHistoryForm->email_address) }}" required>
                @if($errors->has('email_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_number">{{ trans('cruds.personalHistoryForm.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $personalHistoryForm->phone_number) }}" required>
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="highest_level_of_education">{{ trans('cruds.personalHistoryForm.fields.highest_level_of_education') }}</label>
                <input class="form-control {{ $errors->has('highest_level_of_education') ? 'is-invalid' : '' }}" type="text" name="highest_level_of_education" id="highest_level_of_education" value="{{ old('highest_level_of_education', $personalHistoryForm->highest_level_of_education) }}">
                @if($errors->has('highest_level_of_education'))
                    <div class="invalid-feedback">
                        {{ $errors->first('highest_level_of_education') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.highest_level_of_education_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="field_of_study">{{ trans('cruds.personalHistoryForm.fields.field_of_study') }}</label>
                <input class="form-control {{ $errors->has('field_of_study') ? 'is-invalid' : '' }}" type="text" name="field_of_study" id="field_of_study" value="{{ old('field_of_study', $personalHistoryForm->field_of_study) }}">
                @if($errors->has('field_of_study'))
                    <div class="invalid-feedback">
                        {{ $errors->first('field_of_study') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.field_of_study_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institution">{{ trans('cruds.personalHistoryForm.fields.institution') }}</label>
                <input class="form-control {{ $errors->has('institution') ? 'is-invalid' : '' }}" type="text" name="institution" id="institution" value="{{ old('institution', $personalHistoryForm->institution) }}">
                @if($errors->has('institution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.institution_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_graduation">{{ trans('cruds.personalHistoryForm.fields.date_of_graduation') }}</label>
                <input class="form-control date {{ $errors->has('date_of_graduation') ? 'is-invalid' : '' }}" type="text" name="date_of_graduation" id="date_of_graduation" value="{{ old('date_of_graduation', $personalHistoryForm->date_of_graduation) }}">
                @if($errors->has('date_of_graduation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_graduation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.date_of_graduation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="award_achieved">{{ trans('cruds.personalHistoryForm.fields.award_achieved') }}</label>
                <textarea class="form-control {{ $errors->has('award_achieved') ? 'is-invalid' : '' }}" name="award_achieved" id="award_achieved">{{ old('award_achieved', $personalHistoryForm->award_achieved) }}</textarea>
                @if($errors->has('award_achieved'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_achieved') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.award_achieved_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="high_school_grade">{{ trans('cruds.personalHistoryForm.fields.high_school_grade') }}</label>
                <input class="form-control {{ $errors->has('high_school_grade') ? 'is-invalid' : '' }}" type="text" name="high_school_grade" id="high_school_grade" value="{{ old('high_school_grade', $personalHistoryForm->high_school_grade) }}">
                @if($errors->has('high_school_grade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('high_school_grade') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.high_school_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="leadership_quality">{{ trans('cruds.personalHistoryForm.fields.leadership_quality') }}</label>
                <textarea class="form-control {{ $errors->has('leadership_quality') ? 'is-invalid' : '' }}" name="leadership_quality" id="leadership_quality">{{ old('leadership_quality', $personalHistoryForm->leadership_quality) }}</textarea>
                @if($errors->has('leadership_quality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leadership_quality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.leadership_quality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organization">{{ trans('cruds.personalHistoryForm.fields.organization') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('organization') ? 'is-invalid' : '' }}" name="organization" id="organization">{!! old('organization', $personalHistoryForm->organization) !!}</textarea>
                @if($errors->has('organization'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.organization_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_employees_supervised">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised') }}</label>
                <input class="form-control {{ $errors->has('number_of_employees_supervised') ? 'is-invalid' : '' }}" type="number" name="number_of_employees_supervised" id="number_of_employees_supervised" value="{{ old('number_of_employees_supervised', $personalHistoryForm->number_of_employees_supervised) }}" step="1">
                @if($errors->has('number_of_employees_supervised'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_employees_supervised') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date">{{ trans('cruds.personalHistoryForm.fields.start_date') }}</label>
                <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date', $personalHistoryForm->start_date) }}">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date">{{ trans('cruds.personalHistoryForm.fields.end_date') }}</label>
                <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date', $personalHistoryForm->end_date) }}">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_of_the_roles_and_responsibilities">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description_of_the_roles_and_responsibilities') ? 'is-invalid' : '' }}" name="description_of_the_roles_and_responsibilities" id="description_of_the_roles_and_responsibilities">{!! old('description_of_the_roles_and_responsibilities', $personalHistoryForm->description_of_the_roles_and_responsibilities) !!}</textarea>
                @if($errors->has('description_of_the_roles_and_responsibilities'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_of_the_roles_and_responsibilities') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.description_of_the_roles_and_responsibilities_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reason_for_leaving">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('reason_for_leaving') ? 'is-invalid' : '' }}" name="reason_for_leaving" id="reason_for_leaving">{!! old('reason_for_leaving', $personalHistoryForm->reason_for_leaving) !!}</textarea>
                @if($errors->has('reason_for_leaving'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reason_for_leaving') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.reason_for_leaving_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.personalHistoryForm.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $personalHistoryForm->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_employees_supervised_pd">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_pd') }}</label>
                <input class="form-control {{ $errors->has('number_of_employees_supervised_pd') ? 'is-invalid' : '' }}" type="text" name="number_of_employees_supervised_pd" id="number_of_employees_supervised_pd" value="{{ old('number_of_employees_supervised_pd', $personalHistoryForm->number_of_employees_supervised_pd) }}">
                @if($errors->has('number_of_employees_supervised_pd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_employees_supervised_pd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.personalHistoryForm.fields.number_of_employees_supervised_pd_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.personal-history-forms.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $personalHistoryForm->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection