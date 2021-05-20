@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.service.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.id') }}
                        </th>
                        <td>
                            {{ $service->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.service') }}
                        </th>
                        <td>
                            {{ App\Models\Service::SERVICE_SELECT[$service->service] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.description') }}
                        </th>
                        <td>
                            {!! $service->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.address') }}
                        </th>
                        <td>
                            {{ $service->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.city') }}
                        </th>
                        <td>
                            {{ $service->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.postcode') }}
                        </th>
                        <td>
                            {{ $service->postcode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.contact') }}
                        </th>
                        <td>
                            {{ $service->contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.file') }}
                        </th>
                        <td>
                            @if($service->file)
                                {{-- <a href="{{ $service->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a> --}}
                                <a href=" {{ route('service.file.download', $service->id) }}" target="_blank">
                                    Download File
                                </a>  
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.meeting') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $service->meeting ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.provider') }}
                        </th>
                        <td>
                            {{ $service->provider->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection