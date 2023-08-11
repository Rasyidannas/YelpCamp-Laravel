<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Camp extends Model
{
    use HasFactory;
    use HasUuids;
    use Sluggable;

    protected $fillable = ['name', 'price', 'images', 'description', 'user_id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments(): HasMany
    {
        return $this->hasMany('App\Models\Comment');
    }

    public static function booted(): void
    {
        //this is for deleting comments(foreign key)
        static::deleting(function (Camp $camp){
            $camp->comments()->delete();
        });
    }
}
