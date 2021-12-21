@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('school_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.schools.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.school.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'School', 'route' => 'admin.schools.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.school.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-School">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.academic_year') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.detailed_location') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.post_office_box') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.logo') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_4') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_3') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.school.fields.website') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schools as $key => $school)
                                    <tr data-entry-id="{{ $school->id }}">
                                        <td>
                                            {{ $school->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\School::ACADEMIC_YEAR_SELECT[$school->academic_year] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->detailed_location ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->post_office_box ?? '' }}
                                        </td>
                                        <td>
                                            @if($school->logo)
                                                <a href="{{ $school->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $school->logo->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $school->contact_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->contact_4 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->contact_3 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->contact_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $school->website ?? '' }}
                                        </td>
                                        <td>
                                            @can('school_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.schools.show', $school->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('school_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.schools.edit', $school->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('school_delete')
                                                <form action="{{ route('frontend.schools.destroy', $school->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('school_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.schools.massDestroy') }}",
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
  let table = $('.datatable-School:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection