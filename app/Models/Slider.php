<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Slider extends Model
{
    use HasFactory;
    use Mediable;
    use Sluggable;
    use Taggable;

    protected $fillable = ['name', 'slug', 'order', 'status'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name','id','order'],
                'onUpdate' => true,
            ],
        ];
    }

    public function scopeActive(Builder $query, int $val = 1): Builder
    {
        return $query->where('status', $val);
    }
}
