<?php namespace Irisit\Authz\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [];

        switch ($this->method()) {

            case 'POST' :

                $rules = [
                    'firstname' => 'required|max:255',
                    'lastname' => 'required|max:255',
                    'email' => 'required|email|unique:users,email,' . $this->id,
                    'role_id' => 'required|integer',
                ];

                if (config('irisit_authz.admin_generate_and_send_password', true) === false) {
                    $rules['password'] = 'required|string|min:6|confirmed';
                }

                return $rules;

                break;

            case 'PUT':

                $rules = [
                    'firstname' => 'required|max:255',
                    'lastname' => 'required|max:255',
                    'email' => 'required|email|unique:users,email,' . $this->id,
                    'role_id' => 'required|integer',
                ];

                if (config('irisit_authz.admin_generate_and_send_password', true) === false) {
                    $rules['password'] = 'nullable|required_with:password_confirmation|min:6|confirmed';
                }

                return $rules;

                break;
        }

        return $rules;

    }
}
