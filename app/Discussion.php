<?php

namespace Muntadaa;

use Muntadaa\User;
use Muntadaa\Reply;
use Muntadaa\Channel;
use Muntadaa\Notifications\BestReply;

class Discussion extends InheritedModel
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
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

        if($reply->owner->id == $this->author->id) {
            return;
        }

        $reply->owner->notify(new BestReply($reply->discussion));


    }

    public function scopeFilterByChannels($builder)
    {
        if(request()->query('channel'))
        {
            $channel = Channel::where('slug', request()->query('channel'))->first();

            if($channel) {
                return $builder->where('channel_id', $channel->id);
            }

            return $builder;

        }

        return $builder;
    }
}
