<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AddNewOrderController extends Controller
{
    public function create()
    {
        abort_if(Gate::denies('add_new_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addNewOrders.create');
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->all());

        $order->client_id = auth()->user()->id;
        $order->save();

        if ($request->input('file', false)) {
            $order->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $order->id]);
        }

        return redirect('/admin');
    }
}
