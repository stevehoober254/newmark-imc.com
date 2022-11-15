@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sector.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sectors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sector.fields.id') }}
                        </th>
                        <td>
                            {{ $sector->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sector.fields.sector_name') }}
                        </th>
                        <td>
                            {{ $sector->sector_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sector.fields.image') }}
                        </th>
                        <td>
                            @if($sector->image)
                                <a href="{{ $sector->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $sector->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sector.fields.description') }}
                        </th>
                        <td>
                            {!! $sector->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sectors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection