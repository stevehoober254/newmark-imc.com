@extends('layouts.admin')
@section('content')
@can('our_expertise_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.our-expertises.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.ourExpertise.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.ourExpertise.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OurExpertise">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.expertise_logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.ourExpertise.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ourExpertises as $key => $ourExpertise)
                        <tr data-entry-id="{{ $ourExpertise->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $ourExpertise->id ?? '' }}
                            </td>
                            <td>
                                {{ $ourExpertise->title ?? '' }}
                            </td>
                            <td>
                                @if($ourExpertise->expertise_logo)
                                    <a href="{{ $ourExpertise->expertise_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $ourExpertise->expertise_logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($ourExpertise->image)
                                    <a href="{{ $ourExpertise->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $ourExpertise->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('our_expertise_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.our-expertises.show', $ourExpertise->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('our_expertise_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.our-expertises.edit', $ourExpertise->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('our_expertise_delete')
                                    <form action="{{ route('admin.our-expertises.destroy', $ourExpertise->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('our_expertise_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.our-expertises.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-OurExpertise:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection