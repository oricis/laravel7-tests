<?php

namespace App\Http\Controllers;

class TestRoutesController extends Controller
{
    public function index(string $color, int $number)
    {
        logger('Params: ' . $color . '@' . $number);

        return redirect()->back();
    }
}
