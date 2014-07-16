<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Input;
use Validator;
use Auth;
use Redirect;
use Session;
use App\Models\Users;
use View;

class LoginController extends BaseController {

    public function index() {
        return View::make('login.index');
    }

    public function prosesLogin() {
        $inp = Input::all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $valid = Validator::make($inp, $rules);
        if ($valid->fails()) {
            return Redirect::to('/login')->withErrors($valid);
        } else {
            $email = $inp['email'];
            $pass = $inp['password'];
            $data = [
                'email' => $email,
                'password' => $pass,
            ];
            if (Auth::attempt($data)) {
                Session::flash('message', 'Successfully Login!');
                return Redirect::intended('/home');
            } else {
                Session::flash('message', 'Wrong Username and or Password!!!');
                return Redirect::to('/login');
            }
        }
    }

    public function doLogout() {
        Auth::Logout();
        return Redirect::to('login');
    }

}
