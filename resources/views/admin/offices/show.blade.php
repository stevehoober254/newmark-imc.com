@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.office.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.id') }}
                        </th>
                        <td>
                            {{ $office->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.country') }}
                        </th>
                        <td>
                            {{ $office->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.city') }}
                        </th>
                        <td>
                            {{ $office->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.office_image') }}
                        </th>
                        <td>
                            @if($office->office_image)
                                <a href="{{ $office->office_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $office->office_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.description') }}
                        </th>
                        <td>
                            {!! $office->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.office_phone') }}
                        </th>
                        <td>
                            {{ $office->office_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.office.fields.office_email') }}
                        </th>
                        <td>
                            {{ $office->office_email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection