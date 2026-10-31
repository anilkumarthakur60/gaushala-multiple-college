<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;
use Plank\Mediable\MediableInterface;

class Teacher extends Model implements MediableInterface
{
    use HasFactory;
    use Mediable;
    use Sluggable;

    protected $fillable = [
        'name',
        'email',
        'slug',
        'description',
        'subject',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
}
