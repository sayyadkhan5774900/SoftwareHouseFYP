<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewOrdersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('new_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::whereNull('service_provider_id')->where('status','pending')->with(['client', 'media'])->get();

        return view('admin.newOrders.index', compact('orders') );
    }
}
