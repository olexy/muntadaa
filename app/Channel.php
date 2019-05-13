<?php

namespace Muntadaa;

class Channel extends InheritedModel
{
    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
