<?php

namespace App\Controllers;

use App\Controllers\AuthController;
use App\Models\Transaksi;
use App\Models\Users;
use App\Models\Pelanggan;
use Input;
use Validator;
use Redirect;
use Session;
use View;

class TransaksiController extends AuthController {

    public function view() {
        $input = Transaksi::paginate(4);
        $data = [
            'isi' => $input,
        ];
        return View::make('transaksi.view', $data);
    }

    public function add() {
        $user = Users::all();
        $pel= Pelanggan::all();
        $data = [
            'pela' => $pel,
            'isi' => $user,
        ];
        return View::make('transaksi.add', $data);
    }
    public function prosesAdd() {
        $rules = [
            'id' => 'required',
            'idp' => 'required',
            'tpinjam' => 'required',
            'tkembali' => 'required',
            'tpengembalian' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/transaksi/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new Transaksi;
            $ket->users_id= $in['id'];
            $ket->id_pelanggan = $in['idp'];
            $ket->tgl_pinjam = $in['tpinjam'];
            $ket->tgl_kembali = $in['tkembali'];
            $ket->tgl_pengembalian = $in['tpengembalian'];
            $ket->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('transaksi/view');
        }
    }

    public function edit($id) {
        $ket = Transaksi::find($id);
        $use = $ket->Users;
        $data = [
            'isi' => $ket,
            'use' => $use,
        ];
        return View::make('transaksi.edit', $data);
    }
    
    public function update($id) {
        $rules = [
             'id' => 'required',
            'idp' => 'required',
            'tpinjam' => 'required',
            'tkembali' => 'required',
            'tpengembalian' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/transaksi/edit')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Transaksi::find($id);
            $ket->users_id= $in['id'];
            $ket->id_pelanggan = $in['idp'];
            $ket->tgl_pinjam = $in['tpinjam'];
            $ket->tgl_kembali = $in['tkembali'];
            $ket->tgl_pengembalian = $in['tpengembalian'];
            $ket->save();

            // redirect ke halaman band index
            Session::flash('message', 'Data Sukses Di Perbaharui..  :-) .!');
            return Redirect::to('transaksi/view');
        }
    }

    public function delete($id_transaksi) {
        $user = transaksi::find($id_transaksi);
        $user->delete();
        Session::flash('message', 'Data Berhasil di Hapus dari Database....!');
        return Redirect::to('transaksi/view');
    }

}
