<?php

namespace App\Models;

use App\Models\Traits\CategoryTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CategoryTrait;


    protected $table = 'categories';


    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
}
