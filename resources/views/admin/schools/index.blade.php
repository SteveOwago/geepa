@extends('layouts.admin')
@section('content')
@can('school_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.schools.create') }}">
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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-School">
            <thead>
                <tr>
                    <th width="10">

                    </th>
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('school_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.schools.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.schools.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'academic_year', name: 'academic_year' },
{ data: 'email', name: 'email' },
{ data: 'city', name: 'city' },
{ data: 'detailed_location', name: 'detailed_location' },
{ data: 'post_office_box', name: 'post_office_box' },
{ data: 'logo', name: 'logo', sortable: false, searchable: false },
{ data: 'contact_2', name: 'contact_2' },
{ data: 'contact_4', name: 'contact_4' },
{ data: 'contact_3', name: 'contact_3' },
{ data: 'contact_1', name: 'contact_1' },
{ data: 'website', name: 'website' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-School').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection