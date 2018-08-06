<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = 'post_tag';

    protected $fillable = [
		'tag_id',
		'post_id',        
    ];

    public function tag()
    {
    	return $this->bolongsTo(Tag::class);
    }

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
