<?php

namespace Irisit\Authz\Http\Controllers\Admin;

use Exception;
use Illuminate\Support\Facades\Artisan;
use Irisit\Authz\Http\Requests\Admin\AdminPermissionRequest;
use Irisit\Authz\Http\Controllers\Controller;
use Irisit\Authz\Http\Requests\Admin\AdminPermissionRoleRequest;
use Irisit\Authz\Models\Permission;
use Irisit\Authz\Models\Role;
use Laracasts\Flash\Flash;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::paginate(10);

        return view('authz::admin.permissions.index')->with(compact('permissions'));
    }

    public function create()
    {
        return view('authz::admin.permissions.create')->with(compact('permissions'));
    }

    public function store(AdminPermissionRequest $request)
    {
        $data = $request->all();

        if (Permission::create($data)) {
            Flash::success(__('Create permission success'));
        } else {
            Flash::error(__('Create permission failed'));
        }

        return redirect(route('authz.admin_index_permissions'));
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        $roles = Role::orderBy('name')->pluck('name', 'id');

        return view('authz::admin.permissions.edit')->with(compact('permission', 'roles'));
    }

    public function update(AdminPermissionRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $data = $request->all();

        if ($permission->update($data)) {
            Flash::success(__('Update permission success'));
        } else {
            Flash::error(__('Update permission failed'));
        }

        return redirect(route('authz.admin_index_permissions'));
    }

    public function delete($id)
    {
        $permission = Permission::findOrFail($id);

        return view('authz::admin.permissions.delete')->with(compact('permission'));
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);

        if ($permission->delete()) {
            Flash::success(__('Delete permission success'));
        } else {
            Flash::error(__('Delete permission failed'));
        }

        return redirect(route('authz.admin_index_permissions'));
    }


    public function triggerScanPermission()
    {
        try {
            define('STDOUT', fopen('php://stdout', 'w'));
            Artisan::call('parse:permissions');
        } catch (Exception $e) {
            Flash::error(__('Scan permission failed'));
        }
        Flash::success(__('Scan permission success'));

        return redirect(route('authz.admin_index_permissions'));
    }

    public function syncRoles(AdminPermissionRoleRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $data = $request->all();

        if (!$request->has("roles")) {
            $data["roles"] = [];
        }

        if ($permission->roles()->sync($data["roles"])) {
            Flash::success(__('Update permission success'));
        } else {
            Flash::error(__('Update permission failed'));
        }

        return redirect(route('authz.admin_index_permissions'));

    }

}
