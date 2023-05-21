<?php

namespace Likemusic\Laravel\PutSentEmailsInTheSentFolder;

use Illuminate\Mail\Events\MessageSent;
use Webklex\IMAP\Facades\Client;

class PutSentEmailToSentImapFolder
{
    /**
     * Handle the event.
     *
     * @param MessageSent $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        $emailMessage = $event->message->toString();

        /** @var \Webklex\PHPIMAP\Client $client */
        $client = Client::account('default');
        $client->connect();

        $sentFolder = $client->getFolder('Sent');
        $sentFolder->appendMessage($emailMessage);
    }
}
