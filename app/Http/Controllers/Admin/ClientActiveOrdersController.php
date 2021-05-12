<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientActiveOrdersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_active_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $orders = Order::with(['client', 'service_provider', 'media'])->orderByDesc('id')->paginate(10);

        return view('admin.clientActiveOrders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);

        $order->load('client', 'service_provider');

        return view('admin.clientActiveOrders.show', compact('order'));
    }
}
