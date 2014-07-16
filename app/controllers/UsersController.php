<?php

namespace App\Controllers;

use App\Controllers\AuthController;
use App\Models\Users;
use View;
use Validator;
use Redirect;
use Session;
use Input;

class UsersController extends AuthController {

    public function home() {
        return View::make('user.home');
    }

    public function view() {
        $use = Users::paginate(2);
        $data = [
            'user' => $use,
        ];
        return View::make('user.view', $data);
    }

    public function Add() {
        return View::make('user.add');
    }

    public function prosesAdd() {
        $rules = [
            'user' => 'required',
            'pass' => 'required',
            'email' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/user/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new Users;
            $ket->username = $in['user'];
            $ket->password = $in['pass'];
            $ket->email = $in['email'];
            $ket->save();

            Session::flash('message', 'Data Berhasil Disimpan ... (o_O).!');
            return Redirect::to('user/view');
        }
    }

    public function Edit($id) {
        $ket = Users::find($id);
        $data = [
            'isi' => $ket,
        ];
        return View::make('user.edit', $data);
    }

    public function userUpdate($id) {
        $rules = [
            'user' => 'required',
            'pass' => 'required',
            'email' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/user/edit/' . $id)->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Users::find($id);
            $ket->username = $in['user'];
            $ket->password = $in['pass'];
            $ket->email = $in['email'];
            $ket->save();

            // redirect ke halaman band index
            Session::flash('message', 'Data Sukses Di Perbaharui..  :-) .!');
            return Redirect::to('user/view');
        }
    }

    public function delete($id) {
        $user = Users::find($id);
        $user->delete();
        Session::flash('message', 'Data Berhasil di Hapus dari Database....!');
        return Redirect::to('user/view');
    }

}
