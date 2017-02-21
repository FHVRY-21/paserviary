<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
// use Illuminate\Http\Request;
// use App\ActivationService;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/shop';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_depan' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected $activationService;
    protected function create(array $data)
    {
        return User::create([
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'role' => $data['role'],
            'no_rekening' => $data['no_rekening'],
            'password' => bcrypt($data['password'])
        ]);
    }

//     public function __construct(ActivationService $activationService)
// {
//     $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
//     $this->activationService = $activationService;
// }

// public function register(Request $request)
// {
//     $validator = $this->validator($request->all());

//     if ($validator->fails()) {
//         $this->throwValidationException(
//             $request, $validator
//         );
//     }

//     $user = $this->create($request->all());

//     $this->activationService->sendActivationMail($user);

//     return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
// }

}
