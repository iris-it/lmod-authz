<?php

namespace Irisit\Authz\Http\Controllers\Admin;

use Irisit\Authz\Http\Requests\Admin\AdminRolePermissionRequest;
use Irisit\Authz\Http\Requests\Admin\AdminRoleRequest;
use Irisit\Authz\Http\Controllers\Controller;
use Irisit\Authz\Models\Permission;
use Irisit\Authz\Models\Role;
use Laracasts\Flash\Flash;

class RolesController extends Controller
{

    public function index()
    {
        $roles = Role::paginate(10);

        return view('authz::admin.roles.index')->with(compact('roles'));
    }

    public function create()
    {
        return view('authz::admin.roles.create');
    }

    public function store(AdminRoleRequest $request)
    {
        $data = $request->all();

        if (Role::create($data)) {
            Flash::success(__('Create role success'));
        } else {
            Flash::error(__('Create role failed'));
        }

        return redirect(route('authz.admin_index_roles'));
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);

        $permissions = Permission::orderBy('name')->pluck('name', 'id');

        return view('authz::admin.roles.edit')->with(compact('role', 'permissions'));
    }

    public function update(AdminRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $data = $request->all();

        if ($role->update($data)) {
            Flash::success(__('Update role success'));
        } else {
            Flash::error(__('Update role failed'));
        }

        return redirect(route('authz.admin_index_roles'));
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);

        return view('authz::admin.roles.delete')->with(compact('role'));
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if (!in_array($role->name, ["admin", "manager", "user"]) && $role->delete()) {
            Flash::success(__('Delete role success'));
        } else {
            Flash::error(__('Delete role failed'));
        }

        return redirect(route('authz.admin_index_roles'));
    }

    public function syncPermissions(AdminRolePermissionRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $data = $request->all();

        if (!$request->has("permissions")) {
            $data["permissions"] = [];
        }

        if ($role->permissions()->sync($data["permissions"])) {
            Flash::success(__('Update role success'));
        } else {
            Flash::error(__('Update role failed'));
        }

        return redirect(route('authz.admin_index_roles'));
    }

}
