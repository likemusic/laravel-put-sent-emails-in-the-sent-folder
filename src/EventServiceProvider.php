<?php

namespace Likemusic\Laravel\PutSentEmailsInTheSentFolder;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSent;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        MessageSent::class => [
            PutSentEmailToSentImapFolder::class,
        ],
    ];
}
