@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.clientActiveOrder.title') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.service') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.meeting') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.client') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.service_provider') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.deadline_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr data-entry-id="{{ $order->id }}">
                            <td>
                                {{ App\Models\Order::SERVICE_SELECT[$order->service] ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $order->meeting ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $order->meeting ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $order->client->name ?? '' }}
                            </td>
                            <td>
                                {{ $order->service_provider->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Order::STATUS_SELECT[$order->status] ?? '' }}
                            </td>
                            <td>
                                {{ $order->deadline_date ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.active-orders.show', $order->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-right">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>



@endsection
