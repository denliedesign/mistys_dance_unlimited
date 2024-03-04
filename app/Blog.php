<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|Blog where(string $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Model|Blog findOrFail(mixed $id, array $columns = ['*'])
 */

class Blog extends Model
{
    use Sluggable;
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['blog_date'];

        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'seo_title'
            ]
        ];
    }
}
