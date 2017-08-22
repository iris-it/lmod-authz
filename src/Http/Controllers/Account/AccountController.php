<?php

namespace Irisit\Authz\Http\Controllers\Account;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Irisit\Authz\Http\Controllers\Controller;
use Irisit\Authz\Http\Requests\Account\AccountPasswordRequest;
use Irisit\Authz\Http\Requests\Account\AccountUserRequest;

use Laracasts\Flash\Flash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function edit()
    {
        $user = Auth::user();

        return view('authz::backend.edit')->with(compact('user'));
    }

    /**
     * Display a listing of the resource.
     * @param AccountUserRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateUser(AccountUserRequest $request)
    {
        $user = Auth::user();

        $data = $request->all();

        if ($user->update($data)) {
            Flash::success(__('Update informations success'));
        } else {
            Flash::error(__('Update informations failed'));
        }

        return redirect(route('authz.edit_account'));
    }

    /**
     * Display a listing of the resource.
     * @param AccountPasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updatePassword(AccountPasswordRequest $request)
    {
        $user = Auth::user();

        $data = $request->all();

        $data['password'] = bcrypt($data['new_password']);

        unset($data['old_password']);
        unset($data['new_password']);

        if ($user->update($data)) {
            Flash::success(__('Update password success'));
        } else {
            Flash::error(__('Update password failed'));
        }

        return redirect(route('authz.edit_account'));
    }


}
