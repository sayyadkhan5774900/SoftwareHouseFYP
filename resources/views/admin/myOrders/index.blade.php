@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.order.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.service') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.postcode') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.contact') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.meeting') }}
                        </th>
                       
                        <th>
                            {{ trans('cruds.order.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $key => $order)
                        <tr data-entry-id="{{ $order->id }}">
                            <td>
                                {{ $order->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Order::SERVICE_SELECT[$order->service] ?? '' }}
                            </td>
                            <td>
                                {{ $order->city ?? '' }}
                            </td>
                            <td>
                                {{ $order->postcode ?? '' }}
                            </td>
                            <td>
                                {{ $order->contact ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $order->meeting ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $order->meeting ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ App\Models\Order::STATUS_SELECT[$order->status] ?? '' }}
                            </td>
                            <td>
                                @can('order_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.my-orders.show', $order->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('order_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.my-orders.edit', $order->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('order_delete')
                                    <form action="{{ route('admin.my-orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
            <div class="float-right">{{ $orders->links() }}</div>
        </div>
    </div>
</div>

@endsection
