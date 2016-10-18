<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
    	'user_id', 'title', 'slug_title', 'content'
    ];

    public function sluggable() {
        return [
            'slug_title' => [
                'source' => 'title',
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
