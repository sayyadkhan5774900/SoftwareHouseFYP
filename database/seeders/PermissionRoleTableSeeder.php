<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $supper_admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($supper_admin_permissions->pluck('id'));
        $admin_permissions = $supper_admin_permissions->filter(function ($permission) {
            $permissions_array = ['services_dropdown_access','add_new_order_access','client_active_order_access','profile_password_edit','add_new_service_access','my_service_access'];
            return !in_array($permission->title, $permissions_array) && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($admin_permissions);

        $client_permissions = $supper_admin_permissions->filter(function ($permission) {
            $client_permissions_array = ['order_create', 'order_edit', 'order_delete', 'order_show', 'services_dropdown_access','add_new_order_access','client_active_order_access','profile_password_edit'];
            return in_array($permission->title, $client_permissions_array) && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(3)->permissions()->sync($client_permissions);


        $provider_permissions = $supper_admin_permissions->filter(function ($permission) {
            $provider_permissions_array = ['add_new_service_access','my_service_access','profile_password_edit','service_create','service_edit','service_delete', 'service_show'];
            return in_array($permission->title, $provider_permissions_array) && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(4)->permissions()->sync($provider_permissions);

    }
}
