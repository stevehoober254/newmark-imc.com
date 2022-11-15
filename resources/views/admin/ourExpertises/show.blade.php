@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ourExpertise.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.our-expertises.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.id') }}
                        </th>
                        <td>
                            {{ $ourExpertise->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.title') }}
                        </th>
                        <td>
                            {{ $ourExpertise->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.expertise_logo') }}
                        </th>
                        <td>
                            @if($ourExpertise->expertise_logo)
                                <a href="{{ $ourExpertise->expertise_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $ourExpertise->expertise_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.image') }}
                        </th>
                        <td>
                            @if($ourExpertise->image)
                                <a href="{{ $ourExpertise->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $ourExpertise->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.description') }}
                        </th>
                        <td>
                            {!! $ourExpertise->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.client_logos') }}
                        </th>
                        <td>
                            @foreach($ourExpertise->client_logos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.our-expertises.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection