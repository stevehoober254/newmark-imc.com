@extends('layouts.admin')
@section('content')
@can('insight_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.insights.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.insight.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.insight.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Insight">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.insight.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.insight.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.insight.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.insight.fields.created_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.insight.fields.updated_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($insights as $key => $insight)
                        <tr data-entry-id="{{ $insight->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $insight->id ?? '' }}
                            </td>
                            <td>
                                {{ $insight->title ?? '' }}
                            </td>
                            <td>
                                @if($insight->image)
                                    <a href="{{ $insight->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $insight->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $insight->created_at ?? '' }}
                            </td>
                            <td>
                                {{ $insight->updated_at ?? '' }}
                            </td>
                            <td>
                                @can('insight_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.insights.show', $insight->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('insight_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.insights.edit', $insight->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('insight_delete')
                                    <form action="{{ route('admin.insights.destroy', $insight->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('insight_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.insights.massDestroy') }}",
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
    order: [[ 2, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Insight:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection