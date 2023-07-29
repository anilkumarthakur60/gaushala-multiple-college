<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Plank\Mediable\Mediable;

class Teacher extends Model
{
    use HasFactory;
    use Mediable;
    use Sluggable;

    protected $fillable = [
        'name',
        'email',
        'slug',
        'description'
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
