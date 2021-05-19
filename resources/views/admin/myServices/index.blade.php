@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.myService.title') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Service">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.service.fields.service') }}
                        </th>
                        <th>
                            {{ trans('cruds.service.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.service.fields.postcode') }}
                        </th>
                        <th>
                            {{ trans('cruds.service.fields.contact') }}
                        </th>
                        <th>
                            {{ trans('cruds.service.fields.meeting') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $key => $service)
                        <tr data-entry-id="{{ $service->id }}">
                            <td>
                                {{ $service->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Service::SERVICE_SELECT[$service->service] ?? '' }}
                            </td>
                            <td>
                                {{ $service->city ?? '' }}
                            </td>
                            <td>
                                {{ $service->postcode ?? '' }}
                            </td>
                            <td>
                                {{ $service->contact ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $service->meeting ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $service->meeting ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('service_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.my-services.show', $service->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('service_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.my-services.edit', $service->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('service_delete')
                                    <form action="{{ route('admin.my-services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
            <div class="float-right">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

