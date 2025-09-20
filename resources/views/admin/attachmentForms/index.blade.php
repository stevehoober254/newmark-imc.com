@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Attachment Applications
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AttachmentForm">
                <thead>
                    <tr>
                        <th width="10">
                            <input type="checkbox" class="select-all">
                        </th>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Email Address
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            University/Institution
                        </th>
                        <th>
                            Course of Study
                        </th>
                        <th>
                            Current Year of Study
                        </th>
                        <th>
                            Attachment Period
                        </th>
                        <th>
                            Submitted Date
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attachmentForms as $key => $attachmentForm)
                    <tr data-entry-id="{{ $attachmentForm->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $attachmentForm->full_name ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->email_address ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->phone_number ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->university_institution ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->course_of_study ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->current_year_of_study ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->attachment_period ?? '' }}
                        </td>
                        <td>
                            {{ $attachmentForm->created_at ?? '' }}
                        </td>
                        <td>
                            @can('attachment_form_show')
                            <a class="btn btn-xs btn-primary"
                                href="{{ route('admin.attachment-forms.show', $attachmentForm->id) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan

                            @can('attachment_form_delete')
                            <form action="{{ route('admin.attachment-forms.destroy', $attachmentForm->id) }}"
                                method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                style="display: inline-block;">
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
        @can('attachment_form_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.attachment-forms.massDestroy') }}",
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
            order: [[ 8, 'desc' ]],
            pageLength: 100,
        });
        let table = $('.datatable-AttachmentForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

        $('.datatable thead').on('input', '.search', function () {
            let strict = $(this).attr('strict') || false
            let value = strict && this.value ? "^" + this.value + "$" : this.value
            table
                .column($(this).parent().index())
                .search(value, strict)
                .draw()
        });
    })

</script>
@endsection