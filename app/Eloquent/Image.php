<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'post_id',
    	'url',
    	'priority',
    ];

    protected $hidden = [
    	'post_id',
    ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
