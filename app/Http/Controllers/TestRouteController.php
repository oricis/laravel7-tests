<?php

namespace App\Http\Controllers;

class TestRouteController extends Controller
{
    public function index(string $color, int $number)
    {
        logger('Params: ' . $color . '@' . $number);

        return redirect()->back();
    }
}
