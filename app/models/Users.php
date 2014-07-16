<?php

namespace App\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class Users extends Eloquent implements UserInterface, RemindableInterface {

    protected $table = 'users';
    public $timestamps = true;

    public function daftar() {
        return $this->hasMany("App\\Models\\Daftar");
    }

    public function pelanggan() {
        return $this->hasMany("App\\Models\\Pelanggan");
    }

    public function transaksi() {
        return $this->hasMany("App\\Models\\Transaksi");
    }

    protected $hidden = array('password');

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return Hash::make(Crypt::decrypt($this->password));
    }

    public function getRememberToken() {
        return $this->remember_token;
    }

    public function setRememberToken($value) {
        $this->remember_token = $value;
    }

    public function getRememberTokenName() {
        return 'remember_token';
    }

    public function getReminderEmail() {
        return $this->email;
    }

}
