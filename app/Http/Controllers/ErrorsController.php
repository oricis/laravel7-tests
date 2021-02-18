<?php

namespace App\Http\Controllers;

class ErrorsController extends Controller
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
