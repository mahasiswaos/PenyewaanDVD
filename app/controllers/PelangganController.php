<?php

namespace App\Controllers;

use App\Controllers\AuthController;
use App\Models\Pelanggan;
use App\Models\Users;
use View;
use Validator;
use Redirect;
use Session;
use Input;

class PelangganController extends AuthController {

    public function view() {
        $input = Pelanggan::paginate(5);
        $data = [
            'isi' => $input,
        ];
        return View::make('pelanggan.view', $data);
    }

    public function add() {
        $user = Users::all();
        $data = [
            'isi' => $user,
        ];
        return View::make('pelanggan.add', $data);
    }

    public function prosesAdd() {
        $input=Input::all();
        $bs=new Pelanggan;
        $bs->users_id=$input['id'];
        $bs->nama=$input['nama'];
        $bs->jk=$input['jk'];
        $bs->alamat=$input['alamat'];
        $bs->pekerjaan=$input['pekerjaan'];
        $bs->no_id=$input['no_idn'];
        $bs->no_hp=$input['no_hpn'];
        $bs->save();
    }

    public function Edit($id) {
        $ket = Pelanggan::find($id);
        $use = $ket->users;
        $data = [
            'isi' => $ket,
            'use' => $use,
        ];
        return View::make('pelanggan.edit', $data);
    }

    public function pelangganUpdate($id) {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_idn' => 'required',
            'no_hpn' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/pelanggan/edit/'.$id)->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Pelanggan::find($id);
            $ket->users_id = $in['id'];
            $ket->nama = $in['nama'];
            $ket->jk = $in['jk'];
            $ket->alamat = $in['alamat'];
            $ket->pekerjaan = $in['pekerjaan'];
            $ket->no_id = $in['no_idn'];
            $ket->no_hp = $in['no_hpn'];
            $ket->save();

            // redirect ke halaman band index
            Session::flash('message', 'Data Sukses Di Perbaharui..  :-) .!');
            return Redirect::to('pelanggan/view');
        }
    }

    public function delete($id) {
        $user = Pelanggan::find($id);
        $user->delete();
        Session::flash('message', 'Data Berhasil di Hapus dari Database....!');
        return Redirect::to('pelanggan/view');
    }

}
