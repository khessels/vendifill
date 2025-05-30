<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

abstract class BaseController
{
    public function criticalException($request, $e, $file, $function, $line, $payload = null): void
    {
        if(!empty($e)){
            error_log($e->getMessage());
        }
    }
}
