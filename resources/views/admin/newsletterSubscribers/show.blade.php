@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newsletterSubscriber.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletter-subscribers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.id') }}
                        </th>
                        <td>
                            {{ $newsletterSubscriber->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.name') }}
                        </th>
                        <td>
                            {{ $newsletterSubscriber->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.email') }}
                        </th>
                        <td>
                            {{ $newsletterSubscriber->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletter-subscribers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection