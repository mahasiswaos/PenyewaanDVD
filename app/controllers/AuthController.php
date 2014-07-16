<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController {

    function __construct() {

       // $this->beforeFilter('auth', array('except' => '/login'));
    }

}
