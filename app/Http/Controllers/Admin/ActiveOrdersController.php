<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveOrdersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('active_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::whereNotNull('service_provider_id')->with(['client', 'media'])->get();

        return view('admin.activeOrders.index', compact('orders'));
    }
}
