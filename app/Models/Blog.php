<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Blog extends Model
{
    use HasFactory;
    use Mediable;
    use Sluggable;
    use Taggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'short_description'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public function scopeQueryFilter(Builder $query, $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->likeWhere(['name', 'description'], $search);
    }
}
