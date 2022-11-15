@extends('layouts.admin')
@section('content')
@can('newsletter_subscriber_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.newsletter-subscribers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.newsletterSubscriber.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.newsletterSubscriber.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-NewsletterSubscriber">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsletterSubscriber.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsletterSubscribers as $key => $newsletterSubscriber)
                        <tr data-entry-id="{{ $newsletterSubscriber->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $newsletterSubscriber->id ?? '' }}
                            </td>
                            <td>
                                {{ $newsletterSubscriber->name ?? '' }}
                            </td>
                            <td>
                                {{ $newsletterSubscriber->email ?? '' }}
                            </td>
                            <td>
                                {{ $newsletterSubscriber->created_at ?? '' }}
                            </td>
                            <td>
                                @can('newsletter_subscriber_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.newsletter-subscribers.show', $newsletterSubscriber->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('newsletter_subscriber_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.newsletter-subscribers.edit', $newsletterSubscriber->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('newsletter_subscriber_delete')
                                    <form action="{{ route('admin.newsletter-subscribers.destroy', $newsletterSubscriber->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('newsletter_subscriber_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.newsletter-subscribers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 4, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-NewsletterSubscriber:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection