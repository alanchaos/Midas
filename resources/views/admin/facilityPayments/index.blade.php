@extends('layouts.admin')
@section('content')
@can('facility_payment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.facility-payments.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.facilityPayment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.facilityPayment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FacilityPayment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.facility') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.username') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.username') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.payment_method') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.reciept') }}
                        </th>
                        <th>
                            {{ trans('cruds.facilityPayment.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facilityPayments as $key => $facilityPayment)
                        <tr data-entry-id="{{ $facilityPayment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $facilityPayment->id ?? '' }}
                            </td>
                            <td>
                                {{ $facilityPayment->facility->name ?? '' }}
                            </td>
                            <td>
                                {{ $facilityPayment->username->username ?? '' }}
                            </td>
                            <td>
                                {{ $facilityPayment->username->username ?? '' }}
                            </td>
                            <td>
                                {{ $facilityPayment->amount ?? '' }}
                            </td>
                            <td>
                                {{ $facilityPayment->payment_method->method ?? '' }}
                            </td>
                            <td>
                                @if($facilityPayment->reciept)
                                    <a href="{{ $facilityPayment->reciept->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ App\Models\FacilityPayment::STATUS_SELECT[$facilityPayment->status] ?? '' }}
                            </td>
                            <td>
                                @can('facility_payment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.facility-payments.show', $facilityPayment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('facility_payment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.facility-payments.edit', $facilityPayment->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('facility_payment_delete')
                                    <form action="{{ route('admin.facility-payments.destroy', $facilityPayment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('facility_payment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.facility-payments.massDestroy') }}",
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
  let table = $('.datatable-FacilityPayment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection