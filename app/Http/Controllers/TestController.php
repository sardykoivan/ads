<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function index()
    {
        $phpinfo = phpinfo();
        return new Response((string) $phpinfo);
    }
}
