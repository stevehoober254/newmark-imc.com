@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.insight.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.insights.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.insight.fields.id') }}
                        </th>
                        <td>
                            {{ $insight->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insight.fields.title') }}
                        </th>
                        <td>
                            {{ $insight->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insight.fields.image') }}
                        </th>
                        <td>
                            @if($insight->image)
                                <a href="{{ $insight->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $insight->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insight.fields.description') }}
                        </th>
                        <td>
                            {!! $insight->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.insights.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection