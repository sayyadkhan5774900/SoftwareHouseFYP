<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MyOrdersController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('my_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::whereNull('service_provider_id')->with(['client', 'service_provider', 'media'])->paginate(10);

        return view('admin.myOrders.index', compact('orders'));
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->all());

        if ($request->input('file', false)) {
            $order->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $order->id]);
        }

        return redirect()->route('admin.my-orders.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order = Order::find($id);

        $service_providers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $order->load('client');

        return view('admin.myOrders.edit', compact('service_providers', 'order'));
    }

    public function update(UpdateOrderRequest $request, $id)
    {

        $order = Order::find($id);

        $order->update($request->all());

        if ($request->input('file', false)) {
            if (!$order->file || $request->input('file') !== $order->file->file_name) {
                if ($order->file) {
                    $order->file->delete();
                }
                $order->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($order->file) {
            $order->file->delete();
        }

        return redirect()->route('admin.my-orders.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order = Order::find($id);

        $order->load('client', 'service_provider');

        return view('admin.myOrders.show', compact('order'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order = Order::find($id);

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('order_create') && Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Order();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

}
