<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Services;

use MailchimpTransactional\ApiClient;

class MailChimpService
{
    protected $mailChimpClient;
    /**
     * @var \MailchimpTransactional\Api\MessagesApi
     */
    protected $messages;

    public function __construct()
    {
        $this->mailChimpClient = new ApiClient();
        $this->mailChimpClient->setApiKey('');
        $this->messages = $this->mailChimpClient->messages;
    }

    public function sendMessage(array $options)
    {
        return $this->messages->send(["message" => $options]);
    }
}
