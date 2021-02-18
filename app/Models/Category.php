<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';


    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }


    public static function getHierarchy(bool $onlyActive = false): array
    {
        // TODO:

        return [];
    }
}
