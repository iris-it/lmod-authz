<?php

namespace Irisit\Authz\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

use Irisit\Authz\Traits\CanResetPassword;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class BaseUser extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{

    protected $table = 'users';

    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * An user has many roles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('Irisit\Authz\Models\Role');
    }

    /**
     * this assign roles to an user (obvious isn'it ?)
     *
     * @param $role
     * @return bool
     */
    public function assignRole($role)
    {
        $role = Role::where('name', $role)->firstOrFail();

        return $this->role()->associate($role)->save();
    }

    /**
     * check if user has role
     *
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->role->name == $role;
        }

        return false;
    }

    /**
     * check if user has role
     *
     * @param $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            foreach ($this->role->permissions as $permissionRole) {
                if ($permissionRole->name == $permission) {
                    return true;
                }
            }
        }

        return false;
    }

}