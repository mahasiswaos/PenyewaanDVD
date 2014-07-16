<?php

namespace App\Controllers;

use App\Controllers\AuthController;
use App\Models\Daftar;
use App\Models\Users;
use View;
use Validator;
use Redirect;
use Session;
use Input;

class DaftarController extends AuthController {

    public function view() {
        $input = Daftar::paginate(5);
        $data = [
            'isi' => $input,
        ];
        return View::make('daftar.view', $data);
    }

    public function add() {
        $user = Users::all();
        $data = [
            'isi' => $user,
        ];
        return View::make('daftar.add', $data);
    }

    public function prosesAdd() {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/daftar/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new Daftar;
            $ket->users_id = $in['id'];
            $ket->nama = $in['nama'];
            $ket->kategori = $in['kategori'];
            $ket->status = $in['status'];
            $ket->jenis = $in['jenis'];
            $ket->jumlah = $in['jumlah'];
            $ket->save();

            Session::flash('message', 'Data Berhasil Disimpan');
            return Redirect::to('daftar/view');
        }
    }

    public function Edit($id) {
        $ket = Daftar::find($id);
        $use = $ket->users;
        $data = [
            'isi' => $ket,
            'use' => $use,
        ];
        return View::make('daftar.edit', $data);
    }

    public function DaftarUpdate($id) {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/daftar/edit')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Daftar::find($id);
            $ket->users_id = $in['id'];
            $ket->nama = $in['nama'];
            $ket->kategori = $in['kategori'];
            $ket->status = $in['status'];
            $ket->jenis = $in['jenis'];
            $ket->jumlah = $in['jumlah'];
            $ket->save();

            // redirect ke halaman band index
            Session::flash('message', 'Data Sukses Di Perbaharui');
            return Redirect::to('daftar/view');
        }
    }

    public function delete($id) {
        $user = Daftar::find($id);
        $user->delete();
        Session::flash('message', 'Data Berhasil di Hapus dari Database');
        return Redirect::to('daftar/view');
    }

}
