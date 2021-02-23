<?php

namespace App\Http\Controllers;

class ErrorController extends Controller
{

    public function e404()
    {
        abort('404');
    }

    public function e500()
    {
        abort('500');
    }
}
