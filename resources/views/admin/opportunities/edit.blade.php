@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.opportunity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.opportunities.update", [$opportunity->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="job_title">{{ trans('cruds.opportunity.fields.job_title') }}</label>
                <input class="form-control {{ $errors->has('job_title') ? 'is-invalid' : '' }}" type="text" name="job_title" id="job_title" value="{{ old('job_title', $opportunity->job_title) }}" required>
                @if($errors->has('job_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.job_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.opportunity.fields.category') }}</label>
                <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" id="category" required>
                    <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Opportunity::CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('category', $opportunity->category) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="expertise_area_id">{{ trans('cruds.opportunity.fields.expertise_area') }}</label>
                <select class="form-control select2 {{ $errors->has('expertise_area') ? 'is-invalid' : '' }}" name="expertise_area_id" id="expertise_area_id" required>
                    @foreach($expertise_areas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('expertise_area_id') ? old('expertise_area_id') : $opportunity->expertise_area->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('expertise_area'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expertise_area') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.expertise_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="reporting_to">{{ trans('cruds.opportunity.fields.reporting_to') }}</label>
                <input class="form-control {{ $errors->has('reporting_to') ? 'is-invalid' : '' }}" type="text" name="reporting_to" id="reporting_to" value="{{ old('reporting_to', $opportunity->reporting_to) }}" required>
                @if($errors->has('reporting_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reporting_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.reporting_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_id">{{ trans('cruds.opportunity.fields.location') }}</label>
                <select class="form-control select2 {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location_id" id="location_id" required>
                    @foreach($locations as $id => $entry)
                        <option value="{{ $id }}" {{ (old('location_id') ? old('location_id') : $opportunity->location->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_purpose">{{ trans('cruds.opportunity.fields.job_purpose') }}</label>
                <input class="form-control {{ $errors->has('job_purpose') ? 'is-invalid' : '' }}" type="text" name="job_purpose" id="job_purpose" value="{{ old('job_purpose', $opportunity->job_purpose) }}">
                @if($errors->has('job_purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.job_purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="key_responsibility">{{ trans('cruds.opportunity.fields.key_responsibility') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('key_responsibility') ? 'is-invalid' : '' }}" name="key_responsibility" id="key_responsibility">{!! old('key_responsibility', $opportunity->key_responsibility) !!}</textarea>
                @if($errors->has('key_responsibility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('key_responsibility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.key_responsibility_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification">{{ trans('cruds.opportunity.fields.qualification') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('qualification') ? 'is-invalid' : '' }}" name="qualification" id="qualification">{!! old('qualification', $opportunity->qualification) !!}</textarea>
                @if($errors->has('qualification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.qualification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="how_to_apply">{{ trans('cruds.opportunity.fields.how_to_apply') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('how_to_apply') ? 'is-invalid' : '' }}" name="how_to_apply" id="how_to_apply">{!! old('how_to_apply', $opportunity->how_to_apply) !!}</textarea>
                @if($errors->has('how_to_apply'))
                    <div class="invalid-feedback">
                        {{ $errors->first('how_to_apply') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.how_to_apply_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('status') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="status" value="0">
                    <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ $opportunity->status || old('status', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">{{ trans('cruds.opportunity.fields.status') }}</label>
                </div>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.opportunity.fields.status_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.opportunities.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $opportunity->id ?? 0 }}');
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