<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'content',
    ];

    public function posts()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
