<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceProvidersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_provider_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::with('roles')->whereHas('roles', function($query) {
            $query->where('title','Provider');
        })->get();

        return view('admin.serviceProviders.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        $user->load('roles', 'providerServices');

        return view('admin.serviceProviders.show', compact('user'));
    }
}
