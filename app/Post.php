<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
//    use Sluggable;
    protected $guarded = [];
    protected $dates = ['shown'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }
}
