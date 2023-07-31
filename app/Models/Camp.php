<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Cviebrock\EloquentSluggable\Sluggable;

class Camp extends Model
{
    use HasFactory;
    use HasUuids;
    use Sluggable;

    protected $fillable = ['name', 'price', 'images', 'description'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
