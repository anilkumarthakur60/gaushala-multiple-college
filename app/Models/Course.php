<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Course extends Model
{
    use HasFactory;

    use Mediable;
    use Taggable;
    use Sluggable;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'students',
        'hours',
        'rating',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
