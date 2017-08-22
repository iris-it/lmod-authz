<?php

namespace Irisit\Authz\Services;


class PasswordGenService
{

    public function generate()
    {
        return $this->random_password(8);
    }

    function random_password($length = 8)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%_-=";
        $password = substr(str_shuffle($chars), 0, $length);
        return $password;
    }

}
