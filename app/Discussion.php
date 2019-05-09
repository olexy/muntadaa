<?php

namespace Muntadaa;

use Muntadaa\User;

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
}
