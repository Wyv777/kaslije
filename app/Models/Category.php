<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function products(){
        return $this->hasMany('App\Models\Product','category_id');
    }

    // loads only 1st level children
    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    // recursive, loads all children
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    // load 1st level parent
    public function parent()
    {
        return $this->belongsTo('App\Models\Category','parent_id', 'id');
    }

    // recursive load all parents.
    public function parentRecursive()
    {
        return $this->parent()->with('parentRecursive');
    }

    //example query
    // $categories = Category::with('childrenRecursive')->where('parent_id',0)->get();
}
