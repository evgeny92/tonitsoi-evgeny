<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller {
   /*
   |--------------------------------------------------------------------------
   | Password Reset Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for handling password reset requests
   | and uses a simple trait to include this behavior. You're free to
   | explore this trait and override any methods you wish to tweak.
   |
   */

   use ResetsPasswords;

   /**
    * Where to redirect users after resetting their password.
    *
    * @var string
    */
   protected $redirectTo = 'admindash/login';

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct(){
      $this->middleware('guest');
   }

   protected function resetPassword($user, $password){
      $user->forceFill([
         'password' => bcrypt($password),
         'remember_token' => Str::random(60),
      ])->save();
   }

   protected function rules(){
      return [
         'token' => 'required',
         'email' => 'required|email',
         'password' => 'required|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/',
      ];
   }
}
