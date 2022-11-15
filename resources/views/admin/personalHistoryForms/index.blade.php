@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.personalHistoryForm.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PersonalHistoryForm">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.full_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.age') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.personalHistoryForm.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personalHistoryForms as $key => $personalHistoryForm)
                        <tr data-entry-id="{{ $personalHistoryForm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $personalHistoryForm->full_name ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->age ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->nationality ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->gender ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->email_address ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $personalHistoryForm->created_at ?? '' }}
                            </td>
                            <td>
                                @can('personal_history_form_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.personal-history-forms.show', $personalHistoryForm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan


                                @can('personal_history_form_delete')
                                    <form action="{{ route('admin.personal-history-forms.destroy', $personalHistoryForm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('personal_history_form_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.personal-history-forms.massDestroy') }}",
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
    order: [[ 7, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-PersonalHistoryForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection