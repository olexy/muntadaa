<?php

namespace Muntadaa;

use Muntadaa\User;
use Muntadaa\Reply;
use Muntadaa\Notifications\BestReply;

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

    public function bestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }


    public function markAsBestReply(Reply $reply)
    {
        $this->update([
            'reply_id' => $reply->id

        ]);

        $reply->owner->notify(new BestReply($reply->discussion));
    }
}
