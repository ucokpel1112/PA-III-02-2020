<?php

namespace App\Http\Controllers\Auth;

use App\Komunitas;
use App\KomunitasMember;
use App\Mail\PemberitahuanMemberEmail;
use App\Member;
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
    protected function validatorr(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'no_KTP' => ['required', 'string'],
            'photo' => ['required'],
            'no_WA' => ['required', 'string'],
            'no_HP' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
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


    protected function create(array $data,string $filename=null)
    {
        if(isset($data['komunitas'])){
            $user = User::create([
                'name' => $data['name'],
                'no_WA' => $data['no_WA'],
                'no_HP' => $data['no_HP'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'token' => Str::random(40),
            ]);
            $user->status = 1;
            $user->save();
            $member = Member::create([
                'user_id'=>$user['id'],
                'no_KTP' => $data['no_KTP'],
                'photo'=> $filename,
            ]);
            $komunitas_member = KomunitasMember::create([
                'member_id'=>$member['id'],
                'komunitas_id'=>$data['komunitas']
            ]);
            Mail::to($user['email'])->send(new PemberitahuanMemberEmail());
        }else{
            $user = User::create([
                'name' => $data['name'],
                'no_WA' => $data['no_WA'],
                'no_HP' => $data['no_HP'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'token' => Str::random(40),
            ]);
            $user->status=0;
            $user->save();
            Mail::to($user['email'])->send(new KonfirmasiEmail($user));
        }


        return $user;
    }

    public function choice(){
        return view('auth.register_choice');
    }

    public function konfirmasiemail($email, $token)
    {
        User::where(['email' => $email, 'token' => $token])->update(['email_verified_at'=>now(),'register_status' => '1', 'token' => NULL]);

        return redirect('login')->withInfo('Selamat, akun anda telah aktif.');
    }
}
