<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{

    public function printCategoriesHierarchy()
    {
        dump(__METHOD__);
        dump(Category::getHierarchy());
    }
}
