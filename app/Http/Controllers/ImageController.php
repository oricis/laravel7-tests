<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {

        // TODO: store image

        $id = 0;

        return [
            'status' => 200,
            'success' => true,
            'data'    => [
                'id'      => $id,
                'message' => 'Acción completada',
            ],
        ];
    }
}
