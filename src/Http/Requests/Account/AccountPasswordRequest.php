<?php namespace Irisit\Authz\Http\Requests\Account;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Http\FormRequest;

class AccountPasswordRequest extends FormRequest
{
    /**
     * @var Guard
     */
    private $auth;

    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

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

        $rules = [
            'old_password' => 'required|hash:' . $this->auth->user()->password,
            'new_password' => 'required|min:6|confirmed'
        ];

        return $rules;
    }
}
