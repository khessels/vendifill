<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

abstract class Controller extends BaseController
{
    public function alertNotification( $message = 'Success', $class = 'success', $disappear = 3000){
        Session::flash('alert-message', $message);
        Session::flash('alert-timeout', $disappear);
        Session::flash('alert-class', 'alert-' . $class);
    }
}
