<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static sendMessage(array $options)
 *
 * @see \App\Services\MailChimpService
 */
class MailChimpTransactionalEmail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailchimpApi';
    }
}
