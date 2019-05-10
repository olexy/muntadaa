<?php

namespace Muntadaa;

use Muntadaa\User;
use Muntadaa\Reply;

class Discussion extends InheritedModel
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
