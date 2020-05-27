<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\KonfirmasiEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'no_KTP' => ['required', 'string'],
            'photo' => ['required', 'string'],
            'no_WA' => ['required', 'string'],
            'no_HP' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {
        if(isset($data['komunitas'])){
            $user = User::create([
                'name' => $data['name'],
                'no_KTP' => $data['no_KTP'],
                'photo'=> $data['photo'],
                'no_WA' => $data['no_WA'],
                'no_HP' => $data['no_HP'],
                'email' => $data['email'],
                'status'=>1,
                'password' => Hash::make($data['password']),
                'token' => Str::random(40),
            ]);
            Mail::to($user['email'])->send(new KonfirmasiEmail($user));
        }else{
            $user = User::create([
                'name' => $data['name'],
                'no_KTP' => $data['no_KTP'],
                'photo'=> $data['photo'],
                'no_WA' => $data['no_WA'],
                'no_HP' => $data['no_HP'],
                'email' => $data['email'],
                'status' => 0,
                'password' => Hash::make($data['password']),
                'token' => Str::random(40),
            ]);
            Mail::to($user['email'])->send(new KonfirmasiEmail($user));
        }


        return $user;
    }

    public function choice(){
        return view('auth.register_choice');
    }

    public function konfirmasiemail($email, $token)
    {
        User::where(['email' => $email, 'token' => $token])->update(['register_status' => '1', 'token' => NULL]);

        return redirect('login')->withInfo('Selamat, akun anda telah aktif.');
    }
}
