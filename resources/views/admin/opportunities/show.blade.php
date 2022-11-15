@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.opportunity.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.opportunities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.id') }}
                        </th>
                        <td>
                            {{ $opportunity->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.job_title') }}
                        </th>
                        <td>
                            {{ $opportunity->job_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.category') }}
                        </th>
                        <td>
                            {{ App\Models\Opportunity::CATEGORY_SELECT[$opportunity->category] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.expertise_area') }}
                        </th>
                        <td>
                            {{ $opportunity->expertise_area->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.reporting_to') }}
                        </th>
                        <td>
                            {{ $opportunity->reporting_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.location') }}
                        </th>
                        <td>
                            {{ $opportunity->location->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.job_purpose') }}
                        </th>
                        <td>
                            {{ $opportunity->job_purpose }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.key_responsibility') }}
                        </th>
                        <td>
                            {!! $opportunity->key_responsibility !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.qualification') }}
                        </th>
                        <td>
                            {!! $opportunity->qualification !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.how_to_apply') }}
                        </th>
                        <td>
                            {!! $opportunity->how_to_apply !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.opportunity.fields.status') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $opportunity->status ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.opportunities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection