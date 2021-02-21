<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{

    public function printCategoriesHierarchy()
    {
        dump(__METHOD__);
        dump(Category::getHierarchyString());
    }
}
