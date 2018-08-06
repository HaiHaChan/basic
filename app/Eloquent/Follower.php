<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $fillable = [
    	
    ];

    protected $hidden = [
    	'user_id',
    	'fowller_id',
    ];

    public function follower()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function following()
    {
    	return $this->belongsTo(User::class, 'follower_id');
    }
}
