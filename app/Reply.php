<?php

namespace Muntadaa;

use Muntadaa\User;
use Muntadaa\Discussion;
use Muntadaa\InheritedModel;

class Reply extends InheritedModel
{
    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
