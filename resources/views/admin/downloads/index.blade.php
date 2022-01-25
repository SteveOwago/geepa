@extends('layouts.admin')
@section('content')
@can('crm_note_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.downloads.create') }}">
                Upload A Document
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Downloads {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Document Link
                        </th>
                        <th>
                           Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @forelse ( $downloads as $download )
                           <td>{{$download->id}}</td>
                           <td>{{$download->description}}</td>
                           <td>
                            @if($download->document_file)
                                <a href="{{ $download->document_file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                           </td>
                           <td>
                                @can('crm_document_show')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.downloads.show', $download->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan

                                @can('crm_document_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.downloads.edit', $download->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crm_document_delete')
                                    <form action="{{ route('admin.downloads.destroy', $download->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                           </td>
                        @empty
                            <td>No Uploaded Documents for Users</td>
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

