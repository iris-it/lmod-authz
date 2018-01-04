<?php

namespace Irisit\Authz\Http\Controllers\Admin;

use App\User;
use Irisit\Authz\Models\Role;
use Irisit\Authz\Http\Requests\Admin\AdminUserRequest;

use Irisit\Authz\Notifications\NewAccount;
use Irisit\Authz\Services\PasswordGenService;
use Laracasts\Flash\Flash;
use Irisit\Authz\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);

        return view('authz::admin.users.index')->with(compact('users'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id');

        return view('authz::admin.users.create')->with(compact('roles'));
    }

    public function store(AdminUserRequest $request, PasswordGenService $passwordGenService)
    {
        $data = $request->all();

        $password = null;

        if (config('irisit_authz.admin_generate_and_send_password', true) === true) {
            $password = $passwordGenService->generate();
        } else {
            $password = $data['password'];
        }

        $data['password'] = bcrypt($data['password']);


        if ($user = User::create($data)) {

            if (config('irisit_authz.admin_generate_and_send_password', true) === true) {
                $user->notify(new NewAccount($user, $password));
            }

            Flash::success(__('User create success'));
        } else {
            Flash::error(__('User create failed'));
        }

        return redirect(route('authz.admin_index_users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id');

        return view('authz::admin.users.edit')->with(compact('user', 'roles'));
    }

    public function update(AdminUserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->all();

        if ($data['password'] == "") {
            unset($data['password']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        if ($user->update($data)) {
            Flash::success(__('Update user success'));
        } else {
            Flash::error(__('Update user failed'));
        }

        return redirect(route('authz.admin_index_users', $id));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        return view('authz::admin.users.delete')->with(compact('user'));

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            Flash::success(__('Delete user success'));
        } else {
            Flash::error(__('Delete user failed'));
        }

        return redirect(route('authz.admin_index_users'));

    }


}
